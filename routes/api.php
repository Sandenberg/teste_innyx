<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('produtos/imagem/{nome}', 'ProdutoController@exibirImagem')->name('produtos.imagem');


Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutoController::class, 'index']);
    Route::post('/', [ProdutoController::class, 'store']);
    Route::get('/{produto}', [ProdutoController::class, 'show']);
    Route::put('/{produto}', [ProdutoController::class, 'update']);
    Route::delete('/{produto}', [ProdutoController::class, 'destroy']);
    Route::get('produtos/imagem/{nome}', 'ProdutoController@exibirImagem')->name('produtos.imagem');

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
