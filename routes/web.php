<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::get('/showlogin',[HomeController::class,'showlogin'])->name('showlogin');
Route::post('/login',[HomeController::class,'login'])->name('login');
Route::get('/admin_index',[HomeController::class,'admin_index'])->name('admin_index');
Route::get('/hrindex',[HomeController::class,'hrindex'])->name('hrindex');