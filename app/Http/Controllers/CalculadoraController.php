<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index(){
    
    $variable = "Mensaje desde el controlador";
    
    
    return view('calculadora', compact('variable'));

    }
}
