<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PenjualanController extends Controller
{
    function penjualan (){
        $produk = DB::table('produk')->get();
        return view ('/penjualan',['produk'=>$produk]);
    }
}