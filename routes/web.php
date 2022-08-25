<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;
use App\Models\Products;
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
    $products = Products::all();
    $category = Category::all();

    return view('welcome', compact('products', 'category'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth','isAdmin'])->group(function (){
    Route::get('/dashboard', [App\Http\Controllers\Admin\FrontendController::class, 'index']);


    Route::get('categories', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('create', [App\Http\Controllers\Admin\CategoryController::class, 'create']);

    Route::post('store', [App\Http\Controllers\Admin\CategoryController::class, 'store']);

    Route::get('products', [App\Http\Controllers\Admin\ProductController::class, 'index']);
    Route::get('create-product', [App\Http\Controllers\Admin\ProductController::class, 'create']);

    Route::post('store-product', [App\Http\Controllers\Admin\ProductController::class, 'store']);

    Route::get('category-edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('category-update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('category-delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);


});