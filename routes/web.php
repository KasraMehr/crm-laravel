<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherController;

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
    return view('auth.login');
});

Route::resource("/teachers", teacherController::class);

Route::get('/create', function () {
    return view('teachers.index');
});

Route::get('/courses', [teacherController::class, 'courses'])->name('courses');

Route::get('/search', [teacherController::class, 'search'])->name('search');

Route::get('/register', function () {
    return view('auth.register');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
