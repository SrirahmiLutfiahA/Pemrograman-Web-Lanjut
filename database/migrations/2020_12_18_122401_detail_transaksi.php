<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->increments('id_detail_transaksi');
            $table->integer('id_menu')->unsigned();
            $table->integer('id_header_transaksi')->unsigned();
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('id_menu')->references('id')->on('menu');
            $table->foreign('id_header_transaksi')->references('id_header_transaksi')->on('header_transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_transaksi', function(Blueprint $table){
            $table->dropForeign('detail_transaksi_menu_id_foreign');
            $table->dropForeign('detail_transaksi_header_transaksi_id_header_transaksi_foreign');
        });

        Schema::dropIfExists('detail_transaksi');
    }
}