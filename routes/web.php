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
