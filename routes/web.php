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
Route::get('/catalog',[App\Http\Controllers\productController::class, 'index'])->name('catalog');

//Auth
Route::name('auth.')->group(function () {
    Route::get('/register',[\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
    Route::post('/register',[\App\Http\Controllers\Auth\RegisterController::class, 'register']);
    Route::get('/sugnin',[\App\Http\Controllers\Auth\SugnInControllerer::class, 'index'])->name('sugnin');
    Route::post('/sugnin',[\App\Http\Controllers\Auth\SugnInControllerer::class, 'sugnin']);
});

//account
Route::get('account',[\App\Http\Controllers\accountController::class, 'index'])
    ->middleware('auth')
    ->name('account');
Route::get('account/logout',[\App\Http\Controllers\accountController::class, 'logout'])
    ->middleware('auth')
    ->name('account.logout');

//adminPanel
Route::get('/admin',function (){
    $orders = \App\Models\orders::all();
    return view('pages.adminpanel',compact('orders'));
})->middleware('checkisAdmin')->name('admin');
Route::post('/admin/addpizza',[App\Http\Controllers\productController::class, 'addProduct'])
    ->middleware('checkisAdmin')
    ->name('addpizza');

//order
Route::post('/addorder',[\App\Http\Controllers\orderController::class,'index'])
    ->middleware('auth')
    ->name('addorder');
Route::post('/removeorder',[\App\Http\Controllers\orderController::class,'removeorder'])
    ->middleware('checkisAdmin')
    ->name('removeorder');
