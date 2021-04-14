<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinumanDinginController extends Controller
{
    //
    public function tampil()
    {
        //ambil data dari database
        $minumanDingin = DB::table('minuman_dingin')->select('*')->get();


        //ke halaman minuman dingin
        return view('minuman_dingin.minumanDingin', ['minuman_dingin' => $minumanDingin]);
    }
    public function tambahData(Request $request)
    { //nambahin data
        DB::table('minuman_dingin')->insert([
            'nama_minuman' => $request->namaMinumanDingin,
            'harga_minuman' => $request->harga,
            'jumlah_minuman' => $request->jumlah
        ]);
        //balik ke halaman minuman dingin
        return view('minuman_dingin.minumanDingin');
    }
    public function editData($id)
    {
        //ambil database
        $data = DB::table('minuman_dingin')->where('id', $id)->first();

        //menuju halaman minuman_dingin
        return view('minuman_dingin.edit', ['minuman_dingin' => $data]);
    }
    public function updateData(Request $request, $id)
    {
        DB::table('minuman_dingin')->where('id', $id)->update([
            'nama_minuman' => $request->namaMinumanDingin,
            'harga_minuman' => $request->harga,
            'jumlah_minuman' => $request->jumlah
        ]);

        $data = DB::table('minuman_dingin')->select('*')->get();

        return view('minuman_dingin.minumanDingin', ['minuman_dingin' => $data]);
    }
    public function hapusData($id)
    {
        DB::table('minuman_dingin')->where('id', $id)->delete();

        $data = DB::table('minuman_dingin')->select('*')->get();

        return view('minuman_dingin.minumanDingin', ['minuman_dingin' => $data]);
    }
}
