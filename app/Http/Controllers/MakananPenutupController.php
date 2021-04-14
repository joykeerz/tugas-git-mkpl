<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakananPenutupController extends Controller
{
    
    public function tampil()
    {
        
        $data = DB::table('makanan_penutup')->select('*')->get();

        return view('makananPenutup.makananPenutup', ['makananPenutup' => $data]);
    }

    public function tambahData(Request $request)
    {
        
        DB::table('makanan_penutup')->insert([
            'nama_makanan' => $request->namamakanan,
            'harga_makanan' =>  $request->hargamakanan,
            'jumlah_makanan' => $request->jumlahmakanan
        ]);

        
        $data = DB::table('makanan_penutup')->select('*')->get();

        
        return view('makananPenutup.makananPenutup', ['makananPenutup' => $data]);
    }
    public function editData($id)
    {
        
        $data = DB::table('makanan_penutup')->where('id', $id)->first();

        
        return view('makananPenutup.edit', ['makananPenutup' => $data]);
    }

    public function updateData(Request $request, $id)
    {
       
        DB::table('makanan_penutup')->where('id', $id)->update([
            'nama_makanan' => $request->namaMakanan,
            'harga_makanan' =>  $request->hargaMakanan,
            'jumlah_makanan' => $request->jumlahMakanan
        ]);

       
        $data = DB::table('makanan_penutup')->select('*')->get();

        
        return view('makananPenutup.makananPenutup', ['makananPenutup' => $data]);
    }

    public function hapusData($id)
    {
        
        DB::table('makanan_penutup')->where('id', $id)->delete();

        
        $data = DB::table('makanan_penutup')->select('*')->get();
        
        return view('makananPenutup.makananPenutup', ['makananPenutup' => $data]);
    }
}


