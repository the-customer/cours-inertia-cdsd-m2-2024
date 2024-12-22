<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/show',[HomeController::class,'show'])->name('home.show');


Route::get('/todo',[TodoController::class,'list'])->name('todo.list');

Route::get('/example',[HomeController::class,'example'])->name('home.example');