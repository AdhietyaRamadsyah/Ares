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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'tampilkan-data'],function(){
    Route::get('jenis','JenisController@index')->name('tampilkan-data.jenis');
    Route::get('transaksi','TransaksiController@index')->name('tampilkan-data.transaksi');
});

Route::group(['prefix'=>'ambil-form'], function(){
    Route::get('transaksi','TransaksiController@create')->name('ambil-form.transaksi');
    Route::get('jenis','JenisController@create')->name('ambil-form.jenis');
});
