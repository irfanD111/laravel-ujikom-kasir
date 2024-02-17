<?php

namespace App\Http\Controllers;

use App\models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class produkController extends Controller
{
    function data_p(){
        $produk = DB::table('produk')->where('status','tampil')->get();
        return view('/data-produk',['produk'=>$produk]);    
    }

    function stok(){
        $produk = DB::table('produk')->get();
        return view('/stok',['produk'=>$produk]);    
    }

    function hapus($id){
        $produk = produk::find($id);
        $produk->delete($id);
        $produk = DB::table('produk')->where('id','=',$id)->update([
            'status' => "dihapus",
        ]);
       
        return redirect()->back();
    }

    function trash(Request $request){
       $produk = DB::table('produk')->where('status','dihapus')->get();


       return view('/trash-produk',['produk'=>$produk]);
    }

    function restore(request $request ,$id){
        $produk = produk::withTrashed()->find($id)->restore();
        DB::table('produk')->where('id','=',$id)->update([
            'status' => "tampil",
            'deleted_at' => NULL,
        ]);
        return redirect()->back();
    }

    function update($id){
      
        $produk = DB::table('produk')->where('id','=', $id )->first();
        return view('/update-produk',['produk'=> $produk]);
    }

    function proses_update( request $request){
        $produk = DB::table('produk')->where('NamaProduk', $request->np)->first();

        $harga = $request->harga;
        $nama_produk = $request->np;
    
        $pengaduan = DB::table('produk')->where('id',$request->id)->update([
            'NamaProduk' => $nama_produk,   
            'Harga' => $harga,
            'Stok' => $produk->Stok + $request->stok

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
            'Stok' => $stok,
            'status' => 'tampil'
        ]);

        return redirect('/data-produk');
    }
}
