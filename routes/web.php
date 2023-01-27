<?php

use App\Models\Incidencia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidenciasController;

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


Route::get('/hola', function () {
    return view('hola6');
});

Route::get('/', [IncidenciasController::class, 'index']);

Route::get('/incidencia/{id}', [IncidenciasController::class, 'show']);

Route::get('/newIncidencia', [IncidenciasController::class, 'create']);

Route::get('/incidencia', [IncidenciasController::class, 'store']);
