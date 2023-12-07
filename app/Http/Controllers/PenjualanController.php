<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PenjualanController extends Controller
{
    function penjualan (){
        $produk = DB::table('produk')->get();
        return view ('/penjualan',['produk'=>$produk]);
    }

    function data_penjualan(){
        $penjualan = DB::table('pelanggan')
        ->join('penjualan', 'penjualan.PelangganID', '=', 'pelanggan.PelangganID')
        ->get();
        return view ('data-penjualan',['penjualan'=> $penjualan]);
    }

    function detail_penjualan($id){
        $detail = DB::table('produk')
        ->join('detailpenjualan', 'detailpenjualan.ProdukID', '=', 'produk.ProdukID')
        ->join('penjualan', 'detailpenjualan.PenjualanID', '=', 'penjualan.PenjualanID')
        ->join('pelanggan', 'penjualan.PenjualanID','=','pelanggan.PelangganID')
        ->get();
        return view('detail-penjualan',['detail'=> $detail]);
    }
}
