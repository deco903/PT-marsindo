<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
//     return view('index');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/home/input', [HomeController::class, 'store'])->name('input');
Route::get('/edit/{id}', [HomeController::class, 'edit']);
Route::post('/update', [HomeController::class, 'update'])->name('update');
Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');
Route::get('/detail-gaji-manager', [HomeController::class, 'manager'])->name('mng');
Route::get('/detail-gaji-supervisor', [HomeController::class, 'supervisor'])->name('spv');
Route::get('/detail-gaji-staff', [HomeController::class, 'staff'])->name('stf');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerStore'])->name('registerPost');
Route::post('/login', [AuthController::class, 'loginStore'])->name('loginPost');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');







// Route::get('/home', [AdminController::class, 'index'])->name('home');
// Route::post('/home/input', [AdminController::class, 'store'])->name('input');
// Route::get('/edit/{id}', [AdminController::class, 'edit']);
// Route::post('/update/', [AdminController::class, 'update'])->name('update');
// Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');



