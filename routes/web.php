<?php

use App\Http\Controllers\TodosController;
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
});

Route::get('/todos',[TodosController::class, 'getAllTodos']);
Route::post('todo',[TodosController::class,'addTodo'])->name('todo.add');
Route::delete('/tododelete/{id}',[TodosController::class,'deleteTodo'])->name('todo.delete');
