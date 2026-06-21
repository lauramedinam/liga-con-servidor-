<?php

use App\Http\Controllers\ConsultasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresidentController;
/*
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\GameController;
use App\Http\Controllers\Api\GoalController;
*/


Route::get('presidents', [PresidentController::class,'index'])->name('api.v1.presidents.index');
Route::post('presidents', [PresidentController::class,'store'])->name('api.v1.presidents.store');
Route::get('presidents/{president}', [PresidentController::class,'show'])->name('api.v1.presidents.show');
Route::put('presidents/{president}', [PresidentController::class,'update'])->name('api.v1.presidents.update');
Route::delete('presidents/{president}', [PresidentController::class,'destroy'])->name('api.v1.presidents.delete');

Route::apiResource('presidents',PresidentController::class)->names('api.v1.presidents');
/*

Route::get('/games', [ConsultasController::class, 'index'])->name('api.v1.games.index');
Route::get('/teams', [ConsultasController::class, 'index1'])->name('api.v1.teams.index1');
Route::get('/players', [ConsultasController::class, 'index2'])->name('api.v1.players.index2');
Route::get('/goals', [ConsultasController::class, 'index3'])->name('api.v1.goals.index3');
Route::get('/games1', [ConsultasController::class, 'index4'])->name('api.v1.games1.index4');
Route::get('/president', [ConsultasController::class, 'index5'])->name('api.v1.president.index5');
*/