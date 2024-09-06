<?php

use App\Http\Controllers\AdministratorController;
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

//apiResource 是什么
Route::prefix('dashboard')->group(function (){
    Route::get('/',[AdministratorController::class,'show']);


});
