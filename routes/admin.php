<?php

use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/',[IndexController::class,'index']);
Route::get('/article',[ArticleController::class,'index']);

