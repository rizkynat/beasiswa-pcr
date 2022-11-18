<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BerkasLanjutan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use DB;
use Response;

class TestController extends Controller
{
    public function test(Request $request){
        $id_berkas_lanjutan = 5;
        $berkas_lanjutans = DB::select("select id_berkas_lanjutan, ukt, nilai_ukt, penghasilan_ayah, penghasilan_ibu, (penghasilan_ayah+penghasilan_ibu) as total_penghasilan, total_penghasilan_perjumlahAnggota, jml_anggota, status_ayah,
        status_ibu, status_kip, status_tdk_mampu, status_kks from berkas_lanjutan order by id_berkas_lanjutan asc");


        
        //return json_encode($berkas_lanjutans);
        $nama_mhs = Session::get('nama_mhs');
        $mahasiswas = DB::select("select m.nama_mhs, bl.hasil from mahasiswa m join berkas_lanjutan bl on m.id_mahasiswa=bl.id_mahasiswa where m.id_mahasiswa='".$nama_mhs."'");
        return ['mahasiswas'=>$mahasiswas];
    }
}
