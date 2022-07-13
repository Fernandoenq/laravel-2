<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isNan;

class HomeController extends Controller
{
    public function hello()
    {
        //return 'Hello world';
        return view('hello');//Retorno a página hello de view
    }

    public function soma($num1, $num2)
    {

        if(!is_numeric($num1) || !is_numeric($num2)){
            return abort(502, 'Sabe nem o que é numero');// envia uma página de erro
        }
        $result = $num1 + $num2;
        return view('resultado', compact('result')); //['soma' => $soma] ou o compact('soma') 
    }

    public function sub($num1, $num2)
    {

        if(!is_numeric($num1) || !is_numeric($num2)){
            return abort(502, 'Sabe nem o que é numero');// envia uma página de erro
        }
        $result = $num1 - $num2;
        return view('resultado', compact('result')); //['soma' => $soma] ou o compact('soma') 
    }
}
