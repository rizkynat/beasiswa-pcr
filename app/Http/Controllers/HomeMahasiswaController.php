<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class HomeMahasiswaController extends Controller
{
    public function index()
    {
        if(Session::get('role')=='mahasiswa'){            
            DB::statement("SET lc_time_names = 'id_ID';");
            $mahasiswas = DB::select("select * from mahasiswa");
            $beasiswas = DB::select("select deskripsi, DATE_FORMAT(beasiswa.awal_daftar, '%e %M') as awal_daftar, DATE_FORMAT(beasiswa.akhir_daftar, '%e %M %Y') as akhir_daftar,
            DATE_FORMAT(beasiswa.pengumuman, '%e %M %Y') as pengumuman, DATE_FORMAT(beasiswa.akhir_daftar, '%e') as jml_hari, id_beasiswa, nama_beasiswa, DATE_FORMAT(beasiswa.created_at, '%e %M %Y, %H:%i') as created_at from beasiswa");
            return view('mahasiswa.home', ['mahasiswas'=>$mahasiswas, 'beasiswas'=>$beasiswas]);
        }else{
            return redirect('/')->with('failed','Silahkan login terlebih dahulu!');
        }
    }

    public function hasil(Request $request)
    {
        if(Session::get('role')=='mahasiswa'){
            $nama_mhs = $request->session()->get('nama_mhs');
            $mahasiswas = DB::select("select m.nama_mhs, bl.hasil from mahasiswa m join berkas_lanjutan bl on m.id_mahasiswa=bl.id_mahasiswa");
            $jumlah = DB::select("select count(*)as jumlah from mahasiswa m join berkas_lanjutan bl on m.id_mahasiswa=bl.id_mahasiswa");
            return view('mahasiswa.hasil', ['mahasiswas'=>$mahasiswas, 'jumlah'=>$jumlah]);
        }else{
            return redirect('/')->with('failed','Silahkan login terlebih dahulu!');
        }
    }
}
