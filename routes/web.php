<?php

use App\Http\Controllers\CalcController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'hello']);//quando entrar no link
//ja chama dentro da classe HomeController a função hello que lá ira retornar uma página ou algo em html

Route::get('/soma/{num1}/{num2}', [HomeController::class, 'soma']);
//outra rota, mesma class, outra função e passando agora 2 parametros
Route::get('/sub/{num1}/{num2}',[HomeController::class, 'sub']);

Route::get('/sum',[CalcController::class, 'showFormSoma']);
Route::post('/calc/sum', [CalcController::class, 'calcSoma']);

Route::get('/pokemon/{nome}', [PokemonController::class, 'pokemon']);

Route::get('/calculadora', [CalculadoraController::class, 'ir']);
Route::post('/calcular', [CalculadoraController::class, 'calculo']);
