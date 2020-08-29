<?php

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
    return view('/auth/login');
});

Auth::routes();

Route::get('/logout', 'HomeController@logout');

Route::resource('/post', 'PostController');
Route::get('/post/hapus/{id}', 'PostController@hapus');

Route::resource('/profil', 'ProfilController');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/template', function () {
    return view('layouts.pal5');
});

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/bantuan', 'BantuanController@index')->name('bantuan.index');
Route::post('/bantuan/store', 'BantuanController@store')->name('bantuan.store');
Route::get('/bantuan/edit/{id}', 'BantuanController@edit')->name('bantuan.edit');
Route::post('/bantuan/update/{id}', 'BantuanController@update')->name('bantuan.update');
Route::get('/bantuan/hapus/{id}', 'BantuanController@hapus');

Route::get('/form_bantuan', function () {
    return view('admin/bantuan.form');
});

Route::get('/kepala_keluarga', 'Kepala_KeluargaController@index')->name('kepala_keluarga.index');
Route::post('/kepala_keluarga/store', 'Kepala_KeluargaController@store')->name('kepala_keluarga.store');
Route::get('/kepala_keluarga/edit_keluarga/{id}', 'Kepala_KeluargaController@edit')->name('kepala_keluarga.edit_keluarga');
Route::post('/kepala_keluarga/update/{id}', 'Kepala_KeluargaController@update')->name('kepala_keluarga.update');
Route::get('/kepala_keluarga/hapus/{id}', 'Kepala_KeluargaController@hapus');

Route::get('/form_keluarga', function () {
    return view('admin/kepala_keluarga.form_keluarga');
});

Route::get('/ibadah', 'IbadahController@index')->name('ibadah.index');
Route::post('/ibadah/store', 'IbadahController@store')->name('ibadah.store');
Route::get('/ibadah/hapus/{id}', 'IbadahController@hapus');

Route::get('/form_ibadah', function () {
    return view('admin/ibadah.form_ibadah');
});

Route::get('/posyandu', 'PosyanduController@index')->name('posyandu.index');
Route::post('/posyandu/store', 'PosyanduController@store')->name('posyandu.store');
Route::get('/posyandu/hapus/{id}', 'PosyanduController@hapus');

Route::get('/form_posyandu', function () {
    return view('admin/posyandu.form_posyandu');
});

Route::get('/sekolah', 'SekolahController@index')->name('sekolah.index');
Route::get('/sekolah_smp', 'Sekolah_SMPController@index')->name('sekolah_smp.index');
Route::get('/sekolah_sma', 'Sekolah_SMAController@index')->name('sekolah_sma.index');
Route::post('/sekolah/store', 'SekolahController@store')->name('sekolah.store');
Route::get('/sekolah/edit_sekolah/{id}', 'SekolahController@edit')->name('sekolah.edit_sekolah');
Route::post('/sekolah/update/{id}', 'SekolahController@update')->name('sekolah.update');
Route::get('/sekolah/hapus/{id}', 'SekolahController@hapus');

Route::get('/form_sekolah', function () {
    return view('admin/sekolah.form_sekolah');
});

Route::get('/pengurus', 'PengurusController@index')->name('pengurus.index');
Route::get('/pengurus_rw', 'Pengurus_RWController@index')->name('pengurus_rw.index');
Route::post('/pengurus/store', 'PengurusController@store')->name('pengurus.store');
Route::post('/pengurus/import', 'PengurusController@import')->name('pengurus.import');
Route::get('/pengurus/edit/{id}', 'PengurusController@edit')->name('pengurus.edit_pengurus');
Route::post('/pengurus/update/{id}', 'PengurusController@update')->name('pengurus.update');
Route::get('/pengurus/hapus/{id}', 'PengurusController@hapus');

Route::get('/form_pengurus', function () {
    return view('admin/pengurus.form_pengurus');
});

Route::get('/form_import', function () {
    return view('admin/pengurus.form_import');
});

Route::get('/manajemen_pengguna', 'ManajemenPenggunaController@index')->name('manajemen_pengguna.index');
Route::post('/manajemen_pengguna/store', 'ManajemenPenggunaController@store')->name('manajemen_pengguna.store');
Route::get('/manajemen_pengguna/edit/{id}', 'ManajemenPenggunaController@edit')->name('manajemen_pengguna.edit');
Route::post('/manajemen_pengguna/update/{id}', 'ManajemenPenggunaController@update')->name('manajemen_pengguna.update');
Route::get('/manajemen_pengguna/hapus/{id}', 'ManajemenPenggunaController@hapus');

Route::get('/form', function () {
    return view('manajemen_pengguna.form');
});

Route::get('/kategori', 'KategoriController@index')->name('kategori.index');
Route::post('/kategori/store', 'KategoriController@store')->name('kategori.store');
Route::get('/kategori/edit/{id}', 'KategoriController@edit')->name('kategori.edit');
Route::post('/kategori/update/{id}', 'KategoriController@update')->name('kategori.update');
Route::get('/kategori/hapus/{id}', 'KategoriController@hapus');

Route::get('/form_kategori', function () {
    return view('/kategori.form');
});

Route::get('/pelayanan', 'PelayananController@index')->name('pelayanan.index');
Route::post('/pelayanan/store', 'PelayananController@store')->name('pelayanan.store');
Route::get('/pelayanan/edit/{id}', 'PelayananController@edit')->name('pelayanan.edit');
Route::post('/pelayanan/update/{id}', 'PelayananController@update')->name('pelayanan.update');
Route::get('/pelayanan/hapus/{id}', 'PelayananController@hapus');

Route::get('/form_pelayanan', function () {
    return view('admin/pelayanan.form');
});
