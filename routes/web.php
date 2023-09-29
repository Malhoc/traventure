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

Auth::routes();

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/about-us', [App\Http\Controllers\StaticPagesController::class, 'aboutUs'])->name('about-us');
Route::controller(App\Http\Controllers\ContactUsController::class)->prefix('contact-us')->name('contact-us.')->group(function () {
    Route::get('/', 'create')->name('create');
    Route::post('/', 'store')->name('store');
});

//tour
Route::controller(App\Http\Controllers\TourController::class)->prefix('tours')->name('tours.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
    Route::get('/{tour2}', 'show')->name('show');
    Route::get('/{tour2}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{tour2:id}', 'destroy')->name('destroy');
});

//blog
Route::controller(App\Http\Controllers\BlogController::class)->prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
    Route::get('/{tour}', 'show')->name('show');
    Route::get('/{tour}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{tour:id}', 'destroy')->name('destroy');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//booking
Route::controller(App\Http\Controllers\BookingController::class)->prefix('booking')->name('booking.')->group(function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
}); //booking
Route::controller(App\Http\Controllers\BookingController::class)->prefix('booking')->name('booking.')->group(function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
});



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'show'])->name('login');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


        // user
        Route::controller(App\Http\Controllers\Admin\UserController::class)->prefix('users')->name('user.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{user}', 'show')->name('show');
            Route::get('/{user}/edit', 'edit')->name('edit');
            Route::put('/{user}', 'update')->name('update');
            Route::delete('/{user:id}', 'destroy')->name('destroy');
        });

        // Blogs
        Route::prefix('blogs')->name('blogs.')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('index');
            Route::get('/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('store');
            Route::get('/{blog}', [App\Http\Controllers\Admin\BlogController::class, 'show'])->name('show');
            Route::get('/{blog}/edit', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('edit');
            Route::put('/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('update');
            Route::delete('/{blog:id}', [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('destroy');
        });

        // Tours
        Route::prefix('tours')->name('tours.')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\TourController::class, 'index'])->name('index');
            Route::get('/create', [App\Http\Controllers\Admin\TourController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\TourController::class, 'store'])->name('store');
            Route::get('/{tour}', [App\Http\Controllers\Admin\TourController::class, 'show'])->name('show');
            Route::get('/{tour}/edit', [App\Http\Controllers\Admin\TourController::class, 'edit'])->name('edit');
            Route::put('/{id}', [App\Http\Controllers\Admin\TourController::class, 'update'])->name('update');
            Route::delete('/{tour:id}', [App\Http\Controllers\Admin\TourController::class, 'destroy'])->name('destroy');
        });
    });
});
