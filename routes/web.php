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

Auth::routes();

Route::get('/home ', 'HomeController@index')->name('home');
Route::get('siswa','siswaController@siswa')->name('siswa');
Route::get('siswa', 'siswaController@index');
Route::get('siswa/tambah','siswaController@tambah');
Route::post('siswa/simpan','siswaController@simpan')->name('siswa/simpan');


