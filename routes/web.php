<?php

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\PagesController as AdminPagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/testlogin', function () {
    return view('auth.register');
});
Route::get('/testadmin', function () {
    return view('layouts.admin.master');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('blogs', BlogController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('contactus', ProjectController::class);
    Route::resource('pages', AdminPagesController::class);
});
// Route::middleware('auth')->prefix('admin')->group(function () {
//     Route::resource('project', ProjectController::class);
// });


require __DIR__.'/auth.php';
require __DIR__ . '/frontend.php';
