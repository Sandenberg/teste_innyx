<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('descricao', 200);
            $table->double('preco');
            $table->date('data_validade');
            $table->string('imagem')->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();

            // Restrições
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}

