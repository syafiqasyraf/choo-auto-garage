<?php

use App\Models\Pelanggan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DashboardPelangganController;

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
Route::view('/welcome','welcome', ['name' =>'Syafiq']);

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "name" => "Syafiq",
    ]);
});

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/inventori', function(){
    return view('inventori',[
        "title" => "Inventori",
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/pelanggan', DashboardPelangganController::class)->middleware('auth');
Route::resource('/dashboard/order', OrderController::class)->middleware('auth');
Route::resource('/dashboard/stok', StokController::class)->middleware('auth');
Route::resource('/dashboard/cash', CashController::class)->middleware('auth');

Route::resource('/dashboard/users', AdminController::class)->except('show')->middleware('admin');