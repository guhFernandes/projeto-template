<?php

namespace App\Http\Controllers;

use App\Models\Sistema;
use Illuminate\Http\Request;

class SistemaController extends Controller
{

    public function index(Request $request)
    {
        $name = $request->name;
        $descricao = $request->descricao;
        $value = $request->value;
        $objeto = new Sistema;
        $objeto->addJogos($name, $descricao, $value);
    }

    public function listar()
    {
        $db = new Sistema;
        $resultado = $db->getAll();
        foreach($resultado as $value){
            echo $value->nome . ' ';
            echo $value->descricao . ' ';
            echo $value->valor . '<br>';
        }
    }

}
