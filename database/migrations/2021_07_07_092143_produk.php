<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('produk', function (Blueprint $table) {
            $table->char('id_produk', 5)->primary();
            $table->string('nama_produk', 20);
            $table->longText('deskripsi_produk', 200);
            $table->string('kategori_produk',20);
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

    }
}
