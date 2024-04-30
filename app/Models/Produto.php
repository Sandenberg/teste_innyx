<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'preco', 'data_validade', 'imagem', 'categoria_id'];

    public static function rules()
    {
        return [
            'nome' => 'required|max:50',
            'descricao' => 'required|max:200',
            'preco' => 'required|numeric|min:0',
            'imagem',
            'data_validade' => 'required|date|after_or_equal:today',
            'categoria_id',
        ];
    }
}
