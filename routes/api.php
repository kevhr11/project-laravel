<?php

use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\MunicipalitiesController;
use App\Http\Controllers\SelectProfileController;
use App\Http\Controllers\TouristAttController;
use Illuminate\Http\Request;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\getServiceController;
use App\Http\Controllers\bussinesProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TouristPlaceController;
use App\Http\Controllers\TouristProfileController;
use App\Http\Controllers\UsersController;
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



//Category
Route::get('/category', [categoryController::class,'index']);//Show Categories
Route::post('/category', [categoryController::class,'store']);//Create new category
Route::put('/category/{id}', [categoryController::class,'update']);//Update category
Route::delete('/category/{id}', [categoryController::class,'destroy']);//Delete category

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