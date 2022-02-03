<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function resumopessoal(){
        return view('sobre.resumopessoal');
    }
    public function resumoprofissional(){
        return view('sobre.resumoprofissional');
    }
}
