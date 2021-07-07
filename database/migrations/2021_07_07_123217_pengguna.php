<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pengguna', function (Blueprint $table) {
            $table->char('username', 50)->primary();
            $table->char('nik', 16);
            $table->string('nama_pengguna', 20);
            $table->string('password', 20);
            $table->string('alamat',100);
            $table->string('posisi',20);
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
        Schema::dropIfExists('pengguna');
    }
}
