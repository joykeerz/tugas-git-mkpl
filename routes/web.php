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

Route::get('/takjil', 'TakjilController@tampil');
Route::post('/takjil/tambah', 'TakjilController@tambahData');

Route::get('/takjil/edit/{id}', 'TakjilController@editData');
Route::post('/takjil/update/{id}', 'TakjilController@updateData');
Route::get('/takjil/hapus/{id}', 'TakjilController@hapusData');


Route::get('/MakananPenutup', 'MakananPenutupController@tampil');
Route::post('/MakananPenutup/tambah', 'MakananPenutupController@tambahData');
Route::get('/MakananPenutup/edit/{id}', 'MakananPenutupController@editData');
Route::post('/MakananPenutup/update/{id}', 'MakananPenutupController@updateData');
Route::get('/MakananPenutup/hapus/{id}', 'MakananPenutupController@hapusData');
Route::post('/MakananPenutup/tambah/{id}', 'MakananPenutupController@tambah');
Route::post('/MakananPenutup/kurang/{id}', 'MakananPenutupController@kurang');

Route::post('/takjil/tambah/{id}', 'TakjilController@tambahJumlah');
Route::post('/takjil/kurang/{id}', 'TakjilController@kurangJumlah');


// Route::get('/MakananRingan', function () {
//     return view('MakananRingan.MakananRingan');
// });

Route::get('/MakananRingan', 'MakananRinganController@tampil');
Route::post('/MakananRingan/tambah', 'MakananRinganController@tambahData');
Route::get('/MakananRingan/edit/{id}', 'MakananRinganController@editData');
Route::post('/MakananRingan/update/{id}', 'MakananRinganController@updateData');
Route::get('/MakananRingan/hapus/{id}', 'MakananRinganController@hapusData');

Route::post('/MakananRingan/tambah/{id}', 'MakananRinganController@tambahJumlah');
Route::post('/MakananRingan/kurang/{id}', 'MakananRinganController@kurangJumlah');

Route::get('/minumandingin', 'MinumanDinginController@tampil');
Route::post('/minumandingin/tambah', 'MinumanDinginController@tambahData');

Route::get('/minumandingin/edit/{id}', 'MinumanDinginController@editData');
Route::post('/minumandingin/update/{id}', 'MinumanDinginController@updateData');
Route::get('/minumandingin/hapus/{id}', 'MinumanDinginController@hapusData');

route::post('/minumandingin/tambah/{id}', 'MinumanDinginController@tambahin');
route::post('/minumandingin/kurang/{id}', 'MinumanDinginController@kurangin');
