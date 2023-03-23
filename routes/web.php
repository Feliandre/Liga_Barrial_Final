<?php

use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\PresidenteEquipoController;
use Illuminate\Support\Facades\Route;

//use Spatie\Permission\Models\Role;
//Role::create(['name'=>'admin']);
//Role::create(['name'=>'general']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('equipos',EquipoController::class);
Route::resource('partidos',PartidoController::class);
Route::resource('jugadors',JugadorController::class);
Route::resource('calendarios',CalendarioController::class);
Route::resource('presidente_equipos',PresidenteEquipoController::class);


/*

// RUTAS PARA ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function() {
    

});

// RUTAS PARA GENERAL
Route::group(['prefix' => 'general', 'middleware' => ['auth','role:general']], function() {
    //rutas del usuario general
    
});

*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

