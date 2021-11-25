<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LogoutController;

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
Route::get('/dashbord',[DashbordController::class,'index'])->name('dashbord');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::post('/posts',[PostController::class,'store']);
// Route::get('/','App\Http\Controllers\pagesController@index');
// Route::get('/services','App\Http\Controllers\pagesController@services');
// Route::get('/about','App\Http\Controllers\pagesController@about');

// Route::resource('pos','App\Http\Controllers\posController');
Route::post('logout/',[LogoutController::class,'store'])->name('logout');
