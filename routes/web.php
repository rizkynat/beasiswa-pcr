<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    DB::statement("SET lc_time_names = 'id_ID';");
    $beasiswas = DB::select("select DATE_FORMAT(beasiswa.awal_daftar, '%e %M') as awal_daftar, DATE_FORMAT(beasiswa.akhir_daftar, '%e %M %Y') as akhir_daftar, DATE_FORMAT(beasiswa.pengumuman, '%e %M %Y') as pengumuman, id_beasiswa, nama_beasiswa, DATE_FORMAT(beasiswa.created_at, '%e %M %Y, %H:%i') as created_at from beasiswa");
    return view('index', ['beasiswas'=>$beasiswas]);
});
//mahasiswa
Route::post('/daftar', [DaftarController::class, 'daftarProses'])->name('daftar.proses');
Route::post('/login', [LoginController::class, 'loginMahasiswaProses'])->name('login.proses');

Route::get('/h/mahasiswa', [HomeMahasiswaController::class, 'index'])->name('indexMahasiswa.show');

Route::get('/h/mahasiswa/8', [BeaKIPController::class, 'index'])->name('indexBeaKIP.show');
Route::post('/h/mahasiswa/8', [BeaKIPController::class, 'tambah'])->name('tambahBeaKIP.proses');

Route::get('/h/mahasiswa/hasil', [HomeMahasiswaController::class, 'hasil'])->name('hasilMahasiswa.show');

Route::get('/h/mahasiswa/logout', [LogoutController::class, 'logoutMahasiswa'])->name('logoutMahasiswa');

//admin
Route::get('/admin/login', [LoginController::class, 'loginAdminShow'])->name('login.show');
Route::post('/admin/login', [LoginController::class, 'loginAdminProses'])->name('login.proses');

Route::get('/h/admin', [HomeAdminController::class, 'index'])->name('indexAdmin.show');
Route::get('/h/admin/ubah-status-berkas', [HomeAdminController::class,'changeStatus'])->name('ubah-status-berkas');

Route::get('/h/admin/prediksi/{id_berkas_lanjutan}', [PrediksiController::class, 'prediksi'])->name('prediksi');
Route::get('/h/admin/prediksi_all', [PrediksiController::class, 'prediksiAll'])->name('prediksiAll');

Route::get('/h/admin/tambah/beasiswa', [BeasiswaController::class, 'tambahBeasiswa'])->name('tambahBeasiswa.show');
Route::post('/h/admin/tambah/beasiswa', [BeasiswaController::class, 'tambahBeasiswaProses'])->name('tambahBeasiswa.proses');

Route::get('/h/admin/list/beasiswa', [BeasiswaController::class, 'listBeasiswa'])->name('listBeasiswa.show');

Route::get('/h/admin/logout', [LogoutController::class, 'logoutAdmin'])->name('logoutAdmin');




Route::get('/test', [TestController::class, 'test'])->name('test');
