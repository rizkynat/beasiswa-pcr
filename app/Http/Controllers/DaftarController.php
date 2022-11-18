<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DaftarController extends Controller
{
    public function daftarProses(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_mhs' => 'required|min:4',
            'email' => 'required|min:4|email|unique:mahasiswa',
            'nim' => 'required|min:8',
            'password' => 'required',
            'repassword' => 'required|same:password'
        ]);
        if(!$validator->fails()){
            $validated_data = $request->all();
            $mahasiswa = new Mahasiswa();
            $mahasiswa->fill($validated_data);
            $mahasiswa->save();
            return redirect('/')->with('success','Akun anda berhasil ditambahkan!');
        }else{            
            return redirect('/')->with('failed','Pengisian akun kurang tepat!');
        }
            }
}
