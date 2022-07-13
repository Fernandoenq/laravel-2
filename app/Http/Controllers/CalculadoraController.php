<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function ir()
    {
        return view('calculadora');
    }

    public function calculo(Request $request)
    {
        switch($request->operador){
            case '+':
                $result = $request->num1 + $request->num2;
                break;
            case '-':
                $result = $request->num1 - $request->num2;
                break;
            case '*':
                $result = $request->num1 * $request->num2;
                break;
            case '/':
                $result = $request->num1 / $request->num2;
                break;
        }

        return view('calcular',compact('result'));
    }
}
