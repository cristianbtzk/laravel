<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConeController extends Controller
{
    function index($r, $z, $tipo)
    {
        $areaFundo = 3.14 * $r * $r;
        $g = sqrt($r * $r + $z * $z);
        $areaTotal = 3.14 * $r * ($r + $g);
        $litros = $areaTotal * 3.45;
        $latas = ceil($litros / 18);
        $valorTotal = 0;
        switch ($tipo) {
            case 1:
                $valorTotal = $latas * 238.9;
                break;
            case 2:
                $valorTotal = $latas * 467.98;
                break;
            case 3:
                $valorTotal = $latas * 758.34;
                break;
            default:
                # code...
                break;
        }
        echo "Raio: " . $r . "<br>";
        echo "Altura: " . $z . "<br>";
        echo "Nível: " . $tipo . "<br>";
        echo "Geratriz: " . $g . "<br>";
        echo "Área Fundo: " . $areaFundo . "<br>";
        echo "Área Total: " . $areaTotal . "<br>";
        echo "Litros: " . $litros . "<br>";
        echo "Latas: " . $latas . "<br>";
        echo "Preço: " . $valorTotal . "<br>";
        return;
    }
}
