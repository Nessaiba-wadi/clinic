<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;

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

// For guests
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/specialties', function () {
    return view('specialties');
})->name('specialties');

Route::get('/doctors', function () {
    return view('doctors');
})->name('doctors');

Route::get('/create-account', function () {
    return view('create-account');
})->name('create-account');

// For authenticated users
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('user.dashboard');

    // Appointments
    Route::get('/appointments', function () {
        return view('user.appointments.index');
    })->name('user.appointments');

    Route::get('/appointments/upcoming', function () {
        return view('user.appointments.upcoming');
    })->name('user.appointments.upcoming');

    Route::get('/appointments/past', function () {
        return view('user.appointments.past');
    })->name('user.appointments.past');

    Route::get('/appointments/new', function () {
        return view('user.appointments.new');
    })->name('user.appointments.new');

    Route::get('/favorites', function () {
        return view('user.favorites');
    })->name('user.favorites');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('user.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('user.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('user.profile.destroy');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

require __DIR__.'/auth.php';
