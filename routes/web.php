<?php

use App\Http\Controllers\ReviewController;
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


// Route::get('/', function(){
//     return view('homepage.dashboard');
// });

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/app', function() {
    return view('form.app');
})->name('app');

Route::get('/register', function() {
    return view('form.register');
})->name('register');


Route::get('/login', function(){
    return view('form.login');
})->name('login');







//ACTION ROUTES BELOW



//RESOURCES
// Route::get('dashboard', [ReviewController::class, 'index']);
// Route::resource('reviews', ReviewController::class);
Route::get('/', [ReviewController::class, 'index'])->name('dashboard');