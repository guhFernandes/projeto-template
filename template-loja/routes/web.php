<?php

use App\Http\Controllers\SistemaController;
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


Route::get('/add/jogos', function() {
    return view('resource',['x'=>'cad']);
});
Route::post('/add/jogos', [SistemaController::class, 'storead']);
Route::get('/listar/jogos', [SistemaController::class, 'listar']);
Route::post('/editar/jogos', [SistemaController::class, 'editar']);
Route::post('/update', [SistemaController::class, 'update']);
Route::post('/delete/jogos', [SistemaController::class, 'delete']);
