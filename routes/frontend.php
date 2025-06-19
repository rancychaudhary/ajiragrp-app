<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::name('frontend.')->group(function () {

    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get(uri: '/options', action: [FrontendController::class, 'options'])->name('options');
    Route::get('/projects', action: [FrontendController::class, 'projects'])->name('projects');
    Route::get('/gallery', action: [FrontendController::class, 'gallery'])->name('gallery');
    Route::get('/blog', action: [FrontendController::class, 'blog'])->name('blog');
    Route::get('/contactus', action: [FrontendController::class, 'contactus'])->name('contactus');
    Route::get('/aboutus', action: [FrontendController::class, 'aboutus'])->name('aboutus');
    Route::get('/privacypolicy', action: [FrontendController::class, 'privacypolicy'])->name('privacypolicy');
    Route::get('/termsandconditions', action: [FrontendController::class, 'termsandconditions'])->name('termsandconditions');
    Route::get('/landareaconverter', action: [FrontendController::class, 'landareaconverter'])->name('landareaconverter');
    Route::get('/homecostcalculator', action: [FrontendController::class, 'homecostcalculator'])->name('homecostcalculator');
});


// Route::get( '/', [FrontendController::class, 'index'])->name('home');
// Route::get( uri: '/options', action: [FrontendController::class, 'options'])->name('options');
// Route::get('/projects', action: [FrontendController::class, 'projects'])->name('projects');
// Route::get('/gallery', action: [FrontendController::class, 'gallery'])->name('gallery');
// Route::get('/blog', action: [FrontendController::class, 'blog'])->name('blog');
// Route::get('/contactus', action: [FrontendController::class, 'contactus'])->name('contactus');

