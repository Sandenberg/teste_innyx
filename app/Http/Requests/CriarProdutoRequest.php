<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriarProdutoRequest extends FormRequest
{
    /**
     * Determine se o usuário está autorizado a fazer essa solicitação.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Defina a autorização conforme necessário
    }

    /**
     * Obtenha as regras de validação que se aplicam à solicitação.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:50',
            'descricao' => 'required|string|max:200',
            'preco' => 'required|numeric|gt:0',
            'data_validade' => 'required|date|after_or_equal:today',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoria_id' => 'required|exists:categorias,id'
        ];
    }
}
