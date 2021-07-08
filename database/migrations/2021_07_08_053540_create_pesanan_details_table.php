<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->integer('size_produk');
            $table->unsignedBigInteger('id_pesanan');
            $table->integer('jumlah');
            $table->integer('jumlah_harga');
            $table->timestamps();

            $table->foreign('id_produk')->references('id')->on('produks');
            $table->foreign('id_pesanan')->references('id')->on('pesanans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_details');
    }
}
