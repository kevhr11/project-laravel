<?php

use Illuminate\Http\Request;

use App\Http\Controllers\messageController;
use App\Http\Controllers\tokenController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;


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

route::get('/messages',[messageController ::class,'index']);
route::post('/messages', [messageController::class,'store']);
route::put('/messages/{id}', [messageController::class,'update']);
route::delete('/messages/{id}', [messageController::class,'destroy']);

route::get('/tokens',[tokenController ::class,'index']);
route::post('/tokens', [tokenController::class,'store']);
route::put('/tokens/{id}', [tokenController::class,'update']);
route::delete('/tokens/{id}', [tokenController::class,'destroy']);

route::get('/Galleries',[GalleryController ::class,'index']);
route::post('/Galleries', [GalleryController::class,'store']);
route::put('/Galleries/{id}', [GalleryController::class,'update']);
route::delete('/Galerries/{id}', [GalleryController::class,'destroy']);

