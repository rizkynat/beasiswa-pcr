<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;

class BeaKIPController extends Controller
{
    public function index()
    {
        if(Session::get('role')=='mahasiswa'){
            $mahasiswas = DB::select('select * from mahasiswa');
            $fakultass = DB::select('select id_fakultas, nama_fakultas from fakultas');
            $jurusans = DB::select('select * from jurusan order by nama_jurusan ASC');
            $ukts = DB::select('select * from jurusan order by nama_jurusan ASC');
            return view('mahasiswa.BeaKIP', ['mahasiswas'=>$mahasiswas,'fakultass'=>$fakultass, 'jurusans'=>$jurusans, 'ukts'=>$ukts]);
        }else{
            return redirect('/')->with('failed','Silahkan login terlebih dahulu!');
        }
    }

    
    public function tambah(Request $request)
    {
        if(Session::get('role')=='mahasiswa'){
            $validator = Validator::make($request->all(), [
                'nama_mhs' => 'required',
                'nim' => 'required:unique',
                'tgl_lahir' => 'required',
                'fakultas' => 'required',
                'jurusan'=>'required',
                'k_ukt'=>'required',
                'n_ukt'=>'required',
                'kip'=>'required',
                'status_tdk_mampu'=>'required',
                'nama_ayah'=>'required',
                'penghasilan_ayah'=>'required',
                'nama_ibu'=>'required',
                'penghasilan_ibu'=>'required',
                'total_anggota'=>'required',
                'status_ayah'=>'required',
                'status_ibu'=>'required',
                'kks'=>'required'
            ]);

            if(!$validator->fails()){
                $nama_mhs = $request->nama_mhs;
                $mahasiswa = DB::table('mahasiswa')->select('id_mahasiswa')->where('nama_mhs', $nama_mhs)->get();
                $id_mahasiswa = $mahasiswa[0]->id_mahasiswa;
                $tgl_lahir = $request->tgl_lahir;
                $tgl_lahir = implode('-', array_reverse(explode('/', $tgl_lahir)));
                $tgl_lahir = date("Y-m-d", strtotime($tgl_lahir));
                $fakultas = $request->fakultas;
                $jurusan = $request->jurusan;
                $k_ukt = $request->k_ukt;
                $n_ukt = $request->n_ukt;
                $nama_ayah = $request->nama_ayah;
                $penghasilan_ayah = $request->penghasilan_ayah;
                $nama_ibu = $request->nama_ibu;
                $penghasilan_ibu = $request->penghasilan_ibu;
                $total_anggota = $request->total_anggota;
                $total_penghasilan_perjumlahAnggota = (int)(($penghasilan_ayah+$penghasilan_ibu)/$total_anggota);
                
                $kip = $request->file('kip');
                $extension = pathinfo($kip->getClientOriginalName(), PATHINFO_EXTENSION);
                $filename_kip = $nama_mhs."_kip_".date('YmdHi').'.'.$extension;
                $kip -> move(public_path('/storage/berkas/'), $filename_kip);

                $surat_tdk_mampu = $request->file('status_tdk_mampu');
                $extension = pathinfo($surat_tdk_mampu->getClientOriginalName(), PATHINFO_EXTENSION);
                $filename_status_tdk_mampu = $nama_mhs."_status_tdk_mampu_".date('YmdHi').'.'.$extension;
                $surat_tdk_mampu -> move(public_path('/storage/berkas/'), $filename_status_tdk_mampu);

                $status_ayah = $request->file('status_ayah');
                $extension = pathinfo($status_ayah->getClientOriginalName(), PATHINFO_EXTENSION);
                $filename_status_ayah = $nama_mhs."_status_ayah_".date('YmdHi').'.'.$extension;
                $status_ayah -> move(public_path('/storage/berkas/'), $filename_status_ayah);

                $status_ibu = $request->file('status_ibu');
                $extension = pathinfo($status_ibu->getClientOriginalName(), PATHINFO_EXTENSION);
                $filename_status_ibu = $nama_mhs."_status_ibu_".date('YmdHi').'.'.$extension;
                $status_ibu -> move(public_path('/storage/berkas/'), $filename_status_ibu);

                $kks = $request->file('kks');
                $extension = pathinfo($kks->getClientOriginalName(), PATHINFO_EXTENSION);
                $filename_status_kks = $nama_mhs."_kks_".date('YmdHi').'.'.$extension;
                $kks -> move(public_path('/storage/berkas/'), $filename_status_kks);
                
                DB::update('update mahasiswa set tgl_lahir=?, fakultas=?, jurusan=?, status_beasiswa=?',[$tgl_lahir, $fakultas, $jurusan, '1']);
                DB::insert('insert into berkas_lanjutan (id_mahasiswa, ukt, nilai_ukt, nama_ayah, penghasilan_ayah, nama_ibu, penghasilan_ibu, total_penghasilan_perjumlahAnggota,
                jml_anggota, filename_status_ayah, filename_status_ibu, filename_status_kip, filename_status_tdk_mampu, filename_status_kks) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                [$id_mahasiswa, $k_ukt, $n_ukt, $nama_ayah, $penghasilan_ayah, $nama_ibu, $penghasilan_ibu, $total_penghasilan_perjumlahAnggota,
                $total_anggota, $filename_status_ayah, $filename_status_ibu, $filename_kip, $filename_status_tdk_mampu, $filename_status_kks]);
                
                return redirect('/')->with('success', 'Data anda telah berhasil dikirim!');
            }else{
                return redirect('/')->with('failed', 'Isi data dengan baik dan benar!');
            }
        }else{
            return redirect('/')->with('failed','Silahkan login terlebih dahulu!');
        }
    }
}
