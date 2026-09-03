<?php

namespace App\Http\Controllers;

use App\Models\ItemPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $keyword = $request->search;

        $sales = Penjualan::with([
            'user',
            'itemPenjualan.produk'
        ])
        ->when($keyword, function ($query) use ($keyword) {

            $query->where(function ($q) use ($keyword) {

                // Cari berdasarkan metode pembayaran
                $q->where(
                    'metode_pembayaran',
                    'like',
                    '%' . $keyword . '%'
                )

                // Cari berdasarkan status
                ->orWhere(
                    'status',
                    'like',
                    '%' . $keyword . '%'
                )

                // Cari berdasarkan nama kasir
                ->orWhereHas('user', function ($userQuery) use ($keyword) {

                    $userQuery->where(
                        'name',
                        'like',
                        '%' . $keyword . '%'
                    );

                })

                // Cari berdasarkan nama produk
                ->orWhereHas('itemPenjualan.produk', function ($produkQuery) use ($keyword) {

                    $produkQuery->where(
                        'nama',
                        'like',
                        '%' . $keyword . '%'
                    );

                });

            });

        })
        ->latest()
        ->paginate(10)
        ->withQueryString();

        return view(
            'penjualan.index',
            compact('sales')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create(Request $request)
    {
        $produks = Produk::when(
            $request->search,
            function ($query) use ($request) {

                $query->where(
                    'nama',
                    'like',
                    '%' . $request->search . '%'
                );

            }
        )
        ->get();

        $keranjang = session()->get(
            'keranjang',
            []
        );

        return view(
            'penjualan.create',
            compact(
                'produks',
                'keranjang'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | STORE - TAMBAH PRODUK KE KERANJANG
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produk,id',
            'qty' => 'required|integer|min:1',
        ]);

        $produk = Produk::findOrFail(
            $request->produk_id
        );

        $keranjang = session()->get(
            'keranjang',
            []
        );

        // Qty produk yang sudah ada di keranjang
        $qtyDiKeranjang = isset($keranjang[$produk->id])
            ? $keranjang[$produk->id]['qty']
            : 0;

        // Total qty setelah ditambahkan
        $totalQtyDiinginkan =
            $qtyDiKeranjang + $request->qty;


        /*
        |--------------------------------------------------------------------------
        | CEK STOK
        |--------------------------------------------------------------------------
        */

        if ($produk->stok <= 0) {

            return redirect()
                ->route('penjualan.create')
                ->with(
                    'error',
                    "Stok {$produk->nama} sudah habis."
                );
        }


        if ($totalQtyDiinginkan > $produk->stok) {

            return redirect()
                ->route('penjualan.create')
                ->with(
                    'error',
                    "Qty melebihi stok tersedia. Stok {$produk->nama} hanya {$produk->stok}, di keranjang sudah ada {$qtyDiKeranjang}."
                );
        }


        /*
        |--------------------------------------------------------------------------
        | TAMBAH KE KERANJANG
        |--------------------------------------------------------------------------
        */

        if (isset($keranjang[$produk->id])) {

            $keranjang[$produk->id]['qty']
                += $request->qty;

        } else {

            $keranjang[$produk->id] = [

                'produk_id' => $produk->id,

                'nama' => $produk->nama,

                'harga' => $produk->harga_jual,

                'qty' => $request->qty,

                'subtotal' =>
                    $produk->harga_jual
                    * $request->qty,
            ];
        }


        // Hitung ulang subtotal
        $keranjang[$produk->id]['subtotal'] =
            $keranjang[$produk->id]['harga']
            *
            $keranjang[$produk->id]['qty'];


        session()->put(
            'keranjang',
            $keranjang
        );


        return redirect()
            ->route('penjualan.create')
            ->with(
                'success',
                'Produk berhasil ditambahkan ke keranjang.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | HAPUS ITEM KERANJANG
    |--------------------------------------------------------------------------
    */

    public function destroyItem($id)
    {
        $keranjang = session()->get(
            'keranjang',
            []
        );

        if (isset($keranjang[$id])) {

            $namaProduk =
                $keranjang[$id]['nama'];

            unset($keranjang[$id]);

            session()->put(
                'keranjang',
                $keranjang
            );

            return redirect()
                ->route('penjualan.create')
                ->with(
                    'success',
                    "{$namaProduk} berhasil dihapus dari keranjang."
                );
        }


        return redirect()
            ->route('penjualan.create')
            ->with(
                'error',
                'Produk tidak ditemukan di keranjang.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | CANCEL
    |--------------------------------------------------------------------------
    */

    public function cancel()
    {
        session()->forget('keranjang');

        return redirect()
            ->route('penjualan.create')
            ->with(
                'success',
                'Transaksi berhasil dibatalkan.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | CHECKOUT
    |--------------------------------------------------------------------------
    */

    public function checkout(Request $request)
    {
        $request->validate([
            'payment_method' =>
                'required|in:cash,transfer,qris',
        ]);


        $keranjang = session()->get(
            'keranjang',
            []
        );


        if (empty($keranjang)) {

            return back()
                ->with(
                    'error',
                    'Keranjang masih kosong.'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | VALIDASI ULANG STOK
        |--------------------------------------------------------------------------
        */

        foreach ($keranjang as $item) {

            $produk = Produk::find(
                $item['produk_id']
            );


            if (!$produk) {

                return back()
                    ->with(
                        'error',
                        "Produk {$item['nama']} tidak ditemukan."
                    );
            }


            if ($item['qty'] > $produk->stok) {

                return back()
                    ->with(
                        'error',
                        "Stok {$produk->nama} tidak mencukupi. Sisa stok: {$produk->stok}."
                    );
            }
        }


        /*
        |--------------------------------------------------------------------------
        | HITUNG TOTAL
        |--------------------------------------------------------------------------
        */

        $total = 0;

        foreach ($keranjang as $item) {

            $total +=
                $item['harga']
                *
                $item['qty'];
        }


        /*
        |--------------------------------------------------------------------------
        | TRANSACTION
        |--------------------------------------------------------------------------
        */

        DB::transaction(function () use (
            $keranjang,
            $total,
            $request
        ) {

            // Header penjualan
            $penjualan = Penjualan::create([

                'user_id' =>
                    Auth::id(),

                'tanggal_transaksi' =>
                    now(),

                'total_pembayaran' =>
                    $total,

                'metode_pembayaran' =>
                    strtoupper(
                        $request->payment_method
                    ),

                'status' =>
                    'SELESAI',
            ]);


            // Detail penjualan
            foreach ($keranjang as $item) {

                ItemPenjualan::create([

                    'penjualan_id' =>
                        $penjualan->id,

                    'produk_id' =>
                        $item['produk_id'],

                    'qty' =>
                        $item['qty'],

                    'harga_satuan' =>
                        $item['harga'],

                    'subtotal' =>
                        $item['harga']
                        *
                        $item['qty'],
                ]);


                // Kurangi stok
                $produk = Produk::find(
                    $item['produk_id']
                );


                if ($produk) {

                    $produk->decrement(
                        'stok',
                        $item['qty']
                    );
                }
            }
        });


        // Kosongkan keranjang
        session()->forget('keranjang');


        return redirect()
            ->route('penjualan.index')
            ->with(
                'success',
                'Transaksi berhasil disimpan.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | SHOW
    |--------------------------------------------------------------------------
    */

    public function show(Penjualan $penjualan)
    {
        $penjualan->load(
            'user',
            'itemPenjualan.produk'
        );

        return view(
            'penjualan.show',
            compact('penjualan')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit(Penjualan $penjualan)
    {
        return view(
            'penjualan.edit',
            compact('penjualan')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(
        Request $request,
        Penjualan $penjualan
    ) {

        $request->validate([

            'metode_pembayaran' =>
                'required',

            'status' =>
                'required',

            'total_pembayaran' =>
                'required|numeric|min:0',
        ]);


        $penjualan->update([

            'metode_pembayaran' =>
                strtoupper(
                    $request->metode_pembayaran
                ),

            'status' =>
                $request->status,

            'total_pembayaran' =>
                $request->total_pembayaran,
        ]);


        return redirect()
            ->route('penjualan.index')
            ->with(
                'success',
                'Data berhasil diperbarui.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | DESTROY
    |--------------------------------------------------------------------------
    */

    public function destroy(
        Penjualan $penjualan
    ) {

        $penjualan->delete();


        return redirect()
            ->route('penjualan.index')
            ->with(
                'success',
                'Penjualan berhasil dihapus.'
            );
    }
}