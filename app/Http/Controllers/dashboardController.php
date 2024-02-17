<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    function home (){
        
        $count = DB::table('produk')->count();

        $data = DB::table('detailpenjualan')->sum('JumlahProduk');

        return view ('/home',['count'=>$count,'jumlah'=>$data]);

    }
}
