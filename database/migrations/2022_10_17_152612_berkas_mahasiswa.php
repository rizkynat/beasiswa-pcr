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
        Schema::create('berkas_mahasiswa', function (Blueprint $table) {
            $table->id('id_berkas_mahasiswa');
            $table->unsignedInteger('id_mahasiswa');
            $table->integer('nisn');
            $table->integer('npsn');
            $table->string('asal_sekolah');
            $table->string('legalisir_rapor');
            $table->string('legalisir_ijazah');
            $table->string('legalisir_transkrip_nilai');
            $table->string('legalisir_ktm');
            $table->integer('tahun_angkatan');
            $table->integer('nik');
            $table->string('ktp_mahasiswa');
            $table->string('ktp_ortu');
            $table->string('jns_kelamin');
            $table->integer('no_kk');
            $table->string('file_kk');
            $table->string('alamat');
            $table->string('kabupaten');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->year('tgl_lahir');
            $table->integer('no_telp_rumah');
            $table->string('no_hp_mahasiswa');
            $table->string('surat_mati_ortu');//opsi
            $table->string('surat_ket_cerai');
            $table->string('surat_mohon_rektor');
            $table->string('surat_keabsahan');
            $table->string('surat_ket_tidak_mampu');
            $table->string('biodata_lengkap');
            $table->string('legalisir_kip');//opsi
            
            $table->string('surat_dtks');//opsi
            $table->string('fakultas');//tabel fakultas
            $table->string('program_studi');
            $table->string('ket_aktif_kuliah');
            $table->string('ket_sikap_baik');
            $table->string('tidak_terima_beasiswa');
            $table->string('surat_ket_prestasi');//opsi
            $table->string('rek_listrik');//opsi
            $table->string('bayar_pbb');//opsi
            $table->string('ket_penghasilan_ortu');
            $table->string('pernyataan_penghasilan_ortu');
            $table->string('foto_rumah');
            $table->string('pakta_integritas');
            $table->string('program_kip_kuliah');
            $table->string('kwitansi_dana_kip');
            $table->string('foto_buku_tabungan');
            $table->string('foto_3x4');
            $table->foreign('id_mahasiswa')->references('id_mahasiswa')->on('mahasiswa');
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
