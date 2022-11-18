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
        
        Schema::create('berkas_lanjutan', function (Blueprint $table) {
            $table->id('id_berkas_lanjutan');
            $table->unsignedInteger('id_mahasiswa');
            $table->foreign('id_mahasiswa')->references('id_mahasiswa')->on('mahasiswa');
            $table->integer('ukt');
            $table->integer('nilai_ukt');
            $table->integer('penghasilan_ayah');
            $table->integer('penghasilan_ibu');
            $table->integer('total_penghasilan');
            $table->integer('jml_anggota');
            $table->double('totalPenghasilanAnggota');
            $table->string('status_ayah');
            $table->string('status_ibu');
            $table->string('status_kip');
            $table->string('status_tdk_mampu');
            $table->string('status_kks');
            $table->rememberToken();
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
        //
    }
};
