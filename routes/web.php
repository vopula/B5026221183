<?php

use App\Http\Controllers\DosenController;
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
    return view('ETS/welcome');
});

Route::get('welcome', function() {
    return view('ETS/welcome');
});

Route::get('halo', function () {
    return view('blog');
});

Route::get('linktree', function(){
    return view('5026221183_linktree');
});

Route::get('layout', function(){
    return view('5026221183_latihanLayout');
});

Route::get('bootstrap', function(){
    return view('bootstrap');
});

Route::get('bootstrap4icon', function(){
    return view('bootstrap4icon');
});

Route::get('form', function(){
    return view('formValidation');
});

Route::get('intro', function(){
    return view('intro');
});

Route::get('js1', function(){
    return view('js1');
});

Route::get('js2', function(){
    return view('js2');
});

Route::get('link', function(){
    return view('link');
});

Route::get('style', function(){
    return view('style');
});

Route::get('week2', function(){
    return view('week2');
});

Route::get('ets', function(){
    return view('ETS/5026221183_index');
});

Route::get('contactUs', function(){
    return view('ETS/contactUs');
});

Route::get('penghargaan', function(){
    return view('ETS/penghargaan');
});

Route::get('program', function(){
    return view('ETS/program');
});

Route::get('special', function(){
    return view('ETS/special');
});

Route::get('visiMisi', function(){
    return view('ETS/visiMisi');
});

Route::get('bio', function() {
    return view('biodata');
});

// Untuk terhubung dengan controller
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('bio', 'App\Http\Controllers\DosenController@biodata');


Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('form', 'App\Http\Controllers\DosenController@formulir');
Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//Minggu 13: pembuatan request pada data, passing (biodata - new, formulir, dosencontroller), buat database bernama pegawai, memasukkan data ke database, menghubungkan database dengan php dengan env, baca level 9-12


//Minggu 14: Controller, Routes dari web.php, dan tampilan
