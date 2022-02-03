<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pessoa;

class HomeController extends Controller
{
   
    // public function index(){
    //     $pessoa = new Pessoa();
    //     return view('home', 
    //     [
    //         $pessoa->nome = $pessoa->nome,
    //         $pessoa->dia_nascimento = $pessoa->dia_nascimento,
    //         $pessoa->mes_nascimento = $pessoa->mes_nascimento,
    //         $pessoa->ano_nascimento = $pessoa->ano_nascimento
    //     ]);
    // }
    public function index(){
        return view('home');
    }
    
    // function calcularIdade($data)
    // {
    //     $idade = 0;
    //     $data_nascimento = date('Y-m-d', strtotime($data));
    //     list($anoNasc, $mesNasc, $diaNasc) = explode('-', $data_nascimento);
        
    //     $idade = date("Y") - $anoNasc;
    //     if (date("m") < $mesNasc){
    //         $idade -= 1;
    //     } 
    //     elseif ((date("m") == $mesNasc) && (date("d") <= $diaNasc) ){
    //         $idade -= 1;
    //     }        
    //     return $idade;
    // }  
    
    public function sobre(){
        return view('sobre');
    }  
}
