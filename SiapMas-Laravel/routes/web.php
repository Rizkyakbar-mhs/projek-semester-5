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

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/', 'UserController@index');
Route::get('/register', 'UserController@register');
Route::get('/lupaPass', 'UserController@lupaPass');
Route::get('/Tambah-Obat', 'Obat@tambahobat');

Route::post('/login', 'UserController@login');