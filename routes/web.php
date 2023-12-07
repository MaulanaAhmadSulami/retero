<?php

use App\Http\Controllers\AuthController;
use App\HTTP\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

//use group routing later
Route::get('/adminMenu', function(){
    return view('adminMenu');
})->name('auth.adminHome')->middleware('is_admin');



// Route::get('/morereview', function(){
//     return view('homepage.morereview');
// })->name('morereview');

Route::get('/users', function(){
    return view('homepage.profile');
})->name('users');

Route::get('/profile', [UserController::class, 'edit'])->name('user.edit');
Route::post('/profile', [UserController::class, 'updateUser'])->name('user.update');
//ACTION ROUTES BELOW



//RESOURCES
Route::get('/', [ProductController::class, 'index'])->name('homepage.dashboard');
Route::get('/productDetail/{id}', [ProductController::class, 'showProduct'])->name('homepage.productDetail');


Route::get('/morereview', [ProductController::class, 'moreReview'])->name('homepage.morereview');
Route::get('/random-product/{categoryId}', [ProductController::class, 'randomProduct'])->name('randomProduct');


Route::get('/edit', function(){
    return view('homepage.profileEdit');
})->name('edit');

