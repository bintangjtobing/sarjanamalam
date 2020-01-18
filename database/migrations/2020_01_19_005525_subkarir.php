<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subkarir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcareer', function (Blueprint $table) {
            $table->bigIncrements('subcareer_id');
            $table->string('nama_subcareer');
            $table->string('deskripsi');
            $table->string('minimal_kualifikasi');
            $table->string('kualifikasi_rekomendasi');
            $table->string('tanggung_jawab');
            $table->string('lokasi');
            $table->string('status');
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
        Schema::dropIfExists('subcareer');
    }
}
