<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\VehiculeController;
use App\Models\Admninistration;
use App\Models\Chauffeur;
use App\Models\Reservation;
use App\Models\Trajet;
use App\Models\Vehicule;
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

Route::get('/',[homeController::class, 'index'])->name('home');
Route::resource('reservations', ReservationController::class);
Route::resource('vehicules', VehiculeController::class);
Route::resource('chauffeurs', ChauffeurController::class);
Route::resource('trajets', TrajetController::class);
Route::resource('administrations', AdministrationController::class);
