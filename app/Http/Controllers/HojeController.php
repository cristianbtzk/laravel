<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HojeController extends Controller
{
    function show($h, $ab, $tipo) {
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
    }
}
