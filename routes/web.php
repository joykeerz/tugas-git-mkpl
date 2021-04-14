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

Route::get('/minumandingin', 'MinumanDinginController@tampil');
Route::post('/minumandingin/tambah', 'MinumanDinginController@tambahData');

Route::get('/minumandingin/edit/{id}', 'MinumanDinginController@editData');
Route::post('/minumandingin/update/{id}', 'MinumanDinginController@updateData');
Route::get('/minumandingin/hapus/{id}', 'MinumanDinginController@hapusData');
