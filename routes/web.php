<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/MakananRingan', function () {
//     return view('MakananRingan.MakananRingan');
// });

Route::get('/MakananRingan', 'MakananRinganController@tampil');
Route::post('/MakananRingan/tambah','MakananRinganController@tambahData');
Route::get('/MakananRingan/edit/{id}','MakananRinganController@editData');
Route::post('/MakananRingan/update/{id}','MakananRinganController@updateData');
Route::get('/MakananRingan/hapus/{id}','MakananRinganController@hapusData');

Route::post('/MakananRingan/tambah/{id}','MakananRinganController@tambahJumlah');
Route::post('/MakananRingan/kurang/{id}','MakananRinganController@kurangJumlah');
