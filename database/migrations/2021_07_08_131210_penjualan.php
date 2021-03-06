<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('penjualan', function (Blueprint $table) {
            $table->char('id_penjualan', 10)->primary();
            $table->date('tanggal_penjualan');
            $table->integer('total_penjualan');
            $table->string('status',20);
            // $table->string('nama_pelanggan',50);

            
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
        Schema::dropIfExists('penjualan');
    }
}
