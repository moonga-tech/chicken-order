<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\OrderChickenController;

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
Route::get('/orders',[OrderChickenController::class, "orders"])->name('orders')->middleware("auth");
Route::delete('/orders/{id}',[OrderChickenController::class, "completeOrder"]);
Route::get('/order/chicken',[OrderChickenController::class, "order"])->name('order');
Route::get('/order/chicken/{id}',[OrderChickenController::class, "orderEdit"]);
Route::put('/order/chicken/{id}',[OrderChickenController::class, "orderUpdate"]);
Route::post('/order/chicken',[OrderChickenController::class, "make_order"]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
