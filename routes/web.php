<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DoctorController;

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


Route::get('/doctors', 'App\Http\Controllers\DoctorController@index')->name('doctors');

Route::get('/specialties', 'App\Http\Controllers\SpecialitiesController@index')->name('specialties');

Route::get('/specialties/{id}', 'App\Http\Controllers\DoctorController@showBySpecialty')->name('doctors.specialty');

Route::get('/doctors/{doctor}', 'App\Http\Controllers\DoctorController@show')->name('doctors.show');


Route::get('/create-account', function () {
    return view('create-account');
})->name('create-account');

Route::post('/doctors/{doctor}/favorite', 'App\Http\Controllers\DoctorController@toggleFavorite')->name('doctors.favorite');


Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/signup', [\App\Http\Controllers\RegistrationController::class, 'register'])->name('register-patient');


// For authenticated users
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // Appointments

    Route::get('/appointments', 'App\Http\Controllers\SpecialitiesController@GetSpeciality')->name('user.appointments');

    Route::get('/specialties/{id}', 'App\Http\Controllers\DoctorController@getDoctorsBySpecialty')->name('doctors.specialty');

    Route::post('/book_appointment', 'App\Http\Controllers\AppointmentController@handleAppointment')->name('book_appointment');

    Route::get('/get-doctors/{specialty}', 'App\Http\Controllers\DoctorController@getDoctorsBySpecialty')->name('get.doctors');

    Route::get('/appointments-listes', 'App\Http\Controllers\AppointmentController@GetList')->name('user.appointments.list');


    Route::get('/appointments-upcoming', 'App\Http\Controllers\AppointmentController@GetUpcomingAppointments')->name('user.appointments.upcoming');

    Route::get('/appointments-passed', 'App\Http\Controllers\AppointmentController@GetPassedAppointments')->name('user.appointments.passed');

    Route::post('/update-profile', 'App\Http\Controllers\ProfileController@updateProfile')->name('update-profile');

    Route::get('/profile', function () {
        return view('user.profile');
    })->name('profile');

    Route::get('/favorites', 'App\Http\Controllers\FavoriteController@list')->name('favorites');

    Route::delete('/unfavorite-doctor/{doctor}', 'App\Http\Controllers\FavoriteController@unfavorite')->name('unfavorite.doctor');


    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

require __DIR__ . '/auth.php';
