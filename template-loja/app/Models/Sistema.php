<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sistema extends Model
{
    use HasFactory;

    public function getAll()
    {
        $db = DB::table('biblioteca_jogos')->get();
        return $db;
    }

    public function addJogos($name, $descricao, $value)
    {
        DB::table('biblioteca_jogos')->insert([
            'nome'=> $name,
            'descricao'=> $descricao,
            'valor'=> $value
        ]);
    }


}
