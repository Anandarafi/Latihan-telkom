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


Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/daftar', 'PageController@daftar');

Route::get('/kontak', "Kontak@index");
Route::get('/kontak/edit/{id}', "Kontak@edit");
Route::post('/kontak/update', "Kontak@update") ->name('kontak.update');
Route::get('/kontak_create','Kontak@create');
Route::get('/kontak/create','Kontak@create');
Route::post('/kontak/store','Kontak@store') ->name('kontak.store');
Route::get('/kontak/hapus/{id}', "Kontak@hapus");



Route::get("/test", "Test@first");

Route::get("/registration", "Test@form");

Route::post('/send', "Test@send");
