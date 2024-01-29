<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\HomeDashController;
use App\Http\Controllers\Admin\LocationsController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class , 'index'])->name('home');
Route::post('/form', [FormController::class , 'form'])->name('form');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switchLang');

Route::group(['middleware' => 'guest' ] , function() {
    //auth
    Route::get('login', [LoginController::class , 'index'] )->name('home.login.index');
    Route::post('login/submit', [LoginController::class , 'login'] )->name('home.login.form');
});
//logout
Route::get('admin/logout', [LoginController::class, 'logout'])->name('dashboard.logout')->middleware('auth');

Route::group([ 'prefix' => 'admin' , 'middleware' => 'admin'] , function () {
    Route::get('dashboard', [HomeDashController::class, 'index'])->name('dashboard.home');

    //profile
    Route::get('profile', [ProfileController::class, 'index'])->name('dashboard.profile.index');
    Route::post('profile/update', [ProfileController::class, 'update'])->name('dashboard.profile.update');
    Route::get('password', [ProfileController::class, 'password'])->name('dashboard.password.index');
    Route::post('password/change', [ProfileController::class, 'update_password'])->name('dashboard.password.update');

    //users
    Route::get('users', [UserController::class, 'index'])->name('dashboard.users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('dashboard.users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('dashboard.users.store');
    Route::get('users/{obj}/edit', [UserController::class, 'edit'])->name('dashboard.users.edit');
    Route::post('users/{obj}/update', [UserController::class, 'update'])->name('dashboard.users.update');
    Route::delete('users/{obj}/delete', [UserController::class, 'destroy'])->name('dashboard.users.destroy');

    //settings
    Route::get('/settings', [SettingController::class, 'index'])->name('dashboard.settings.index');
    Route::post('/settings', [SettingController::class, 'update'])->name('dashboard.settings.update');


    //reservations
    Route::get('reservations/registered', [ReservationController::class, 'registered'])->name('dashboard.reservations_registered.index');
    Route::get('reservations/no_registered', [ReservationController::class, 'noRegistered'])->name('dashboard.reservations__no_registered.index');
    Route::delete('reservations/{obj}/delete', [ReservationController::class, 'destroy'])->name('dashboard.reservations.destroy');

    // Locations
    Route::get('locations', [LocationsController::class, 'index'])->name('dashboard.locations.index');
    Route::get('locations/create', [LocationsController::class, 'create'])->name('dashboard.locations.create');
    Route::post('locations/store', [LocationsController::class, 'store'])->name('dashboard.locations.store');
    Route::get('locations/{obj}/edit', [LocationsController::class, 'edit'])->name('dashboard.locations.edit');
    Route::post('locations/{obj}/update', [LocationsController::class, 'update'])->name('dashboard.locations.update');
    Route::delete('locations/{obj}/delete', [LocationsController::class, 'destroy'])->name('dashboard.locations.destroy');

});
