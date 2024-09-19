<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\CartController;
// use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\Admin\OrderController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware', 'web'], function(){
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::delete('/cart/{cartId}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('/cart/{id}/{gty}/edit', [CartController::class, 'edit'])->name('cart.edit');
    // Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/map', [MapController::class, 'index'])->name('map');
    Route::get('/map/create', [MapController::class, 'create'])->name('map.create');
    // Route::get('/order', [OrderController::class, 'store'])->name('order.store');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
Route::get('/user/setup-intent', [UserController::class, 'getSetupIntent']);
Route::get('/user/payment-methods', [UserController::class, 'getPaymentMethods']);


// Route::prefix('admin')->group(['middleware' => ['role:admin']], function () {
//    Route::get('/', [App\Http\Controllers\admin\HomeController::class, 'index']); //admin
// //    Route::get('/test',); //admin/test
//     });

// Route::prefix('admin')->group(['middleware' => ['role:admin']], function () {
   
// });

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin'); // /admin
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');

});