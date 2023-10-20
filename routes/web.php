<?php

use App\Http\Controllers\AddProducts;
use App\Http\Controllers\checkout;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Models\orders;
use Illuminate\Routing\Controllers\Middleware;
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

Route::get('/',[AddProducts::class,'show'])->name('index');
Route::get('productdetails/{id}',[AddProducts::class,'productdetails'])->middleware(['auth','verified']);
Route::get('laptop',[AddProducts::class,'laptop']);
Route::get('pc',[AddProducts::class,'pc']);
Route::get('accessories',[AddProducts::class,'accessories']);
Route::post('updateproducts',[AddProducts::class,'update'])->middleware(['auth','admin']);
Route::post('delete',[AddProducts::class,'delete'])->middleware(['auth','admin']);
Route::view('/ca','CustomOrder')->middleware(['auth','verified']);
Route::get('/productlisting',[ProductController::class,'productlisting'])->middleware(['auth','admin']);
Route::get('/orderlisting',[checkout::class,'totalorders'])->middleware(['auth','admin']);
Route::post('/customordering',[checkout::class,'customOrders'])->middleware(['auth','verified']);
Route::get('/customorderlist',[checkout::class,'customorderlistings'])->middleware(['auth','admin']);
Route::get('/userlisting',[checkout::class,'userlisting']);
Route::get('/home',[HomeController::class,'index'])->middleware(['auth','verified'])->name('home');
Route::post('/add',[AddProducts::class,'add'])->middleware('auth','admin');
Route::get('/shopping-cart', [ProductController::class, 'productCart'])->middleware(['auth','verified'])->name('shopping.cart');
Route::get('/product/{id}', [ProductController::class, 'addProducttoCart'])->middleware(['auth','verified'])->name('addProduct.to.cart');
Route::patch('/update-shopping-cart', [ProductController::class, 'updateCart'])->middleware(['auth','verified'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [ProductController::class, 'deleteProduct'])->middleware(['auth','verified'])->name('delete.cart.product');
Route::post('checkout',[checkout::class,'checkout'])->middleware(['auth','verified']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::view('addproduct','admin/addproduct')->middleware(['auth','admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
