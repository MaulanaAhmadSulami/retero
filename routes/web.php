<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\HTTP\Controllers\ProductController;
use App\Http\Controllers\SearchController;
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

/*
|--------------------------------------------------------------------------
|Auth Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/register', function() {
    return view('form.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');


Route::get('/login', function(){
    return view('form.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

//-------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------
/*
|--------------------------------------------------------------------------
|Admin Routes
|--------------------------------------------------------------------------
|
*/

//use group routing later
Route::middleware(['is_admin'])->group(function () {
    Route::get('/dashboard', function(){
        return view('adminMenu');
    })->name('auth.adminHome');

    Route::get('/create', [AdminController::class, 'getCategories'])->name('admin.create');
    Route::post('/create', [AdminController::class, 'createPost'])->name('admin.createPost');
});

//-------------------------------------------------------------------------------------------


//-------------------------------------------------------------------------------------------
/*
|--------------------------------------------------------------------------
|Profile Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/profile/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/profile/update', [UserController::class, 'updateUser'])->name('user.update');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/users/profile/{uuid}', [UserController::class, 'showProfile'])->name('users.profile');
Route::get('/guests/profile/{uuid}', [UserController::class, 'guestProfile'])->name('guests.profile');
//-------------------------------------------------------------------------------------------


//-------------------------------------------------------------------------------------------
/*
|--------------------------------------------------------------------------
|Footer Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/aboutUs', function(){
    return view ('homepage.aboutUs');
})->name('about');

Route::get('/contact', function(){
    return view('homepage.contactForm');
})->name('contact');


//-------------------------------------------------------------------------------------------



//ACTION ROUTES BELOW

//-------------------------------------------------------------------------------------------
/*
|--------------------------------------------------------------------------
|Resource Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', [ProductController::class, 'index'])->name('homepage.dashboard');
Route::get('/detail/{id}', [ProductController::class, 'showProduct'])->name('homepage.productDetail');


Route::get('/more', [ProductController::class, 'moreReview'])->name('homepage.morereview');
Route::get('/random-product/{categoryId}', [ProductController::class, 'randomProduct'])->name('randomProduct');

Route::get('/products/{category}', [ProductController::class, 'showProductByCategory'])->name('homepage.filteredProduct');

Route::get('/search', [SearchController::class, 'searchProduct'])->name('homepage.searchProduct');

Route::post('/products/{product}/comments', [CommentController::class, 'store'])->name('comment.store');
Route::patch('/comments/{comment}', [CommentController::class, 'update'])->name('comment.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');

//-------------------------------------------------------------------------------------------



