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
 
// Halaman Utama
Route::get('/', function () {
    return view('home.main');
});

Auth::routes();

// Login
Route::group(['middleware'=>'auth'], function(){
    //belum jalan login
});
Route::get('login', 'UserController@index')->name('login'); //login page

//Artikel
Route::get('admin', 'KontenController@index')->name('admin'); // read 3 tabel sudah jalan
Route::get('buat-artikel', 'KontenController@create'); // belum jalan
Route::post('/konten', 'KontenController@store');
Route::delete('konten/{id}', 'KontenController@destroy'); //belum jalan
Route::get('konten/{id}/edit', 'KontenController@edit'); //belum ada
Route::patch('konten/{id}', 'KontenController@update');

//Akomodasi Luar
Route::get('akomodasi-luar', 'AkomodasiLuarController@create'); //belum jalan
Route::post('/akomodasi-luar', 'AkomodasiLuarController@store');
Route::delete('akomodasi-luar/{id}', 'AkomodasiLuarController@destroy');//belum jalan
Route::get('akomodasi-luar/{id}/edit', 'AkomodasiLuarController@edit');//belum ada
Route::patch('akomodasi-luar/{id}', 'AkomodasiLuarController@update');

//Akomodasi Dalam
Route::get('akomodasi-dalam', 'AkomodasiDalamController@create');//belum jalan
Route::post('/akomodasi-dalam', 'AkomodasiDalamController@store');
Route::delete('akomodasi-dalam/{id}', 'AkomodasiDalamController@destroy');//belum jalan
Route::get('akomodasi-dalam/{id}/edit', 'AkomodasiDalamController@edit');//belum ada
Route::patch('akomodasi-dalam/{id}', 'AkomodasiDalamController@update');

//Galeri
Route::get('tambah-galeri', 'GaleriController@create');// Crud belum ada

//Kategori
Route::get('buat-kategori','KategoriController@index');// Crud belum ada

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

// Nav Pemanfaatan
Route::get('pemanfaatan', function () {
    return view('navbar.pemanfaatan');
});

// Nav Kontak

Route::get('kontak', function () {
    return view('navbar.kontak');
});

// Items
Route::get('peta', function () {
    return view('items.peta');
});
Route::get('akomodasi', function () { //read akomodasi belum dibuat
    return view('items.akomodasi');
});
Route::get('biaya', function () {
    return view('items.biaya');
});
Route::get('galeri', function () { //read galeri per jenis belum dibuat
    return view('items.galeri');
});

// Blog Single

Route::get('single', function () { //blog single belum dibuat
    return view('blog.single');
});

// Berita Terbaru
Route::get('terkini', function () { //pagination dan searching artikel belum dibuat 
    return view('blog.home');
});
