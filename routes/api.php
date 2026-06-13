<?php

use App\Http\Controllers\Api\AmbassadorController;
use App\Http\Controllers\Api\ApplicationController;
use App\Http\Controllers\Api\ScholarshipController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*
|--------------------------------------------------------------------------
| Public API Routes
|--------------------------------------------------------------------------
*/

Route::get('/ambassadors', [AmbassadorController::class, 'index']);
Route::get('/scholarships', [ScholarshipController::class, 'index']);
Route::post('/applications', [ApplicationController::class, 'store']);
