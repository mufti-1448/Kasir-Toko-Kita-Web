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
        Schema::create('transaksi', function (Blueprint $tabel) {
            $tabel->id('id_transaksi');
            $tabel->date('tanggal');
            $tabel->integer('total');
            //foreign key
            $tabel->unsignedBigInteger('id_user');
            $tabel->foreign('id_user')
                    ->references('id_user')
                    ->on('users')
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
