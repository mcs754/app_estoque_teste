<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller{
    public function pesquisar(){
        //Busca todos os produtos do banco de dados
        $produtos = Produto::all();

        //Chama a view produto pesquisar
        /*return view ('produto.pesquisar');*/

        // Chama a view produto.pequisar e envia os produtos buscados
        return view('produto.pesquisar')->with('produtos', $produtos);

        /*foreach ($produtos as $produto){
            echo $produto->descricao. "<br>";
        }*/
    }
}

