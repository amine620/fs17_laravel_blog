<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

;



// category routes
Route::group(['prefix'=>'categories'],function(){

Route::get('create',[CategoryController::class,'create'])->name('categories.create');


Route::post('store',[CategoryController::class,'store'])->name('categories.store');


Route::get('categories_list',[CategoryController::class,'index'])->name('categories.list');


Route::delete('delete/{id}',[CategoryController::class,'destroy'])->name('categories.delete');


Route::get('edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');


Route::put('update/{id}',[CategoryController::class,'update'])->name('categories.update');
});


// post routes


Route::group(['prefix'=>'posts'],function(){

    Route::get('create',[PostController::class,'create'])->name('create');
    
    Route::get('list',[PostController::class,'index'])->name('list');
    
    Route::get('edit/{id}',[PostController::class,'edit'])->name('edit');

    Route::get('details/{id}',[PostController::class,'details'])->name('details');
    
    Route::post('store',[PostController::class,'store'])->name('store');
    
    Route::delete('delete/{id}',[PostController::class,'destroy'])->name('delete');
    
    Route::put('update/{id}',[PostController::class,'update'])->name('update');


    Route::get('/',[PostController::class,'home'])->name('home');

    
    
});
