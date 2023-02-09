<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlateController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', [PlateController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [PlateController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard/add', [ProfileController::class, 'home'])->name('store');
Route::get('/home/add', [PlateController::class, 'store'])->name('store');
// Route::get('/admin', [PlateController::class, 'index'])->name('home');
Route::get('/add', [PlateController::class, 'home'])->name('add');

require __DIR__.'/auth.php';
