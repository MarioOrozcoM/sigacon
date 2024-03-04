<?php

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/inicio_sesion', function () {
    return view('inicio_sesion');
});

Route::get('/user_dashboard', function () {
    return view('user_dashboard');
})->middleware('auth');


Route::get('/main', function () {
    return view('main');
});

Route::get('/mi_perfil', function () {
    return view('mi_perfil');
});

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


use App\Http\Controllers\LogoutController;

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


