<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('bahan_masuk', function (Blueprint $table) {
            $table->string('username', 50)->unsigned()->change();
            $table->foreign('username')->references('username')->on('pengguna')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->string('id_bahan', 6)->unsigned()->change();
            $table->foreign('id_bahan')->references('id_bahan')->on('bahan')
            ->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::table('bahan_keluar', function (Blueprint $table) {
            $table->string('username', 50)->unsigned()->change();
            $table->foreign('username')->references('username')->on('pengguna')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->string('id_bahan', 6)->unsigned()->change();
            $table->foreign('id_bahan')->references('id_bahan')->on('bahan')
            ->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::table('detail_penjualan', function (Blueprint $table) {
            $table->string('id_produk', 5)->unsigned()->change();
            $table->foreign('id_produk')->references('id_produk')->on('produk')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->string('id_penjualan', 10)->unsigned()->change();
            $table->foreign('id_penjualan')->references('id_penjualan')->on('penjualan')
            ->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::table('riwayat_pengguna', function (Blueprint $table) {
            $table->string('username', 50)->unsigned()->change();
            $table->foreign('username')->references('username')->on('pengguna')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->string('id_penjualan', 10)->unsigned()->change();
            $table->foreign('id_penjualan')->references('id_penjualan')->on('penjualan')
            ->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('relasi');
    }
}
