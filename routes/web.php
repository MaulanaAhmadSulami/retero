<?php

use App\Http\Controllers\AuthController;
use App\HTTP\Controllers\ProductController;
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


Route::get('/app', function() {
    return view('form.app');
})->name('app');

Route::get('/register', function() {
    return view('form.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');


Route::get('/login', function(){
    return view('form.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');


//use group routing later
Route::get('/adminMenu', function(){
    return view('adminMenu');
})->name('auth.adminHome')->middleware('is_admin');


Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/morereview', function(){
    return view('homepage.morereview');
})->name('morereview');

Route::get('/profile', function(){
    return view('homepage.profile');
})->name('profile');

//ACTION ROUTES BELOW



//RESOURCES
Route::get('/', [ProductController::class, 'index'])->name('homepage.dashboard');
Route::get('/productDetail/{id}', [ProductController::class, 'showProduct'])->name('homepage.productDetail');
