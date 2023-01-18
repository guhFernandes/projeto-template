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

Route::get('/', function () {
    return view('index');
});

Route::get('perfil', function () {
    return view('profile');
});

Route::get('streams', function () {
    return view('streams');
});

Route::get('detalhes', function () {
    return view('details');
});

Route::get('jogos', function () {
    return view('browse');
});