<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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



route::get('arreglo/edit/{product}',[ProductController::class,('edit')])->name('product.edit');
route::put('arreflo/update/{product}',[ProductController::class,'update'])->name('product.update');
route::delete('arreglo/delete/{product}',[ProductController::class,'destroy'])->name('product.delete');

Route::get('/',[ProductController::class, 'index'])->name('index');
route::get('/arreglos',[ProductController::class,'arreglos'])->name('products');
route::get('/arreglo/{id}/{name}',[ProductController::class,'productShow'])->name('product.show');

route::get('/arreglo/create',[ProductController::class,'create'])->name('product.create');
route::post('/arreglo/store',[ProductController::class,'store'])->name('product.store');
