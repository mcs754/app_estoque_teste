<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Input;

class ProdutoController extends Controller{
    public function pesquisar(){
        $descricao=Input::get('descricao');
        $produtos = Produto::where('descricao', 'like', '%'.$descricao.'%')->get();
        return view('produto.pesquisar')->with('produtos',$produtos);
    }

    public function mostrar_inserir(){
        return view('produto.inserir');
    }

    public function inserir(){
        $produto = new Produto();
        $produto->descricao = Input::get('descricao');
        $produto->quantidade = Input::get('quantidade');
        $produto->valor = Input::get('valor');
        $produto->data_vencimento = Input::get('data_vencimento');
        //Salvando no banco de dados
        $produto->save();
        $mensagem = "Produto inserido com sucesso";
        return view('produto.inserir')->with('mensagem',$mensagem);
    }

    public function mostrar_alterar($id){
        $produto = Produto::find($id);
        return view('produto.alterar')->with('produto', $produto);
    }

    public function alterar(){
        $id = Input::get('id');
        $p = Produto::find($id);
        $p->descricao = Input::get('descricao');
        $p->quantidade = Input::get('quantidade');
        $p->valor = Input::get('valor');
        $p->data_vencimento = Input::get('data_vencimento');
        $p->save();
        $mensagem = "Produto alterado com sucesso!";
        $produtos = Produto::all();
        return view('produto.pesquisar')->with('mensagem', $mensagem)->with('produtos', $produtos);
    }

    public function excluir($id){
        $produto = Produto::find($id);
        $produto->delete();
        $mensagem = "Produto excluído com sucesso!";
        $produtos = Produto::all();
        return view('produto.pesquisar')->with('mensagem', $mensagem)->with('produtos', $produtos);
    }
}

