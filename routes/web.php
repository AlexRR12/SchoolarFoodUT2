<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuariocontrol;
use App\Http\Controllers\MenuControlador;

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

Route::get('/usuario', [usuariocontrol::class, 'index']);

Route::get('/usuarios/crear', [usuariocontrol::class, 'create']);

Route::post('/usuarios/crear', [usuariocontrol::class, 'store']);

Route::get('/usuarios/ver/{id}', [usuariocontrol::class, 'show']);

Route::get('/usuarios/editar/{id}', [usuariocontrol::class, 'edit']);

Route::put('/usuarios/editar/{$id}', [usuariocontrol::class, 'update']);

Route::get('/usuarios/eliminar/{id}', [usuariocontrol::class, 'destroy']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/menu', [MenuControlador::class, 'opcPrincipal']);
Route::get('/contacto', [MenuControlador::class, 'opcContacto']);
Route::get('/nosotros', [MenuControlador::class, 'opcNosotros']);