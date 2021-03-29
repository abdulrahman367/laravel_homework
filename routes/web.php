<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[PostController::class,'all_post']
);
Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/addpost',[PostController::class,'add_post'])->name('add.post');
Route::post('/createpost', [PostController::class,'create_post'])->name('create.post');
// login controller
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'auth'])->name('login.auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/allpost', [PostController::class,'posts']);
Route::get('/post/{id}/delete',[PostController::class,'remove_post'])->name('delete.post');
