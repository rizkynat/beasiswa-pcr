<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

            public function loginMahasiswaProses(Request $request){
                $email = $request->email;
                $password = Hash::make($request->password);
        
                $data = Mahasiswa::where(['email'=>$email])->first();
        
                if($data){
                    Session::put('email', $data['email']);
                    Session::put('nama_mhs', $data['nama_mhs']);
                    Session::put('nim', $data['nim']);
                    Session::put('role', 'mahasiswa');
                    return redirect('/h/mahasiswa');
                }else{
                    Session::flash('failed', 'Email dan Password anda salah');
                    return redirect('/');
                }
                    }
                
                public function loginAdminShow(Request $request){
                    return view('admin.login');
                }

                public function loginAdminProses(Request $request){
                    $email_admin = $request->email_admin;
                    $password_admin = Hash::make($request->password_admin);
            
                    $data = Admin::where(['email_admin'=>$email_admin])->first();
            
                    if($data){
                        Session::put('email_admin', $data['email_admin']);
                        Session::put('nama_admin', $data['nama_admin']);
                        Session::put('role', 'admin');
                        return redirect('/h/admin');
                    }else{
                        Session::flash('failed', 'Email dan Password anda salah');
                        return redirect('/h/admin');
                    }
                        }

            
}
