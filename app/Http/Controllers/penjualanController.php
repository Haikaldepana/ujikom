<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PenjualanController extends Controller
{
    function penjualan (){
        $produk = DB::table('produk')->get();

        $pelanggan = DB::table('pelanggan')->get();

        $penjualan = DB::table('penjualan')->latest()->first();

        $idpenjualan = "";

        if(!$penjualan){
            $idpenjualan = '1';
        }else{

            if($penjualan->status == "selesai"){
                $idpenjualan = $penjualan->PenjualanID + 1;
            }else{
                $idpenjualan = $penjualan->PenjualanID;
            }
        }

        $detailpenjualan=DB::table('produk')->where("PenjualanID", $idpenjualan)
        ->join("detailpenjualan","produk.ProdukID","=",'detailpenjualan.ProdukID')
        ->get();


        return view ('/penjualan',['produk'=>$produk,'pelanggan'=>$pelanggan ,'idpenjualan' => $idpenjualan, 'detailpenjualan'=>$detailpenjualan]);
    }

    function tambah(Request $request ){
        $produk = DB::table('produk')->where('ProdukID', $request->produk)->first();

        // return $produk;

        $dataPenjualan = DB::table('penjualan')->where('PenjualanID', $request->idpenjualan)->first();
        if(!$dataPenjualan){
            $penjualan = DB::table('penjualan')->insert([
                'PenjualanID' => $request->idpenjualan,
                'TanggalPenjualan'=> date("Y-m-d"),
                'TotalHarga' => 0,
                'pelangganID' => $request->pelanggan,
                'status'=>"pending"
            ]);
        }
       

        if($produk->Stok - $request->qty < 0){
            return redirect()->back()->with("info","Stok Tidak Cukup");
        }else{
            $detail= DB::table('detailpenjualan')->insert([
                'PenjualanID' => $request->idpenjualan,
                'ProdukID' => $request->produk,
                'JumlahProduk'=> $request->qty,
                'SubTotal'=> $request->qty * $produk->Harga,
            ]);
    
            DB::table('produk')->where('ProdukID', $request->produk)->update(['stok'=>$produk->Stok - $request->qty]);
            
            
            return redirect()->back();
        }
        
    }

    function cancel(request $request,$id){
        DB::table('detailpenjualan')->where('DetailID','=',$id)->delete();

        
        return redirect()->back();
    }



    function checkout(Request $request){
        $update=DB::table('penjualan')->where('PenjualanID',$request->idpenjualan)->update([
            'status'=>"selesai",
            'TotalHarga'=> $request->total,
        ]);
        return redirect()->back();
    }

    function data_penjualan(){
        $penjualan = DB::table('pelanggan')
        ->join('penjualan', 'penjualan.PelangganID', '=', 'pelanggan.PelangganID')
        ->get();
        // return $penjualan;
        return view ('data-penjualan',['penjualan'=> $penjualan]);
    }

    function detail(Request $request ,$id){
        $detail = DB::table('detailpenjualan')
        ->join('produk', 'produk.ProdukID', '=' ,'detailpenjualan.ProdukID')
        ->join('penjualan','penjualan.PenjualanID','=','detailpenjualan.PenjualanID')
        ->where('detailpenjualan.PenjualanID', $id)
        ->get();

        return view('detail-penjualan',['detail'=> $detail]);
    }


}