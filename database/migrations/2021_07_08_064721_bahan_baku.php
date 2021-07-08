<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BahanBaku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bahan', function (Blueprint $table) {
            $table->char('id_bahan', 6)->primary();
            $table->string('nama_bahan', 50);
            $table->longText('deskripsi_bahan', 200);
            $table->integer('jumlah');
            $table->string('satuan',20);
            $table->integer('harga');
            $table->string('gambar',250);
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
        Schema::dropIfExists('bahan');
    }
}
