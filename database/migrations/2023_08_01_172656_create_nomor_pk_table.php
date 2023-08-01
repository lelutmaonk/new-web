<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomorPkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomor_pk', function (Blueprint $table) {
            $table->increments('nomor_pk_id');
            $table->string('nomor');
            $table->date('jangka_waktu_awal');
            $table->date('jangka_waktu_akhir');
            $table->string('nilai_kontrak');

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
        Schema::dropIfExists('nomor_pk');
    }
}
