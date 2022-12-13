<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/history', [HomeController::class, 'history'])->name('history');

Route::get('/tour_guide', [AdminController::class, 'index'])->name('index');
Route::get('/create', [AdminController::class, 'create'])->name('create');
Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/tour_guide/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/tour_guide/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('/destination', [AdminController::class, 'dest'])->name('dest');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
