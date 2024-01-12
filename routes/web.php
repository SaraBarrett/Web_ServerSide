<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('bemvindos');

Route::get('/home', function () {
     return view('main.home');
})->name('home.index');

Route::get('/ola', function () {
    return '<h1>Hello Turma de Software</h1>';
})->name('home.hello');


Route::get('/hello/{nome}', function ($nome) {
    return '<h1>Hello Turma de Software</h1>'.$nome;
});

//rotas de users
Route::get('/users/add', function () {
    return view('users.add_user');
})->name('users.add');


Route::fallback(function(){
 return view('main.fallback');
});






