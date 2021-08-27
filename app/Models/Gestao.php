<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestao extends Model
{
    public static function print($dados)
    {
      if ($dados['hierarquia'] == "professor" || $dados['hierarquia'] == "Professor" || $dados['hierarquia'] == "PROFESSOR" ) {
          $resposta['hierarquia'] = "Professor";
          $resposta['prazo'] = "Você tem 10 dias para a devolução deste Livro";
          $resposta['livro'] = $dados['livro'];
          return view('logado',$resposta);
      } else if ($dados['hierarquia'] == "aluno" || $dados['hierarquia'] == "Aluno" || $dados['hierarquia'] == "ALUNO") {
          $resposta['hierarquia'] = "Aluno";
          $resposta['prazo'] = "Você tem 3 dias para a devolução deste Livro";
          $resposta['livro'] = $dados['livro'];
          return view('logado',$resposta);
      }
    }

}
