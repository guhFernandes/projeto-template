<?php

namespace App\Http\Controllers;

use App\Models\Sistema;
use Illuminate\Http\Request;
use Laravel\SerializableClosure\Serializers\Signed;

class SistemaController extends Controller
{

  


    public function storead(Request $request)
    {
        $objeto = new Sistema;
        $objeto->addJogos($request->nome, $request->descricao, $request->valor);
        $jogos = $objeto->getAllJogos();
        return view('resource', ['x'=> 'get', 'mensagem'=>'cadastrado com sucesso', 'result'=> $jogos]);
    }
    
    public function listar()
    {
        $db = new Sistema;
        $resultado = $db->getAllJogos();
        return view('resource', ['x'=>'get', 'result'=> $resultado]);
    }

    public function editar(Request $request)
    {
        $db = new Sistema;
        $jogos = $db->getJogos($request->id);
        return view('resource', ['x'=>'upd', 'result'=> $jogos]);
    }

    public function delete(Request $request)
    {
        $db = new Sistema;
        $db->delJogos($request->id);
        $jogos = $db->getAllJogos();
        $msg = "Deletado com sucesso";
        return view('resource', ['x'=>'get','mensagem'=> $msg, 'result' => $jogos]);
    }

    public function update(Request $request)
    {
        $db = new Sistema;
        $db->updateJogos($request->id, $request->nome, $request->descricao, $request->valor);
        $jogos = $db->getAllJogos();
        return view('resource', ['x'=>'get','mensagem'=> "Update com sucesso", 'result' => $jogos]);
    }

}
