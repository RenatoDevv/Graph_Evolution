<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\admin\AdminController;
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



  Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/services', 'services')->name('services');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});


Route::controller(AdminController::class)->group(function () {
  Route::get('/admin', 'dashboard')->name('admin.dashboard');
  Route::get('/admin/pages', 'pages')->name('admin.pages');
  Route::get('/admin/users', 'users')->name('admin.users');
  Route::get('/admin/profile', 'profile')->name('admin.profile');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
