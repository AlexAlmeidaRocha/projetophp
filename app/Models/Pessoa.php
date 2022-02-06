<?php
namespace App\Models;
class Pessoa
{
    public $Nome;
    public $Data_nascimento;   

    function CalcularIdade($Data)
    {
        $idade = 0;
        $data_nascimento = date('d-m-Y', strtotime($Data));
        list($diaNasc,$mesNasc,$anoNasc) = explode('-', $data_nascimento);

       $idade = date("Y") - $anoNasc;
       if (date("m") < $mesNasc){
           $idade -= 1;
       } elseif ( (date("m") == $mesNasc) && (date("d") < $diaNasc) ){
           $idade -= 1;
       }
        return $idade;
    }  
}