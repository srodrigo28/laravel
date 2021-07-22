<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return 'Olá Seja bem-vindo ao Curso';
// });

Route::get('/',          function () { return 'Olá seja bem vindo ao curso!'; });
Route::get('/sobre-nos', function () { return 'Sobre-nós'; });
Route::get('/contato',   function () { return view('Contato'); });
