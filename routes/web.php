<?php

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

Route::get('/',[\App\Http\Controllers\FrontendController::class,'index'])->name('frontend.index');
Route::get('/menu',[\App\Http\Controllers\FrontendController::class,'menu'])->name('frontend.menu');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard',[\App\Http\Controllers\DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('orders',[\App\Http\Controllers\DashboardController::class,'orders'])->name('admin.orders');
    Route::get('products',[\App\Http\Controllers\DashboardController::class,'products'])->name('admin.products');
    Route::get('users',[\App\Http\Controllers\DashboardController::class,'users'])->name('admin.users');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
