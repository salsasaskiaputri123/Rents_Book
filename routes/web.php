<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentsbooksController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route FE
Route::get('/main', function () {
    return view('layouts.main');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
// Route::get('/user', function () {
//     return view('dashboard.user');
// });

Route::get('/users',[AdminController::class,'indexUsers'])->name('users')->middleware('auth')->middleware('admin');




Route::get('/category', function () {
    return view('dashboard.category');
});
Route::get('/rent-log', function () {
    return view('dashboard.rent-log');
});

//Message//
Route::post('/pesan', [PesanController::class,'strorePesan'])->name('store');

//Delete and Edit//
Route::get('/delete/{id}', [AdminController::class,'deleteUser'])->name('deleteUser');
Route::get('/editUsers/{id}', [AdminController::class,'editUser'])->name('editUser');
Route::post('/edit/update/{id}', [AdminController::class,'updateUser'])->name('update');

//Register//
Route::post('/register/input', [AuthController::class,'registerAccount'])->name('storeregist');
Route::get('/index-register', [AuthController::class,'indexRegister'])->name('register');

//Login//
Route::post('/login/auth', [AuthController::class,'auth'])->name('login-auth');
Route::get('/index-login', [AuthController::class,'indexLogin'])->name('login');

//Routw User
Route::get('/dashboard-user',[UserController::class,'index'])->middleware('auth')->middleware('user');

Route::get('/book', [RentsbooksController::class,'book'])->name('book');
Route::post('/add', [RentsbooksController::class,'add'])->name('add');

//delete
Route::get('/logout', [AdminController::class,'logout'])->name('logout');





