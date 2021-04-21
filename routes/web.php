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
Route::get('minumanHangat','MinumanHangatController@tampil');
Route::post('minumanHangat/tambah','MinumanHangatController@tambahData');

Route::get('minumanHangat/edit/{id}','MinumanHangatController@editData');
Route::post('minumanHangat/update/{id}','MinumanHangatController@updateData');
Route::get('minumanHangat/delete/{id}','MinumanHangatController@deleteData');

Route::post('minumanHangat/tambah/{id}','MinumanHangatController@tambahJumlah');
Route::post('minumanHangat/kurang/{id}','MinumanHangatController@kurangJumlah');
