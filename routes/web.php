<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/tambahbunga', [AdminController::class, 'tambahbunga'])->name('tambahbunga');
Route::post('/insertbunga', [AdminController::class, 'insertbunga'])->name('insertbunga');
Route::get('/tampilbunga/{id}', [AdminController::class, 'tampilbunga'])->name('tampilbunga');
Route::post('/updatebunga/{id}', [AdminController::class, 'updatebunga'])->name('updatebunga');
Route::delete('/delete/{id}', [AdminController::class, 'delete']) ->name('deletebunga');

Route::get('/user', [AdminController::class, 'user'])->name('user');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');