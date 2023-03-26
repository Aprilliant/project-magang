<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->string('nomer_kredit');
            $table->string('tanggal_kunjungan');
            $table->string('kondisi_nasabah');
            $table->string('kondisi_barang_jaminan');
            $table->string('tanggal_janji_bayar');
            $table->string('hasil_kunjungan');
            $table->string('nominal_membayar');
            $table->string('bukti_membayar');
            $table->string('foto_kunjungan');
            $table->string('laporan');
            // $table->foreignId('id_pegawai')->constrained('pegawai');
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
        Schema::dropIfExists('laporan');
    }
};
