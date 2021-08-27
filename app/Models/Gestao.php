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
          $resposta['prazo'] = "Voce tem 10 dias para a devolucao deste Livro";
          $resposta['livro'] = $dados['livro'];
          echo "<strong>Tipo de Usuário:</strong> ".$resposta['hierarquia'], "<br>" ;
          echo "<strong>Nome do Livro:</strong> ".$resposta['livro'], "<br>" ;
          echo "<strong>Prazo devolução:</strong> ".$resposta['prazo'], "<br>" ;

      } else if ($dados['hierarquia'] == "aluno" || $dados['hierarquia'] == "Aluno" || $dados['hierarquia'] == "ALUNO") {
          $resposta['hierarquia'] = "Aluno";
          $resposta['prazo'] = "Voce tem 3 dias para a devolucao deste Livro";
          $resposta['livro'] = $dados['livro'];
          echo "<strong>Tipo de Usuário:</strong> ".$resposta['hierarquia'], "<br>" ;
          echo "<strong>Nome do Livro:</strong> ".$resposta['livro'], "<br>" ;
          echo "<strong>Prazo devolução:</strong> ".$resposta['prazo'], "<br>" ;
      }
    }

}
