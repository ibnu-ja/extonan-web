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

Auth::routes();


Route::group(['domain' => 'admin.extonan-web.test', 'middleware' => 'admin'], function () {
    // Route::any('/adminer', '\Aranyasen\LaravelAdminer\AdminerController@index');
    Route::get('/anime', 'AnimeController@index');
    Route::get('/anime/tambah', 'AnimeController@tambah');
    Route::post('/anime/tambah', 'AnimeController@simpan');
    Route::get('/anime/{id}', 'AnimeController@tampil');

});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
