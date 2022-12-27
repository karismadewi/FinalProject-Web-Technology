<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\TourGuideController;
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
// to be deleted after implementation
Route::get('/profileui', [HomeController::class, 'profile'])->name('profileui'); 
Route::get('/booking', [HomeController::class, 'booking'])->name('booking')->middleware(['auth', 'verified', 'checkRole:admin,user']);
Route::get('/history', [HomeController::class, 'history'])->name('history')->middleware(['auth', 'verified', 'checkRole:admin,user']);

Route::get('/admin/tour_guide', [TourGuideController::class, 'index'])->name('tour_guide.index')->middleware('auth', 'verified', 'checkRole:admin');
Route::get('/admin/tour_guide/create', [TourGuideController::class, 'create'])->name('tour_guide.create');
Route::post('/admin/tour_guide/store', [TourGuideController::class, 'store'])->name('tour_guide.store');
Route::get('/admin/tour_guide/{id}/edit', [TourGuideController::class, 'edit'])->name('tour_guide.edit');
Route::put('/admin/tour_guide/{id}', [TourGuideController::class, 'update'])->name('tour_guide.update');
Route::delete('/admin/tour_guide/{id}', [TourGuideController::class, 'destroy'])->name('tour_guide.destroy');

Route::resource('admin/destinations', DestinationController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('admin', function () {
    return view('tour_guide');
})->middleware('checkRole:admin');
Route::get('user', function () {
    return view('home');
})->middleware(['checkRole:admin,user']);

require __DIR__ . '/auth.php';
