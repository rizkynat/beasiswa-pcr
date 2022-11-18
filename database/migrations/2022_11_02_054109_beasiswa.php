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
        Schema::create('beasiswa', function (Blueprint $table) {
            $table->increments('id_beasiswa');
            $table->string('nama_beasiswa');
            $table->dateTime('countdown')->nullable();
            $table->date('awal_daftar')->nullable();
            $table->date('akhir_daftar')->nullable();
            $table->date('pengumuman')->nullable();
            $table->enum('status', ['0', '1']);
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
