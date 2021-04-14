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

Route::get('/maber','makananBeratController@tampil');
Route::post('/maber/input','makananBeratController@inputData');

Route::get('/maber/ubah/{id}','makananBeratController@ubahData');
Route::post('/maber/perbarui/{id}','makananBeratController@perbaruiData');
Route::get('/maber/buang/{id}','makananBeratController@buangData');
