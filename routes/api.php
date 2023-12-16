<?php

use App\Http\Controllers\DivisionController;
use App\Http\Controllers\SubdivisionController;
use App\Http\Controllers\UpperDivisionController;
use Illuminate\Support\Facades\Route;

//Route::get('/divisions', [DivisionController::class, 'index']);
//Route::post('/divisions', [DivisionController::class, 'store']);
//Route::get('/divisions/{division}', [DivisionController::class, 'show']);
//Route::put('/divisions/{division}', [DivisionController::class, 'update']);
//Route::delete('/divisions/{division}', [DivisionController::class, 'destroy']);

Route::resource('divisions', DivisionController::class);

Route::get('/subdivisions', [SubdivisionController::class, 'index']);
Route::get('/upper-divisions', [UpperDivisionController::class, 'index']);
