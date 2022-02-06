<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class HomeController extends Controller
{   
    public function index(){
        return view('home');
    } 

    public function buscaridade(Request $request){  
        $pessoa = new Pessoa();
        $funcname = "CalcularIdade";
        $idade = $pessoa->$funcname($request["data"]);
        return $idade;
    } 
}
