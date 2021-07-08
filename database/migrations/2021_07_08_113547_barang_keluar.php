<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BarangKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bahan_keluar', function (Blueprint $table) {
            $table->char('id_keluar', 6)->primary();
            $table->char('id_bahan', 6);
            $table->char('username', 50);
            $table->integer('jumlah_keluar');
            $table->date('tanggal_keluar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('barang_keluar');
    }
}
