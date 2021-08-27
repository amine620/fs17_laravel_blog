<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('create_C',[CategoryController::class,'create'])->name('create_C');


Route::post('store',[CategoryController::class,'store'])->name('store');


Route::get('categories_list',[CategoryController::class,'index'])->name('categories_list');


Route::delete('delete/{id}',[CategoryController::class,'destroy'])->name('delete');


Route::get('edit/{id}',[CategoryController::class,'edit'])->name('edit');


Route::put('update/{id}',[CategoryController::class,'update'])->name('update');

