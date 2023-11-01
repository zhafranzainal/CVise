<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::controller(App\Http\Controllers\CourseController::class)->group(function () {
    Route::get('/course/list', 'index')->name('career.list');
});

Route::controller(App\Http\Controllers\JobController::class)->group(function () {
    Route::get('/job/list', 'index')->name('job.list');
    Route::get('/job/description', 'desc')->name('job.desc');
    Route::get('/job/advice', 'advice')->name('job.advice');
});