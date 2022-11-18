<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\BerkasLanjutan;
use DB;

class HomeAdminController extends Controller
{

    public function index(Request $request)
    {
        if(Session::get('role')=='admin'){
            $BeaKIPs = DB::select('select * from berkas_lanjutan bl join mahasiswa m on bl.id_mahasiswa=m.id_mahasiswa');
            return view('admin.home', ['BeaKIPs'=>$BeaKIPs]);
        }else{
            return redirect('/admin/login')->with('failed','Silahkan login terlebih dahulu!');
        }
    }

    public function changeStatus(Request $request){
        $berkas_lanjutans = BerkasLanjutan::find($request->id_berkas_lanjutan);
        if($request->role=='ayah'){
        $berkas_lanjutans->status_ayah = $request->status;
        }elseif($request->role=='ibu'){
        $berkas_lanjutans->status_ibu = $request->status;
        }elseif($request->role=='kip'){
            $berkas_lanjutans->status_kip = $request->status;
        }elseif($request->role=='tdk_mampu'){
            $berkas_lanjutans->status_tdk_mampu = $request->status;
        }elseif($request->role=='kks'){
            $berkas_lanjutans->status_kks = $request->status;
        }
        $berkas_lanjutans->save();
    }
}
