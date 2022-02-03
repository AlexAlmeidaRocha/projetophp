<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pessoa;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }   
}
