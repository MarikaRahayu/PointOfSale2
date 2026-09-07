<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Membuat tabel jenis_produk.
     */
    public function up(): void
    {
        Schema::create('jenis_produk', function (Blueprint $table) {
            $table->id();

            // User yang membuat jenis produk
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('nama');

            $table->timestamps();
        });
    }

    /**
     * Menghapus tabel jenis_produk.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_produk');
    }
};