<?php

use App\Http\Controllers\ConsultasController;
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


Route::get('/', function () {
    return view('welcome');
});
/*

Route::get('/games', [ConsultasController::class, 'index']);


Route::get('/teams', [ConsultasController::class, 'index1']);

Route::get('/players', [ConsultasController::class, 'index2']);

Route::get('/goals', [ConsultasController::class, 'index3']);

Route::get('/games1', [ConsultasController::class, 'index4']);

Route::get('/president', [ConsultasController::class, 'index5']);
*/