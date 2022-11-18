<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\BerkasLanjutan;
use Illuminate\Support\Facades\Http;
use DB;
use Response;

class PrediksiController extends Controller
{
    public function prediksi(Request $request, $id_berkas_lanjutan)
    {
        $berkas_lanjutans = DB::select("select ukt, nilai_ukt, penghasilan_ayah, penghasilan_ibu, (penghasilan_ayah+penghasilan_ibu) as total_penghasilan, total_penghasilan_perjumlahAnggota, jml_anggota, status_ayah,
        status_ibu, status_kip, status_tdk_mampu, status_kks from berkas_lanjutan where id_berkas_lanjutan='".$id_berkas_lanjutan."'");

        $response = Http::withBody(json_encode($berkas_lanjutans[0]), 'application/json')->post('http://127.0.0.1:5000/api');
        $responseJson = $response->json();
        DB::update("update berkas_lanjutan set hasil='".$responseJson."' where id_berkas_lanjutan=".$id_berkas_lanjutan);
        return redirect('/h/admin');
    }

    public function prediksiAll(Request $request)
    {
        $berkas_lanjutans = DB::select("select id_berkas_lanjutan, ukt, nilai_ukt, penghasilan_ayah, penghasilan_ibu, (penghasilan_ayah+penghasilan_ibu) as total_penghasilan, total_penghasilan_perjumlahAnggota, jml_anggota, status_ayah,
        status_ibu, status_kip, status_tdk_mampu, status_kks from berkas_lanjutan order by id_berkas_lanjutan asc");

        $response = Http::withBody(json_encode($berkas_lanjutans), 'application/json')->post('http://127.0.0.1:5000/api/all');
        $responseJson = $response->json();
        $x = 0;
        foreach($responseJson as $i){
            DB::update("update berkas_lanjutan set hasil='".$i."' where id_berkas_lanjutan=".$berkas_lanjutans[$x]->id_berkas_lanjutan);
            $x++;
        }
        return redirect('/h/admin');
    }
}