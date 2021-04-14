<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinumanHangatController extends Controller
{
    //
    public function tampil()
    {
        $minumanHangat = DB::table('minuman_hangat')->select('*')->get();
        return view('minumanHangat.minumanHangat',['minumanHangat'=>$minumanHangat]);
    }

    public function tambahData(Request $request)
    {
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
        $minumanHangat = DB::table('minuman_hangat')->where('id',$id)->first();
        return view('minumanHangat.editMinumanHangat',['minumanHangat'=>$minumanHangat]);

    }

    public function updateData(Request $request, $id)
    {
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
        DB::table('minuman_hangat')->where('id',$id)->delete();

        $minumanHangat = DB::table('minuman_hangat')->select('*')->get();
        return view('minumanHangat.minumanHangat',['minumanHangat'=>$minumanHangat]);
    }
}
