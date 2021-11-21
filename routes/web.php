<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;
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
Route::resource('/menu', MenuController::class);
Route::resource('/panier', PanierController::class);
Route::resource('/profil', ProfilController::class);
Route::resource('/products', ProductController::class);
Route::resource('/commande', CommandeController::class);
Route::get('/home', function () {
    return view('home');
});
Route::get('/products.view', function () {
    return view('products.view');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


