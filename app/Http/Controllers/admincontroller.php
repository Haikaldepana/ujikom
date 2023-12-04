<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class admincontroller extends Controller
{
    function tampilan_admin(){
        return view("home-admin");
    }



    function tbuat(){
        return view("tambah_admin");
    }
    function buat_akun(request $request){
        $nama = $request->username;
        $user = $request->fn;
        $pass = $request->password;

        $masyarakat = DB::table('admin')->insert([
            
            'username' => $nama,
            'password' => Hash::make($pass),//hash
            'nama_lengkap' => $user,
        ]);
        return redirect('/tampilan/admin');
    }


    function index(){
        return view("login-admin");
    }

    function proses_login(request $request){
        $datalogin = $request->only("username","password");
        if (Auth::guard("admin")->attempt($datalogin)) {
            return redirect('/tampilan/admin');
        }else{
            return redirect('/login/admin')->with("salah","username atau password salah");
        }

    }

    function logout(){
        Auth::guard('admin')->logout();

        return redirect('/login/admin');
    }
}