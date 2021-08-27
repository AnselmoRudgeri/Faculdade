<?php

namespace App\Http\Controllers;

use App\Models\Gestao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GestaoController extends Controller
{
    public function print(Request $request){
        $dados = $request ->all();
        $comprovante = Gestao::print($dados);
        return $comprovante;
    }
}
