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

//Home
Route::get('/', function () {
    return view('pages.home');
})->name('home');

//catalog
use App\Http\Controllers\productController;
Route::get('/catalog',[productController::class, 'index'])->name('catalog');

//Auth
Route::name('auth.')->group(function () {
    Route::get('/register',[\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
    Route::post('/register',[\App\Http\Controllers\Auth\RegisterController::class, 'register']);
    Route::get('/sugnin',[\App\Http\Controllers\Auth\SugnInControllerer::class, 'index'])->name('sugnin');
    Route::post('/sugnin',[\App\Http\Controllers\Auth\SugnInControllerer::class, 'sugnin']);
});
