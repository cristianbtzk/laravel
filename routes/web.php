<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ConeController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\HojeController;
use App\Http\Controllers\PiramideController;
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

Route::get('/hoje/{h}',  [HojeController::class, 'show']);

Route::get('/piramideController/{h}/{ab}/{tipo}', [PiramideController::class, 'index'])->where("h", "[0-9]+(.[0-9]+)?")->where("ab", "[0-9]+(.[0-9]+)?")->where("tipo", "[0-9]+");
Route::get('/cone/{r}/{z}/{tipo}', [ConeController::class, 'index'])->where("r", "[0-9]+(.[0-9]+)?")->where("z", "[0-9]+(.[0-9]+)?")->where("tipo", "[0-9]+");

Route::get('/piramide/{h}/{ab}/{tipo}', function ($h, $ab, $tipo) {
    $areaBase = 4 * $ab * $ab;
    $altLado = sqrt($h * $h + $ab * $ab);
    $areaTriangulo = ((2 * $ab * $altLado) / 2);
    $areaLateral = $areaTriangulo * 4;
    $areaTotal = $areaBase + $areaLateral;
    $litros = $areaTotal / 4.76;
    $latas = ceil($litros / 18);
    $valorTotal = 0;
    $volume = $areaBase * $h / 3;
    switch ($tipo) {
        case 1:
            $valorTotal = $latas * 127.9;
            break;
        case 2:
            $valorTotal = $latas * 258.98;
            break;
        case 3:
            $valorTotal = $latas * 344.34;
            break;
        default:
            # code...
            break;
    }
    echo "Ab: " . $ab . "<br>";
    echo "h: " . $h . "<br>";
    echo "a1: " . $altLado . "<br>";
    echo "Área triângulo: " . $areaTriangulo . "<br>";
    echo "Área Base: " . $areaBase . "<br>";
    echo "Área Total: " . $areaTotal . "<br>";
    echo "Tipo tinta: " . $tipo . "<br>";
    echo "Litros: " . $litros . "<br>";
    echo "Latas: " . $latas . "<br>";
    echo "Preço: " . $valorTotal . "<br>";
    echo "Volume: " . $volume . "<br>";
    return;
})->where("h", "[0-9]+(.[0-9]+)?")->where("ab", "[0-9]+(.[0-9]+)?")->where("tipo", "[0-9]+");

Route::redirect('/pir/{h}/{ab}/{tipo}', '/piramide/{h}/{ab}/{tipo}');

Route::resource('/agenda', AgendaController::class);
Route::resource('/estado', EstadoController::class);
Route::resource('/cidade', CidadeController::class);
Route::resource('/contato', ContatoController::class);
