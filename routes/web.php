<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
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

// Route::get('/user_dashboard', function () {
//     return view('user_dashboard');
// });
Route::get('/logados', function () {
    return view('logados');
});


Route::get('/main', function () {
    return view('main');
});

Route::get('/mi_perfil', function () {
    return view('mi_perfil');
});


Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Route::get('/', [AuthController::class, 'index'])->name('home');
Route::post('/login', [AuthController::class, 'login'])->name('login'); // Ruta para el inicio de sesión
Route::get('/logados', [AuthController::class, 'logados'])->name('logados'); // Ruta para la página después de iniciar sesión

// Rutas para el cambio de contraseña
Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password'); 
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');

// Ruta para mostrar la vista principal (main), es para que la variable $user funcione
Route::get('/main', [AuthController::class, 'main'])->name('main')->middleware('auth');
