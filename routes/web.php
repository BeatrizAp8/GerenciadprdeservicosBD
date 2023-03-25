<?php

use Illuminate\Support\Facades\Route;
use App\Models\Servico;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
   $meuPrimeiroServico = new Servico;
   $meuPrimeiroServico->nome = "Escritora";
   $meuPrimeiroServico->telefone = "118748934";
   $meuPrimeiroServico->origem = "Celular";
   $meuPrimeiroServico->data = "2023-02-13";
   $meuPrimeiroServico->observacao = "Não tenho editora";
   $meuPrimeiroServico->save();
   return view('index');
});
