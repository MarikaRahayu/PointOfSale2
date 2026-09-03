<?php

namespace App\Services;

use App\Models\Produk;

class MonitoringStokService
{
    public function produkStokRendah()
    {
        return Produk::where('stok', '>', 0)
            ->where('stok', '<=', 10)
            ->orderBy('stok', 'asc')
            ->get();
    }

    public function produkStokHabis()
    {
        return Produk::where('stok', 0)
            ->orderBy('nama', 'asc')
            ->get();
    }
}