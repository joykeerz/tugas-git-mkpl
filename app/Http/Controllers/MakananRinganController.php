<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakananRinganController extends Controller
{
    public function tampil()
    {
        $MakananRingan = DB::table('makanan_ringan')->select('*')->get();

        return view('MakananRingan.MakananRingan', ['MakananRingan' => $MakananRingan]);
    }

    public function tambahData(Request $request)
    {
        DB::table('makanan_ringan')->insert([
        'nama_makanan' => $request->namaMakananRingan,
        'harga_makanan' => $request->hargaMakananRingan,
        'jumlah_makanan' => $request->jumlahMakananRingan
        ]);
        return view('MakananRingan.MakananRingan');
    }

    public function editData($id)
    {
        $data = DB::table('makanan_ringan')->where('id',$id)->first();
        return view('MakananRingan.edit',['MakananRingan'=>$data]);
    }

    public function updateData(Request $request, $id)
    {
        DB::table('makanan_ringan')->where('id',$id)->update([
            'nama_makanan' => $request -> namaMakananRingan,
            'harga_makanan' => $request -> hargaMakananRingan,
            'jumlah_makanan' => $request -> jumlahMakananRingan,    
            ]);

        $data = DB::table('makanan_ringan') -> select ('*') -> get();
        return view('MakananRingan.MakananRingan', ['MakananRingan' => $data ]);
    }

    public function hapusData($id)
    {
        DB::table('makanan_ringan')->where('id',$id)->delete();
        $data=DB::table('makanan_ringan')->select('*')->get();
        return view('MakananRingan.MakananRingan', ['MakananRingan'=>$data]);
    }

    public function tambahJumlah($id)
    {
        DB::table('makanan_ringan')->where('id',$id)->increment('jumlah_makanan');
        return redirect()->back();
    }

    public function kurangJumlah($id)
    {
         DB::table('makanan_ringan')->where('id',$id)->decrement('jumlah_makanan');
        return redirect()->back();
    }

}
