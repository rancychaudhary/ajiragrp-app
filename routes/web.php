<?php

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ContactusController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\OptionsController;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\SettingController;
// use App\Http\Controllers\OptionsController;
// use App\Http\Controllers\ContactusController;
// use App\Http\Controllers\PagesController;
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


    Route::get('setting', [SettingController::class, 'edit'])->name('admin.setting.index');
    Route::post('setting', [SettingController::class, 'update'])->name('admin.setting.update');
});
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('blogs', BlogController::class);
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/admin.blogs/{blog}/edit', [BlogController::class, 'edit'])->name(name: 'admin.blogs.edit');
    Route::post('/admin/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
    // Route::delete('/admin.blog/{blog}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
    // Route::put('/admin.blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');

    Route::resource('project', ProjectController::class);
    Route::get('/admin/project', [ProjectController::class, 'index'])->name('admin.project.index');
    Route::get('/admin.project/{project}/edit', [ProjectController::class, 'edit'])->name(name: 'admin.project.edit');
    Route::post('/admin/project', [ProjectController::class, 'store'])->name('admin.project.store');
    // Route::delete('/admin.project/{project}', [ProjectController::class, 'destroy'])->name('admin.project.destroy');
    // Route::put('/admin.project/{project}', [ProjectController::class, 'update'])->name('admin.project.update');

    Route::resource('contactus', ContactusController::class);
    Route::get('/admin/contactus', [ContactusController::class, 'index'])->name('admin.contactus.index');
    Route::get('/admin.contactus/{contactus}/edit', [ContactusController::class, 'edit'])->name(name: 'admin.contactus.edit');
    Route::post('/admin/contactus', [ContactusController::class, 'store'])->name('admin.contactus.store');
    // Route::delete('/admin.contactus/{contactus}', [ContactusController::class, 'destroy'])->name('admin.contactus.destroy');
    // Route::put('/admin.contactus/{contactus}', [ContactusController::class, 'update'])->name('admin.contactus.update');

    Route::resource('pages', PagesController::class);
    Route::get('/admin/pages', [PagesController::class, 'index'])->name('admin.pages.index');
    Route::get('/admin.pages/{page}/edit', [PagesController::class, 'edit'])->name(name: 'admin.pages.edit');
    Route::post('/admin/pages', [PagesController::class, 'store'])->name('admin.pages.store');
    // Route::delete('/admin.pages/{page}', [PagesController::class, 'destroy'])->name('admin.pages.destroy');
    // Route::put('/admin.pages/{page}', [PagesController::class, 'update'])->name('admin.pages.update');

    Route::resource('gallery', GalleryController::class);
    Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('admin.gallery.index');
    Route::get('/admin.gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name(name: 'admin.gallery.edit');
    Route::post('/admin/gallery', [GalleryController::class, 'store'])->name('admin.gallery.store');
    // Route::delete('/admin.gallery/{gallery}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');
    // Route::put('/admin.gallery/{gallery}', [GalleryController::class, 'update'])->name('admin.gallery.update');

    Route::resource('options', OptionsController::class);
    Route::get('/admin/options', [OptionsController::class, 'index'])->name('admin.options.index');
    Route::get('/admin.options/{options}/edit', [OptionsController::class, 'edit'])->name(name: 'admin.options.edit');
        // Route::post('/admin/options', [OptionsController::class, 'store'])->name('admin.options.store');
        // Route::delete('/admin.options/{options}', [OptionsController::class, 'destroy'])->name('admin.options.destroy');
        // Route::put('/admin.options/{options}', [OptionsController::class, 'update'])->name('admin.options.update');

        // Route::resource('setting', SettingController::class);

        // Route::middleware('auth')->prefix('admin')->group(function () {
        //     Route::resource('project', ProjectController::class);
        });



        require __DIR__.'/auth.php';
require __DIR__ . '/frontend.php';

