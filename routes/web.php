<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;



Route::get('/',[TodoListController::class,'index'])->name('index');

Route::view('/create','create_list')->name('create');

Route::Post('/create',[TodoListController::class,'create'])->name('create');


Route::get('/edit/{id}',[TodoListController::class,'edit'])->name('edit');

Route::put('/edit/{id}',[TodoListController::class,'update'])->name('update');

Route::get('/delete/{id}',[TodoListController::class,'destroy'])->name('delete');