<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sistema extends Model
{
    use HasFactory;

    public function getAllJogos()
    {
        $db = DB::table('biblioteca_jogos')->get();
        return $db;
    }

    public function addJogos($nome, $descricao, $value)
    {
        DB::table('biblioteca_jogos')->insert([
            'nome'=> $nome,
            'descricao'=> $descricao,
            'valor'=> $value
        ]);
    }

    public function delJogos($id)
    {
        DB::table('biblioteca_jogos')->where('id','=', $id)->delete();
    }

    public function updateJogos($id,$nome,$descricao,$value)
    {
        DB::table('biblioteca_jogos')->where('id','=', $id)->update([
            'nome'=> $nome,
            'descricao'=> $descricao,
            'valor'=> $value
        ]);
    }

    public function getJogos($id)
    {
        $return = DB::table('biblioteca_jogos')->where('id','=', $id)->get();
        return $return;
    }

}
