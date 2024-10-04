<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/register',[TodoController::class,'showRegistrationForm'])->name('register');
Route::post('/register',[TodoController::class,'register'])->name('register2');

Route::get('/',[TodoController::class,'showLoginForm']);
Route::post('/',[TodoController::class,'login'])->name('login');

Route::get('/index',[TodoController::class,'index'])->name('home');

Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('delete/{id}',[TodoController::class,'delete'])->name('delete');

Route::get('edit/{id}',[TodoController::class,'edit'])->name('edit');

Route::post('update',[TodoController::class,'update'])->name('update');

Route::post('/store',[TodoController::class,'store'])->name('store');

Route::get('show/{id}',[TodoController::class,'show'])->name('show');






