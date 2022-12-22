<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_user');
            $table->string('daftar');
            $table->string('Badan_Usaha');
            $table->string('Nama_distributor');
            $table->string('Provinsi');
            $table->string('Pupuk_diambil');
            $table->string('Nama_pimpinan');
            $table->string('Jabatan');
            $table->string('alamat');
            $table->string('Nomor_telepon');
            $table->string('Email_perusahaan');
            $table->string('Surat_Pengajuan')->nullable();
            $table->string('pic_perusahaan');
            $table->string('nomor_pic');
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
        Schema::dropIfExists('biodata');
    }
};
