<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\ProgramController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('programs')->group(function () {
    Route::get('/', [ProgramController::class, 'index'])->name('programs.index');
    Route::get('/{program}', [ProgramController::class, 'show'])->name('programs.show');
});

Route::prefix('jobs')->group(function () {
    Route::get('/', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/advice', [JobController::class, 'showAdvice'])->name('jobs.advice');
    Route::get('/{job}', [JobController::class, 'show'])->name('jobs.show');
});
