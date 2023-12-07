<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
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
    return view('layauts/app');
});

Route::get('/register', [RegisterController::class, 'crear']);

Route::get('/auth/login', [RegisterController::class, 'creacion']);



Route::get('/crear-cuenta', [RegisterController::class, 'index']) ->name(name: 'register');
Route::post('/crear-cuenta', [RegisterController::class, 'store']);



Route::get('/muro',[PostController::class,'index']) ->name ('post.index');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'store']) ->name(name: 'logout');
Route::post('/logout', [LogoutController::class, 'store']) ->name(name: 'logout');