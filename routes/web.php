<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\LoginController;

// Ruta para la página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Ruta para el panel de administración
Route::get('/admin', function () {
    return view('admin');
})->middleware('auth'); // Asegúrate de que el usuario esté autenticado

// Rutas de recurso para empleados
Route::resource('employees', EmployeeController::class);