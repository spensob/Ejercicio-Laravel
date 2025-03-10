<?php

use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\OficinasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [OficinasController::class, "index"]);

Route::resource('oficinas', controller: OficinasController::class);
Route::resource('oficinas.empleados', EmpleadosController::class);