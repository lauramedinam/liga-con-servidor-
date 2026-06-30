<?php

use App\Http\Controllers\ConsultasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresidentController;
use App\Http\Controllers\GameController;
/*
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\GoalController;
*/



Route::post('/presidents', [PresidentController::class,'store']);
Route::get('/presidents', [PresidentController::class,'index']);
Route::put('/presidents/{president}', [PresidentController::class,'update']);
Route::get('/presidents/{president}', [PresidentController::class,'show']);
Route::delete('/presidents/{president}', [PresidentController::class,'destroy']);

/*
Route::apiResource('presidents',PresidentController::class)->names('api.v1.presidents');
*/
 
Route::get('/games', [GameController::class,'index']);
Route::post('/games', [GameController::class,'store']);
Route::get('/games/{game}', [GameController::class,'show']);
Route::put('/games/{game}', [GameController::class,'update']);
Route::delete('/games/{game}', [GameController::class,'destroy']);


/*
Route::apiResource('games',GameController::class)->names('api.v1.games');
*/