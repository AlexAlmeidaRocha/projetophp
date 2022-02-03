<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;

Route::get('/', [HomeController::class,'index']);
Route::get('/sobre',[HomeController::class,'sobre']);
Route::get('/sobre/resumopessoal', [SobreController::class,'resumopessoal']);
Route::get('/sobre/resumoprofissional', [SobreController::class,'resumoprofissional']);