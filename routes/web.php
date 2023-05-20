<?php

use App\Http\Controllers\AdminController;
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
        return view('index');
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

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/specialities', [AdminController::class, 'specialities'])->name('admin.specialities');
    Route::get('/admin/doctors', [AdminController::class, 'doctors'])->name('admin.doctors');
    Route::get('/admin/patients', [AdminController::class, 'patients'])->name('admin.patients');
    Route::get('/admin/appointments', [AdminController::class, 'appointments'])->name('admin.appointments');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/specialities/new', [AdminController::class, 'showAddSpecialtyForm'])->name('speciality.new_form');
    Route::post('/admin/specialities/', [AdminController::class, 'addspeciality'])->name('speciality.new');
    Route::get('/admin/specialities/{speciality}/edit', [App\Http\Controllers\AdminController::class, 'editSpeciality'])->name('specialities.edit');
    Route::put('/admin/specialities/{speciality}', [App\Http\Controllers\AdminController::class, 'updateSpeciality'])->name('specialities.update');
    Route::delete('/admin/specialities/{speciality}', [App\Http\Controllers\AdminController::class, 'deleteSpeciality'])->name('specialities.destroy');
    Route::post('/admin/appointments/{appointment}/accept', [App\Http\Controllers\AdminController::class, 'acceptAppointment'])->name('appointments.accept');
    Route::post('/admin/appointments/{appointment}/decline', [App\Http\Controllers\AdminController::class, 'declineAppointment'])->name('appointments.decline');
    Route::post('/admin/appointments/{appointment}/cancel', [App\Http\Controllers\AdminController::class, 'cancelAppointment'])->name('appointments.cancel');
    Route::get('/admin/doctors/add', [AdminController::class, 'addDoctor'])->name('doctors.new');
    Route::post('/doctors', [AdminController::class, 'store'])->name('doctors.store');
    Route::get('/admin/doctors/{doctor}/edit', [AdminController::class, 'editDoctor'])->name('doctors.edit');
    Route::put('/admin/doctors/{doctor}', [AdminController::class, 'updateDoctor'])->name('doctors.update');
    Route::delete('/admin/doctors/{doctor}', [AdminController::class, 'deleteDoctor'])->name('doctors.destroy');
    Route::delete('/admin/user/{user}', [AdminController::class, 'deleteUser'])->name('user.destroy');

});

require __DIR__ . '/auth.php';
