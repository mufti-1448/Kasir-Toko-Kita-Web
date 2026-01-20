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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id('id_detail');
            $table->integer('jumlah');
            $table->integer('subtotal');
            //foreign key
            $table->unsignedBigInteger('id_transaksi');
            $table->foreign('id_transaksi')
                    ->references('id_transaksi')
                    ->on('transaksi')
                    ->cascadeOnDelete();

            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')
                    ->references('id_produk')
                    ->on('produk')
                    ->cascadeOnDelete();
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
