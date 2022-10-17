<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceStatusController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserCityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "Home - GET";
});

Route::prefix('/app')->group(function () {

});


Route::resource('/evaluation', EvaluationController::class);
Route::resource('/message', MessageController::class);
Route::resource('/role', RoleController::class);
Route::resource('/service', ServiceController::class);
Route::resource('/user', UserController::class);
Route::resource('/state', StateController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/serviceStatus', ServiceStatusController::class);
Route::resource('/city', CityController::class);
Route::resource('/address', AddressController::class);
Route::resource('/userCity', UserCityController::class);
