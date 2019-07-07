<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id_laporan');
            $table->string('nama_laporan');
            $table->date('tanggal');
            $table->string('keterangan')->nullable();
            $table->integer('jumlah_korban');
            $table->string('lokasi');
            $table->string('logistik')->nullable();
            $table->string('gambar')->nullable();
            $table->string('status_laporan')->nullable();
            $table->integer('id_trc')->unsigned();
            $table->foreign('id_trc')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
