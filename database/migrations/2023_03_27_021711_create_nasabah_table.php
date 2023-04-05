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
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kredit');
            $table->string('nama_nasabah');
            $table->string('cabang');
            $table->string('outlet');
            $table->string('alamat');
            $table->string('nomor_hp');
            $table->string('hari_tunggakan');
            $table->string('osl');
            $table->string('angsuran');
            $table->string('kewajiban');
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
        Schema::dropIfExists('nasabah');
    }
};
