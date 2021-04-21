<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinumanHangatController extends Controller
{
    //
    public function tampil()
    {
        //mengeluarkan tampilan minuman hangat
        $minumanHangat = DB::table('minuman_hangat')->select('*')->get();
        return view('minumanHangat.minumanHangat',['minumanHangat'=>$minumanHangat]);
    }

    public function tambahData(Request $request)
    {
        //untuk menambah data minuman hangat yang baru
        DB::table('minuman_hangat')->insert([
            'nama_minuman'=>$request->namaMinumanHangat,
            'harga_minuman'=>$request->hargaMinumanHangat,
            'jumlah_minuman'=>$request->jumlahMinumanHangat
            ]);
            $minumanHangat = DB::table('minuman_hangat')->select('*')->get();
            return view('minumanHangat.minumanHangat',['minumanHangat'=>$minumanHangat]);
    }

    public function editData($id)
    {
        //untuk mengedit data dalam suatu minuman hangat
        $minumanHangat = DB::table('minuman_hangat')->where('id',$id)->first();
        return view('minumanHangat.editMinumanHangat',['minumanHangat'=>$minumanHangat]);

    }

    public function updateData(Request $request, $id)
    {
        //untuk mengupdate data dalam suatu minuman hangat
        DB::table('minuman_hangat')->where('id',$id)->update([
            'nama_minuman'=>$request->namaMinumanHangat,
            'harga_minuman'=>$request->hargaMinumanHangat,
            'jumlah_minuman'=>$request->jumlahMinumanHangat
        ]);

        $minumanHangat = DB::table('minuman_hangat')->select('*')->get();
        return view('minumanHangat.minumanHangat',['minumanHangat'=>$minumanHangat]);

    }

    public function deleteData(Request $request, $id)
    {
        //untuk menghapus minuman hangat
        DB::table('minuman_hangat')->where('id',$id)->delete();

        $minumanHangat = DB::table('minuman_hangat')->select('*')->get();
        return view('minumanHangat.minumanHangat',['minumanHangat'=>$minumanHangat]);
    }

    public function tambahJumlah($id)
    {
        //untuk melakakuan penambahan data pada jumlah minuman hangat
        DB::table('minuman_hangat')->where('id',$id)->increment('jumlah_minuman');
        return redirect()->back();

    }

    public function kurangJumlah($id)
    {
        //untuk melakakuan pengurangan data pada jumlah minuman hangat
        DB::table('minuman_hangat')->where('id',$id)->decrement('jumlah_minuman');
        return redirect()->back();

    }
}
