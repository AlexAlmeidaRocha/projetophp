<?php

class Pessoa
{
    public $nome;
    public $data_nascimento;
    public $dia_nascimento;
    public $mes_nascimento;
    public $ano_nascimento;
    public $idade; 
}
// function calcularIdade($data)
// {
//     $idade = 0;
//     $data_nascimento = date('Y-m-d', strtotime($data));
//     list($anoNasc, $mesNasc, $diaNasc) = explode('-', $data_nascimento);
    
//        $idade = date("Y") - $anoNasc;
//        if (date("m") < $mesNasc){
//            $idade -= 1;
//        } elseif ((date("m") == $mesNasc) && (date("d") <= $diaNasc) ){
//            $idade -= 1;
//        }
    
//     return $idade;
// } 