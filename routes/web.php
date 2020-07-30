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
Route::get('/data-pegawai', 'PegawaiController@index')->name('data-pegawai');
Route::get('/create-pegawai', 'PegawaiController@create')->name('create-pegawai');
Route::post('/simpan-pegawai', 'PegawaiController@store')->name('simpan-pegawai');
Route::get('/edit-pegawai', 'PegawaiController@edit')->name('edit-pegawai');

Route::prefix('admin') 
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group (function() {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

    });

Auth::routes();


