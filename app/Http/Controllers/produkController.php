<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class produkController extends Controller
{
    function data_p(){
        $produk = DB::table('produk')->get();
        return view('/data-produk',['produk'=>$produk]);    
    }

    function hapus($id){
        DB::table('produk')->where('ProdukID','=',$id)->delete();
        return redirect()->back();
    }

    function update($id){
      
        $produk = DB::table('produk')->where('ProdukID','=', $id )->first();
        return view('/update-produk',['produk'=> $produk]);
    }

    function proses_update( request $request){
        $harga = $request->harga;
        $nama_produk = $request->np;
        $stok = $request->stok;
        $pengaduan = DB::table('produk')->where('ProdukID',$request->id)->update([
            'NamaProduk' => $nama_produk,
            'Harga' => $harga,
            'Stok' => $stok

        ]);
        return redirect('/data-produk');
    }

    function tambah_produk(){
        return view('tambah-produk');
    }


    function proses_tambah_produk(Request $request){

        $harga = $request->harga;
        $nama_produk = $request->np;
        $stok = $request->stok;

        $pengaduan = DB::table('produk')->insert([
            'NamaProduk' => $nama_produk,
            'Harga' => $harga,
            'Stok' => $stok
        ]);

        return redirect('/data-produk');
    }
}