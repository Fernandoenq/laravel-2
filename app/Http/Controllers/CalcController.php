<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function showFormSoma()
    {
        return view('soma');
    }
    public function CalcSoma(Request $request)
    {
        if(!is_numeric($request->n1) || !is_numeric($request->n2)){
            return abort(502, 'Não são números');
        }

        //dd($request->all());//mostra coisas, no caso tudo que veio como parametro,
        // cod de sessão e os numeros

        $result = $request->n1 + $request->n2;

        return view('resultado', compact('result'));
    }
}
