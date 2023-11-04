<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return inertia('Homepage');
});

Route::get('/dogadjaji', [App\Http\Controllers\EventController::class, 'index'])->name('events.index');
Route::get('/dogadjaji/{event}', [App\Http\Controllers\EventController::class, 'show'])->name('events.show');

Route::get('/znamenitosti', [App\Http\Controllers\PlaceController::class, 'index'])->name('places.index');
Route::get('/znamenitosti/{place}', [App\Http\Controllers\PlaceController::class, 'show'])->name('places.show');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
