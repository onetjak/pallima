<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/berita', 'PostController@ApiBerita');
Route::get('/bantuan', 'BantuanController@ApiBantuan');
Route::get('/pengurus', 'PengurusController@ApiPengurus');
Route::get('/ibadah', 'IbadahController@ApiIbadah');
Route::get('/posyandu', 'PosyanduController@ApiPosyandu');
Route::get('/sekolah', 'SekolahController@ApiSekolah');


