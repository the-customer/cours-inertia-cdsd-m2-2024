<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/show',[HomeController::class,'show'])->name('home.show');


Route::get('/todo',[TodoController::class,'list'])->name('todo.list');

Route::get('/example',[HomeController::class,'example'])->name('home.example');

Route::resource('/articles',ArticleController::class)->only(['index','show']);

// Route::resource('/categories',CategoryController::class)->except(['destroy']);
Route::resource('/categories',CategoryController::class);
