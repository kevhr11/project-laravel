<?php

use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\MunicipalitiesController;
use App\Http\Controllers\SelectProfileController;
use App\Http\Controllers\TouristAttController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TouristPlaceController;
use App\Http\Controllers\TouristProfileController;
use App\Http\Controllers\UsersController;

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

/*
|______________________________________________
|    *Table TouristPlace
|
*/

Route::get('/touristplaces', [TouristPlaceController::class,'index']);
Route::post('/touristplaces', [TouristPlaceController::class,'store']);
Route::put('/touristplaces/{id}', [TouristPlaceController::class,'update']);
//Route::post('/touristplaces/{id}', [TouristPlaceController::class,'destroy']);

/*
|______________________________________________
|    *Table Departaments
|
*/

Route::get('/departaments', [DepartamentController::class,'index']);
Route::post('/departaments', [DepartamentController::class,'store']);
Route::put('/departaments/{id}', [DepartamentController::class,'update']);
//Route::post('/touristplaces/{id}', [TouristPlaceController::class,'destroy']);


/*
|______________________________________________
|    *Table Municipalities
|
*/
Route::get('/municipalities', [MunicipalitiesController::class,'index']);
Route::post('/municipalities', [MunicipalitiesController::class,'store']);
Route::put('/municipalities/{id}', [MunicipalitiesController::class,'update']);

/*
|______________________________________________
|    *selectProfiles
|
*/
Route::get('/selectprofiles', [SelectProfileController::class,'index']);
Route::post('/selectprofiles', [SelectProfileController::class,'store']);
Route::put('/selectprofile/{id}', [SelectProfileController::class,'update']);


/*
|______________________________________________
|    *TourisProfile
|
*/
Route::get('/touristprofiles', [TouristProfileController::class,'index']);
Route::post('/touristprofiles', [TouristProfileController::class,'store']);
Route::put('/touristprofiles/{id}', [TouristProfileController::class,'update']);


/*
|______________________________________________
|    *TouristAtts
|
*/
Route::get('/touristatt', [TouristAttController::class,'index']);
Route::post('/touristatt', [TouristAttController::class,'store']);
Route::put('/touristatt/{id}', [TouristAttController::class,'update']);


/*
|______________________________________________
|    *Users
|
*/
Route::get('/users', [UsersController::class,'index']);
Route::post('/users', [UsersController::class,'store']);
Route::put('/users/{id}', [UsersController::class,'update']);




?>
