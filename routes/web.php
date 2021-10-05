<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::resource('tables', App\Http\Controllers\tableController::class);

Route::resource('tableProducts', App\Http\Controllers\table_productsController::class);

Route::resource('tableServices', App\Http\Controllers\table_servicesController::class);

Route::resource('tablePricings', App\Http\Controllers\table_pricingController::class);

Route::resource('tableSales', App\Http\Controllers\table_salesController::class);