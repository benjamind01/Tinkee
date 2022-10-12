<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StatisticsController;

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
    return view('landingPage');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/add', [DashboardController::class, 'add'])->middleware(['auth', 'verified'])->name('dashboard.add');
Route::get('/dashboard/modify/{id}', [DashboardController::class, 'modify'])->middleware(['auth', 'verified'])->name('dashboard.modify');

Route::get('/statistics', [StatisticsController::class, 'index'])->middleware(['auth', 'verified'])->name('statistics.index');

Route::get('/settings', [SettingsController::class, 'index'])->middleware(['auth', 'verified'])->name('settings.index');
Route::post('/settings/modify', [SettingsController::class, 'modify'])->middleware(['auth', 'verified'])->name('settings.modify');

Route::post('/links/store', [LinkController::class, 'store'])->middleware(['auth', 'verified']);
Route::post('/links/modify/{id}', [LinkController::class, 'modify'])->middleware(['auth', 'verified']);
Route::post('/links/delete/{id}', [LinkController::class, 'delete'])->middleware(['auth', 'verified']);

Route::get('/profile/{name}', [UserController::class, 'index'])->name('user.index');

require __DIR__.'/auth.php';
