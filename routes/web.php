<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;

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

Route::get('/home', [IndexController::class, 'index'])->name('home.index');

Route::get('/ola', function () {
    return '<h1>Hello Turma de Software</h1>';
})->name('home.hello');


Route::get('/hello/{nome}', function ($nome) {
    return '<h1>Hello Turma de Software</h1>'.$nome;
});

//rotas de users
Route::get('/users/add', [UserController::class, 'addUser'])->name('users.add');
Route::post('/users/create', [UserController::class, 'createUser'])->name('users.create');

Route::post('/users/update', [UserController::class, 'updateUser'])->name('users.update');

Route::get('/users/all', [UserController::class, 'allUsers'])->name('users.all');

Route::get('/users/view/{id}', [UserController::class, 'viewUser'])->name('users.view');
Route::get('/users/delete/{id}', [UserController::class, 'deleteUser'])->name('users.delete');

//rotas de tasks
Route::get('/tasks/all', [TaskController::class, 'allTasks'])->name('tasks.all');

Route::get('/tasks/view/{id}', [TaskController::class, 'viewTask'])->name('tasks.view');


Route::get('/tasks/delete/{id}', [TaskController::class, 'deleteTask'])->name('tasks.delete');


//rotas de users
Route::get('/tasks/add', [TaskController::class, 'addTask'])->name('tasks.add');
Route::post('/tasks/create', [TaskController::class, 'createTask'])->name('tasks.create');
Route::post('/tasks/update', [TaskController::class, 'updateTask'])->name('tasks.update');

Route::get('/dashboard/home', [DashboardController::class, 'index'])->name('dashboard.home');

Route::fallback(function(){
 return view('main.fallback');
});






