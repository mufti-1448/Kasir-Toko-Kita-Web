<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $tabel) {
            $tabel->id('id_produk');
            $tabel->varchar('nama_produk');
            $tabel->integer('harga');
            $tabel->integer('stok');
            //foreign key
            $tabel->unsignedBigInteger('id_kategori');
            $tabel->foreign('id_kategori')
                    ->references('id_kategori')
                    ->on('kategori')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
