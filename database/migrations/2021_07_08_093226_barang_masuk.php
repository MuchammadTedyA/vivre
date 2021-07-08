<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BarangMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bahan_masuk', function (Blueprint $table) {
            $table->char('id_masuk', 6)->primary();
            $table->char('id_bahan', 6);
            $table->char('username', 50);
            $table->integer('jumlah_masuk');
            $table->integer('harga_satuan');
            $table->date('tanggal_masuk');
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
        Schema::dropIfExists('bahan_masuk');
    }
}
