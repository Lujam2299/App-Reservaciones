<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

    Route::get('/user/configuration', [UserController::class, 'configuration'])->name('user.configuration');
    Route::get('/user/requests', [UserController::class, 'showSolicitudes'])->name('user.solicitudes');

    Route::get('/reservation/rafapina', [ReservationController::class, 'rafapina'])->name('reservation.rafapina');
    Route::get('/reservation/exdirectores', [ReservationController::class, 'exdirectores'])->name('reservation.directores');
    Route::get('/reservation/auditorio', [ReservationController::class, 'auditorio'])->name('reservation.auditorio');
});

require __DIR__.'/auth.php';
