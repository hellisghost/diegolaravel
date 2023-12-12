<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\CrearController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditarController;
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

Route::get('/auth/login', [RegisterController::class, 'creacion']);

Route::get('/logout', [LogoutController::class, 'store']) ->name(name: 'logout');
Route::post('/logout', [LogoutController::class, 'store']) ->name(name: 'logout');

Route::get('/crear-cuenta', [RegisterController::class, 'index']) ->name(name: 'register');
Route::post('/crear-cuenta', [RegisterController::class, 'store']);

Route::get('/muro',[DashboardController::class,'index']) ->name ('dashboard.index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/crear-cuenta', [RegisterController::class, 'index']) ->name(name: 'register');
Route::post('/crear-cuenta', [RegisterController::class, 'store']);

Route::get('/dashboard', [EmpleadosController::class, 'index']) ->name(name: 'dashboard');
Route::post('/dashboard', [EmpleadosController::class, 'store']);

Route::get('/crear', [CrearController::class, 'index'])->name('crear');
Route::post('/crear', [EmpleadosController::class, 'store'])->name('empleados.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/editar/{id}', [EditarController::class, 'index'])->name('editar.index');
Route::post('/editar/{id}', [EmpleadosController::class, 'edit'])->name('editar.edit');

Route::get('/eliminar/{id}', [EmpleadosController::class, 'delete'])->name('delete');