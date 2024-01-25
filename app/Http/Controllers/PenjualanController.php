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
       

        $detail= DB::table('detailpenjualan')->insert([
            'PenjualanID' => $request->idpenjualan,
            'ProdukID' => $request->produk,
            'JumlahProduk'=> $request->qty,
            'SubTotal'=> $request->qty * $produk->Harga,
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


}
