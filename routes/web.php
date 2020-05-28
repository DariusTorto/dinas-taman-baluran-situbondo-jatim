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

// Statis

// Halaman Utama
Route::get('/', function () {
    return view('home.main');
});

// Berita Terbaru
Route::get('terkini', function () {
    return view('blog.home');
});

// Nav Profil
Route::get('kawasan', function () {
    return view('profil.kawasan');
});
Route::get('kelembagaan', function () {
    return view('profil.kelembagaan');
});
Route::get('sejarah', function () {
    return view('profil.sejarah');
});
Route::get('visi-dan-misi', function () {
    return view('profil.visi_misi');
});

// Dinamis

Route::get('admin', 'KontenController@index');
Route::get('buat-artikel', 'KontenController@create');

Route::get('buat-kategori','KategoriController@index');
