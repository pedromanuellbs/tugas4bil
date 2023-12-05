<?php

use App\Http\Controllers\UsersController;
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

Route::get('/', [UsersController::class, 'index'])->middleware('auth');

Route::get('/login', [UsersController::class, 'login_page'])->name('login')->middleware('guest');
Route::post('/login', [UsersController::class,'login']);