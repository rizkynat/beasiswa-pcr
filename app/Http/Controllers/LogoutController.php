<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    function logoutMahasiswa(){
        if(Session::get('role')=='mahasiswa'){
        Session::flush();
        return redirect('/')->with('failed','Anda telah logout');
        }else{
            return redirect('/');
        }
    }

    function logoutAdmin(){
        if(Session::get('role')=='admin'){
        Session::flush();
        return redirect('/admin/login')->with('failed','Anda telah logout');
        }else{
            return redirect('/');
        }
    }
}
