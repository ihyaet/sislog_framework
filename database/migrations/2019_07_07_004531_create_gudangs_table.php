<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGudangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudangs', function (Blueprint $table) {
            $table->increments('id_gudang');
            $table->string('nama_gudang');
            $table->string('deskripsi',80)->nullable();
            $table->string('alamat_gudang',50);
            $table->integer('id_barang')->unsigned()->nullable();
            $table->foreign('id_barang')->references('id_barang')->on('barangs');
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
        Schema::dropIfExists('gudangs');
    }
}
