<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsMember;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',         [AuthenController::class, 'ShowFormLogin'])->name('login');

Route::post('login',        [AuthenController::class, 'handlelogin']);

Route::get('register',      [AuthenController::class, 'ShowFormRegister'])->name('register');

Route::post('register',     [AuthenController::class, 'handleRegister']);

Route::post('logout',       [AuthenController::class, 'logout'])->name('logout');


Route::get('/admin',        [AdminController::class, 'index'])->name('admin')->middleware(['auth', IsAdmin::class]);
Route::get('/home',         [HomeController::class, 'index'])->name('home')->middleware(['auth', IsMember::class]);

Route::get('/show/{id}',    [HomeController::class, 'show'])->name('clients.show');
Route::get('/social',       [HomeController::class, 'social'])->name('social');
Route::post('/search',      [HomeController::class, 'search'])->name('search');


Route::resource('category', CategoryController::class);
Route::resource('product',  ProductController::class);
Route::resource('user',     UserController::class);
