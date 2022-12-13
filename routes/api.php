<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rollIdController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\BussinesTypeController;
use App\Http\Controllers\ReviewsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
    Route::get('/rollId', [rollIdController::class,'index']);
    Route::post('/rollId', [rollIdController::class, 'store']);
    Route::get('/rollId/{id}', [rollIdController::class, 'show']);
    Route::put('/rollId/{id}', [rollIdController::class, 'update']);
    Route::delete('/rollId/{id}', [rollIdController::class, 'destroy']);


    Route::get('/Status', [StatusController::class,'index']);
    Route::post('/Status', [StatusController::class, 'store']);
    Route::get('/Status/{id}', [StatusController::class, 'show']);
    Route::put('/Status/{id}', [StatusController::class, 'update']);
    Route::delete('/Status/{id}', [StatusController::class, 'destroy']);


    Route::get('/Gender', [GenderController::class,'index']);
    Route::post('/Gender', [GenderController::class, 'store']);
    Route::get('/Gender/{id}', [GenderController::class, 'show']);
    Route::put('/Gender/{id}', [GenderController::class, 'update']);
    Route::delete('/Gender/{id}', [GenderController::class, 'destroy']);


    Route::get('/BussinesType', [BussinesTypeController::class,'index']);
    Route::post('/BussinesType', [BussinesTypeController::class, 'store']);
    Route::get('/BussinesType/{id}', [BussinesTypeController::class, 'show']);
    Route::put('/BussinesType/{id}', [BussinesTypeController::class, 'update']);
    Route::delete('/BussinesType/{id}', [BussinesTypeController::class, 'destroy']);


    Route::get('/Reviews', [ReviewsController::class,'index']);
    Route::post('/Reviews', [ReviewsController::class, 'store']);
    Route::get('/Reviews/{id}', [ReviewsController::class, 'show']);
    Route::put('/Reviews/{id}', [ReviewsController::class, 'update']);
    Route::delete('/Reviews/{id}', [ReviewsController::class, 'destroy']);