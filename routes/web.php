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
Route::get('/', 'HomeController@index');
Route::get('/admin', function () {
    return view ('tambah');
});
Auth::routes();
Route::get('/genre', 'HomeController@genreList');

Route::group(['middleware' => ['auth']], function () {
    //only authorized users can access these routes
});

Route::group(['middleware' => ['guest']], function () {
    
});

//admin
Route::middleware('admin')->group(function () {
    Route::get('admin/routes', 'HomeController@admin');
    //manajemen anime
    Route::get('post','AnimeController@tampil');
    Route::get('post/tambah', 'AnimeController@tambah');
    Route::post('post/tambah', 'AnimeController@simpan');
    Route::get('post/{slug}/hapus', 'AnimeController@hapus');
    Route::get('post/{slug}/sunting', 'AnimeController@sunting');
    Route::post('post/{slug}/sunting', 'AnimeController@simpanSunting');
    

    Route::get('post/{slug}/', 'EpisodesController@tampil');
    Route::get('post/{slug}/tambah', 'EpisodesController@tambah');
    Route::post('post/{slug}/tambah', 'EpisodesController@simpan');
    Route::get('post/{slug}/hapus/{id}', 'EpisodesController@hapus');
    Route::get('post/{slug}/sunting/{id}', 'EpisodesController@sunting');
    Route::post('post/{slug}/sunting/{id}', 'EpisodesController@simpanSunting');
    // Route::get('post/{slug}/edit', 'HomeController@admin');

    // Route::post('post/{slug}/tambah', 'EpisodesController@simpanEp');
});

Route::get('/list', 'HomeController@list');
Route::get('/{slug}', 'HomeController@anime');

Route::get('/genre/{genre}', 'HomeController@genre');