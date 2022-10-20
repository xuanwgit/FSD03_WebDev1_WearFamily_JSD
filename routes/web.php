<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShoppingSessionController;
use App\Http\Controllers\CheckoutController;
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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/category/{category}', [FilterController::class, 'index']);
Route::get('/getSetsByFilter', [FilterController::class, 'getSetsByFilter']);


Route::get('/ensembles/{slug}', [ProductController::class, 'index']);
Route::get('/addToCart', [ShoppingSessionController::class, 'addToShoppingCart']);

Route::get('/cart', [CartController::class, 'index']);
Route::get('/delete/{id}', [CartController::class, 'delete']);
Route::get('/addToOrderItems', [CartController::class, 'addItemToOrderItems']);
Route::get('/updateCart', [CartController::class, 'updateCart']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/my-orders',[UserController::class,'index']);

Route::get('/view-order/{id}',[UserController::class,'view']);

Route::get('/checkout',[CheckoutController::class, 'index']);
Route::get('/updateOrderPayment', [CheckoutController::class, 'updateOrderPayment']);
Route::get('/getOrderPaymentID', [CheckoutController::class, 'getIdFromOrderPayment']);
Route::get('/newOrderPaymentID', [CheckoutController::class, 'newIdFromOrderPayment']);
Route::get('/getData', [CheckoutController::class, 'getDataInfo']);

Route::get('/confirmation', function () {
    return view('confirmation');
});