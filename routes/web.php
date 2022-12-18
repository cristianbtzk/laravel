<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProviderController;
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
Route::get('/message/getByServiceUser/{serviceId}/{userId}', [MessageController::class, 'getByServiceUser'])->name('message.getByServiceUser');
Route::get('/message/getByServiceClient/{serviceId}', [MessageController::class, 'getByServiceClient'])->name('message.getByServiceClient');
Route::get('/message/getByService/{serviceId}', [MessageController::class, 'getByService'])->name('message.getByService');
Route::resource('/message', MessageController::class);
Route::resource('/role', RoleController::class);
Route::patch('/service/finish/{id}', [ServiceController::class, 'finish'])->name('service.finish');
Route::get('/service/getByMessage', [ServiceController::class, 'getByMessage'])->name('service.getByMessage');
Route::resource('/service', ServiceController::class);
Route::post('/user/auth', [UserController::class, 'auth'])->name('user.auth');
Route::resource('/user', UserController::class);
Route::get('/client/services', [ClientController::class, 'services'])->name('client.services');
Route::put('/client/setAddress', [ClientController::class, 'setAddress'])->name('client.setAddress');
Route::get('/client/profile', [ClientController::class, 'profile'])->name('client.profile');
Route::resource('/client', ClientController::class);
Route::get('/provider/availableServices', [ProviderController::class, 'availableServices'])->name('provider.availableServices');
Route::post('/provider/addCity', [ProviderController::class, 'addCity'])->name('provider.addCity');
Route::get('/provider/profile', [ProviderController::class, 'profile'])->name('provider.profile');
Route::resource('/provider', ProviderController::class);
Route::resource('/state', StateController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/serviceStatus', ServiceStatusController::class);
Route::get('/city/state/{id}', [CityController::class, 'getByState']);
Route::resource('/city', CityController::class);
Route::resource('/address', AddressController::class);
Route::resource('/userCity', UserCityController::class);
Route::get('/login', function() {
    return view('user.signin');
})->name('login');
