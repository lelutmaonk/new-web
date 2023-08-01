<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->increments('pelayanan_id');
            $table->date('tanggal_permohonan')->nullable();
            $table->string('nomor_agenda')->nullable();
            $table->string('capel_nama')->nullable();
            $table->text('alamat')->nullable();
            $table->text('daya_permohonan')->nullable();
            $table->text('telepon')->nullable();
            $table->string('tarif')->nullable();
            $table->text('file_berkas_permohonan')->nullable();
            $table->text('keterangan')->nullable();
            // 
            $table->date('tanggal_pembayaran')->nullable();
            $table->string('cluster')->nullable();
            $table->date('tanggal_permintaan_teknik')->nullable();
            $table->text('file_surat_clusterisasi')->nullable();
            $table->text('file_surat_izin_tiang')->nullable();
            $table->text('file_sph')->nullable();
            $table->text('file_berkas_sip')->nullable();
            $table->text('file_berkas_pk')->nullable();
            $table->text('file_berkas_ba')->nullable();
            $table->text('file_berkas_spjbtl')->nullable();
            $table->text('file_berkas_peremajaan')->nullable();

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
        Schema::dropIfExists('pelayanan');
    }
}
