<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        Produto::create([
            'titulo' =>$request->titulo,
            'preco' =>$request->preco,
            'categoria' =>$request->categoria,
            'comentario' =>$request->comentario,
        ]);

        return view('produtos.salvo');
    }

    public function show(){
        $produtos = Produto::all();
        return view('produtos.todos', compact('produtos'));
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return view("produtos.delete");
    }

    public function edit($id){
        $produto = Produto::find($id);
        return view('produtos.editar', ['produto'=>$produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::find($id);
        $produto->update([
            'titulo' =>$request->titulo,
            'preco' =>$request->preco,
            'categoria' =>$request->categoria,
            'comentario' =>$request->comentario,
        ]);

        return view("produtos.atualizado");
    }
}
