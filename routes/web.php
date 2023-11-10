<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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

// route::get('/hehe', [Controller::class, 'index']);
Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
 
    // ...
});

Route::prefix('frontend')->name('frontend.')->group(function () {
    Route::get('/index',[FrontendController::class, 'showCategory'])->name('showCategory');

    Route::get('/cart',[FrontendController::class, 'cart'])->name('cart');

    Route::get('/product',[FrontendController::class, 'showProduct'])->name('showProduct');

    Route::get('/product_detail',[FrontendController::class, 'showProductDetail'])->name('showProductDetail');

    Route::post('/product_detail',[CartController::class, 'addCart'])->name('addCart');

    Route::post('/don_hang',[CartController::class, 'addDonHang'])->name('addDonHang');

    // Route::get('/show_cart',[CartController::class, 'showCart'])->name('showCart');

    


});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('index-admin',[AdminController::class, 'indexAdmin'])->name('indexAdmin');

    Route::post('index-admin',[AdminController::class, 'addProduct'])->name('addProduct');

    Route::get('product-admin',[AdminController::class, 'showProduct'])->name('showProduct');

    Route::get('edit-admin',[AdminController::class, 'editProduct'])->name('editProduct');

    Route::post('edit-admin',[AdminController::class, 'postProduct'])->name('postProduct');

    Route::get('delete-admin',[AdminController::class, 'deleteProduct'])->name('deleteProduct');


});