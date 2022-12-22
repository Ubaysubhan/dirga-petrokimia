<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Class CreateSuratizinusahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_izin_usaha', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_user');
            $table->string('nomor_tdp');
            $table->string('masa_berlaku_tdp')->nullable();
            $table->string('file_tdp')->nullable();
            $table->string('nomor_siup')->nullable();;
            $table->string('masa_berlaku_siup')->nullable();;
            $table->string('file_siup')->nullable();
            $table->string('nomor_situ')->nullable();;
            $table->string('masa_berlaku_situ')->nullable();;
            $table->string('file_situ')->nullable();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratizinusaha');
    }
};
