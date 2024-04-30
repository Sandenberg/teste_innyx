<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('imagem')) {
            $imagemNome = $request->file('imagem')->getClientOriginalName();
            $request->file('imagem')->storeAs('public/produtos', $imagemNome);
        }
    
        $request->validate([
            'nome' => 'required|max:50',
            'descricao' => 'required|max:200',
            'preco' => 'required|numeric|min:0',
            'data_validade' => 'required|date|after_or_equal:today',
            
        ]);

        $produto = Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'data_validade' => $request->data_validade,
            'imagem' => $imagemNome ?? null,
            'categoria_id' => $request->categoria_id,
        ]);
        return response()->json($produto, 201);
    }

    public function show(Produto $produto)
    {
        return response()->json($produto);
    }

    public function exibirImagem($nome)
{
    $imagem = Storage::get('public/produtos/' . $nome);

    return Response::make($imagem, 200)->header('Content-Type', 'image/jpeg');
}

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required|max:50',
            'descricao' => 'required|max:200',
            'preco' => 'required|numeric|min:0',
            'data_validade' => 'required|date|after_or_equal:today',
            
        ]);

        $produto->update($request->all());
        return response()->json($produto, 200);
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return response()->json(null, 204);
    }



}
