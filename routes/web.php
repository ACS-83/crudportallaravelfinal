<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PerfilController;
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
    return view('welcome');
});

// Rutas propias

Route::resource('usuarios', UsuarioController::class);
//Modifico la ruta por parámetros (revisar php artisan route:list)
Route::resource('perfiles', PerfilController::class)->parameters(['perfiles' => 'perfil']);
