<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TakjilController extends Controller
{
    public function tampil()
    {
        ///ambil data dari database
        $data = DB::table('takjil')->select('*')->get();

        //pergi ke halaman takjil dengan data
        return view('takjil.takjil', ['takjil' => $data]);
    }

    public function tambahData(Request $request)
    {
        //tambahin data
        DB::table('takjil')->insert([
            'nama_takjil' => $request->namaTakjil,
            'harga_takjil' =>  $request->hargaTakjil,
            'jumlah_takjil' => $request->jumlahTakjil
        ]);

        ///ambil data dari database
        $data = DB::table('takjil')->select('*')->get();

        //pergi ke halaman takjil dengan data
        return view('takjil.takjil', ['takjil' => $data]);
    }

    public function editData($id)
    {
        ///ambil data dari database
        $data = DB::table('takjil')->where('id', $id)->first();

        //pergi ke halaman takjil dengan data
        return view('takjil.edit', ['takjil' => $data]);
    }

    public function updateData(Request $request, $id)
    {
        //cari data berdasarkan id = $id terus di update
        DB::table('takjil')->where('id', $id)->update([
            'nama_takjil' => $request->namaTakjil,
            'harga_takjil' =>  $request->hargaTakjil,
            'jumlah_takjil' => $request->jumlahTakjil
        ]);

        ///ambil data dari database
        $data = DB::table('takjil')->select('*')->get();

        //pergi ke halaman takjil dengan data
        return view('takjil.takjil', ['takjil' => $data]);
    }

    public function hapusData($id)
    {
        //cari takjil dengan id = $id terus hapus
        DB::table('takjil')->where('id', $id)->delete();

        ///ambil data dari database
        $data = DB::table('takjil')->select('*')->get();
        //abis nambahin data pergi ke halaman takjil
        return view('takjil.takjil', ['takjil' => $data]);
    }

    public function tambahJumlah($id)
    {
        DB::table('takjil')->where('id', $id)->increment('jumlah_takjil');
        return redirect()->back();
    }

    public function kurangJumlah($id)
    {
        DB::table('takjil')->where('id', $id)->decrement('jumlah_takjil');
        return redirect()->back();
    }
}
