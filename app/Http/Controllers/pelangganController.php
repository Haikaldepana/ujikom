<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class pelangganController extends Controller
{
    function data_P(){
        $pelanggan = DB::table('pelanggan')->where('status','!=', 'dihapus')->get();
        return view('/data-pelanggan',['pelanggan'=>$pelanggan]);    
    }

    function hapus($id){
        DB::table('pelanggan')->where('pelangganID','=', $id)->update(['status'=> 'dihapus']);
        return redirect()->back();
    }

    function update($id){
      
        $pelanggan = DB::table('pelanggan')->where('pelangganID','=', $id )->first();
        return view('/update-pelanggan',['pelanggan'=> $pelanggan]);
    }

    function proses_update( request $request){
        $nama = $request->nama;
        $alamat = $request->alamat;
        $no_telp = $request->nt;
        $produk = DB::table('pelanggan')->where('pelangganID',$request->id)->update([
            'NamaPelanggan' => $nama,
            'Alamat' => $alamat,
            'NomorTelpon' => $no_telp

        ]);
        return redirect('/data-pelanggan');
    }

    function tambah_pelanggan(){
        return view('tambah-pelanggan');
    }


    function proses_tambah_pelanggan(Request $request){

        $nama = $request->nama;
        $alamat = $request->alamat;
        $no_telp = $request->nt;

        $pengaduan = DB::table('pelanggan')->insert([
            'NamaPelanggan' => $nama,
            'Alamat' => $alamat,
            'NomorTelpon' => $no_telp
        ]);

        return redirect('/data-pelanggan');
    }
}