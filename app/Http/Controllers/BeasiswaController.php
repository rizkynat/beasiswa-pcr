<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;

class BeasiswaController extends Controller
{   
    public function listBeasiswa()
    {
        if(Session::get('role')=='admin'){
            DB::statement("SET lc_time_names = 'id_ID';");
            $beasiswas = DB::select("select nama_beasiswa, deskripsi, DATE_FORMAT(beasiswa.awal_daftar, '%e %M %Y') as awal_daftar, 
            DATE_FORMAT(beasiswa.akhir_daftar, '%e %M %Y') as akhir_daftar, DATE_FORMAT(beasiswa.pengumuman, '%e %M %Y') as pengumuman from beasiswa");
            return view('admin.list-beasiswa', ['beasiswas'=>$beasiswas]);
        }else{
            return redirect('/')->with('failed','Silahkan login terlebih dahulu!');
        }
    }

    public function tambahBeasiswa()
    {
        if(Session::get('role')=='admin'){
            return view('admin.tambah-beasiswa');
        }else{
            return redirect('/')->with('failed','Silahkan login terlebih dahulu!');
        }
    }

    
    public function tambahBeasiswaProses(Request $request)
    {
        if(Session::get('role')=='admin'){
            $validator = Validator::make($request->all(), [
                'nama_beasiswa' => 'required',
                'deskripsi' => 'required:unique',
                'awal_daftar' => 'required',
                'akhir_daftar' => 'required',
                'pengumuman' => 'required',
            ]);

            if(!$validator->fails()){
                $nama_beasiswa = $request->nama_beasiswa;
                $deskripsi = $request->deskripsi;
                $awal_daftar = $request->awal_daftar;
                $akhir_daftar = $request->akhir_daftar;
                $pengumuman = $request->pengumuman;
                
                DB::insert("insert into beasiswa (nama_beasiswa, deskripsi, awal_daftar, akhir_daftar, pengumuman) values(?,?,?,?,?)", [$nama_beasiswa, $deskripsi, $awal_daftar, $akhir_daftar, $pengumuman]);
                return redirect('/h/admin/tambah/beasiswa')->with('success', 'Data anda telah berhasil dikirim!');
            }else{
                return redirect('/h/admin/tambah/beasiswa')->with('failed', 'Isi data dengan baik dan benar!');
            }
        }else{
            return redirect('/')->with('failed','Silahkan login terlebih dahulu!');
        }
    }
}
