<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class makananBeratController extends Controller
{
    public function tampil()
    {
        $dataMakanan = DB::table('makanan_berat')->select('*')->get();
        return view('makananBerat.makananBerat',['data'=> $dataMakanan]);
    }

    public function inputData(Request $request)
    {
        DB::table('makanan_berat')->insert([
            'nama_makanan'=> $request->namaMakanan,
            'harga_makanan'=> $request->hargaMakanan,
            'jumlah_makanan'=> $request->jumlahMakanan
            ]);
        $dataMakanan = DB::table('makanan_berat')->select('*')->get();
        return view('makananBerat.makananBerat',['data'=> $dataMakanan]);
    }

    public function perbaruiData(Request $request, $id)
    {
        $perbarui = DB::table('makanan_berat')->where('id',$id)->update([
            'nama_makanan'=>$request->namaMakanan,
            'harga_makanan'=>$request->hargaMakanan,
            'jumlah_makanan'=>$request->jumlahMakanan,
        ]);

        $dataMakanan = DB::table('makanan_berat')->select('*')->get();
        return view('makananBerat.makananBerat',['data' => $dataMakanan ]);
    }

    public function ubahData($id)
    {
        $dataMakanan = DB::table('makanan_berat')->where('id',$id)->select('*')->first();
        return view('makananBerat.ubah',['data'=> $dataMakanan]);
    }

    public function buangData($id)
    {
        DB::table('makanan_berat')->where('id',$id)->delete();
        $dataMakanan = DB::table('makanan_berat')->select('*')->get();
        return view('makananBerat.makananBerat',['data'=> $dataMakanan]);
    }

    public function tambahJumlah($id)
    {
        DB::table('makanan_berat')->where('id', $id)->increment('jumlah_makanan');
        return redirect()->back();
    }

    public function kurangJumlah($id)
    {
        DB::table('makanan_berat')->where('id', $id)->decrement('jumlah_makanan');
        return redirect()->back();
    }

}
