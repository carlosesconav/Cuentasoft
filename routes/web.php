<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CuentaCobroController;
use App\Http\Controllers\HomeController;
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
    return view('auth');
});

Auth::routes();

/*

Todas las rutas deben estar dentro de grupo del middleware para que sean protegidas y no se peuda
acceder a ellas sin iniciar sesion.

*/
Route::group(['middleware' => 'auth'], function() {
    
 Route::get('/', [HomeController::class, 'index'])->name('home');

//Rutas de cuentas de cobro
Route::resource('cuentas',CuentaCobroController::class);

//Rutas de los clientes
Route::resource('clientes',ClientesController::class);

//Rutas del home
 Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/inicio', [HomeController::class, 'menu'])->name('menu');


});

