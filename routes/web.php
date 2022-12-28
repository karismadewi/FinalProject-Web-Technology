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
Route::get('/booking', [HomeController::class, 'booking'])->name('booking')->middleware(['auth','verified','checkRole:admin,user']);
Route::get('/history', [HomeController::class, 'history'])->name('history')->middleware(['auth','verified','checkRole:admin,user']);
Route::get('/review', [HomeController::class, 'review'])->name('review')->middleware(['auth','verified','checkRole:admin,user']);

Route::get('/tour_guide', [AdminController::class, 'index'])->name('index')->middleware('auth','verified','checkRole:admin');
Route::get('/create', [AdminController::class, 'create'])->name('create')->middleware('auth','verified','checkRole:admin');
Route::post('/store', [AdminController::class, 'store'])->name('admin.store')->middleware('auth','verified','checkRole:admin');
Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit')->middleware('auth','verified','checkRole:admin');
Route::put('/tour_guide/{id}', [AdminController::class, 'update'])->name('admin.update')->middleware('auth','verified','checkRole:admin');
Route::delete('/tour_guide/{id}', [AdminController::class, 'destroy'])->name('admin.destroy')->middleware('auth','verified','checkRole:admin');

Route::get('/destination', [AdminController::class, 'dest'])->name('dest')->middleware('auth','verified','checkRole:admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('admin', function () { return view('tour_guide'); })->middleware('checkRole:admin');
Route::get('user', function () { return view('home'); })->middleware(['checkRole:admin,user']);

require __DIR__ . '/auth.php';
