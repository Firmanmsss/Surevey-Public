<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPilihanJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihan_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->increment('no_pertanyaan');
            $table->foreign('id_survei')->references('id')->on('survei');
            $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->foreign('id_tipepertanyaan')->references('id')->on('tipe_pertanyaan');
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
        Schema::dropIfExists('pilihan_jawaban');
    }
}
