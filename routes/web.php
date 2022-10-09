<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ConeController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\HojeController;
use App\Http\Controllers\PiramideController;
use App\Http\Controllers\ServiceStatusController;
use App\Models\Contato;
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


Route::resource('/agenda', AgendaController::class);
Route::resource('/estado', EstadoController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/serviceStatus', ServiceStatusController::class);
Route::resource('/cidade', CidadeController::class);
Route::resource('/contato', ContatoController::class);
