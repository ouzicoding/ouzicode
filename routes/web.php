<?php

use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\IndexController;
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

Route::get('/', [\App\Http\Controllers\Home\IndexController::class,'index']);

//apiResource 是什么
Route::prefix('dashboard')->group(function (){
    Route::get('/',[IndexController::class,'index']);
    Route::get('/article',[ArticleController::class,'index']);

});

Route::get('/article',[\App\Http\Controllers\Api\IndexController::class,'index']);
Route::get('/article/{id}',[\App\Http\Controllers\Api\IndexController::class,'detail']);
