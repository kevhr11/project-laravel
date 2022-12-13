<?php

use App\Http\Controllers\categoriaController;
use Illuminate\Http\Request;
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


//Category
Route::get('/category', [categoriaController::class,'index']);//Show Categories
Route::post('/category', [categoriaController::class,'store']);//Create new category
Route::put('/category/{id}', [categoriaController::class,'update']);//Update category
Route::delete('/category/{id}', [categoriaController::class,'destroy']);//Delete category

//Service
Route::get('/service', [serviceController::class,'index']);//Show Services
Route::post('/service', [serviceController::class,'store']);//Create new Service
Route::put('/service/{id}', [serviceController::class,'update']);//UpdatService
Route::delete('/service/{id}', [serviceController::class,'destroy']);//DeletService

//getService
Route::get('/getService', [getServiceController::class,'index']);//Show getCategories
Route::post('/getService', [getServiceController::class,'store']);//Create new getService
Route::put('/getService/{id}', [getServiceController::class,'update']);//Update getService
Route::delete('/getService/{id}', [getServiceController::class,'destroy']);//Delete getService

//BussinesProfile
Route::get('/bussinesProfile', [bussinesProfileController::class,'index']);//Show bussinesProfile
Route::post('/bussinesProfile', [bussinesProfileController::class,'store']);//Create new bussinesProfile
Route::put('/bussinesProfile/{id}', [bussinesProfileController::class,'update']);//Update bussinesProfile
Route::delete('/bussinesProfile/{id}', [bussinesProfileController::class,'destroy']);//Delete bussinesProfile