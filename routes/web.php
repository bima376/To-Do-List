<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TodoController::class, 'index'])->name('todo');
Route::post('/', [TodoController::class, 'store'])->name('todo.post');
Route::put('/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/{id}', [TodoController::class, 'destroy'])->name('todo.delete');