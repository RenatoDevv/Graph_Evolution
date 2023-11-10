<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SitioController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/about', [HomeController::class, 'about'], 'about')->name('about');
Route::get('/contact', [HomeController::class, 'contact'], 'contact')->name('contact');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'],)->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'users'],)->name('admin.users');
    Route::get('/admin/users/create', [AdminController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users/store', [AdminController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/show/{id}', [AdminController::class, 'show'])->name('admin.users.show');
    Route::get('/admin/users/edit/{id}', [AdminController::class, 'edit'])->name('admin.users.edit');
    Route::post('/admin/users/update/{id}', [AdminController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/delete/{id}', [AdminController::class, 'delete'])->name('admin.users.eliminar');

    // page routes
    Route::get('/admin/paginas', [SitioController::class, 'index'])->name('admin.pages');
    Route::get('/admin/pages/create', [SitioController::class, 'create'])->name('admin.pages.create');
    Route::post('/admin/pages/store', [SitioController::class, 'store'])->name('admin.pages.store');
    Route::get('/admin/pages/show/{id}', [SitioController::class, 'show'])->name('admin.pages.show');
    Route::get('/admin/pages/edit/{id}', [SitioController::class, 'edit'])->name('admin.pages.edit');
    Route::post('/admin/pages/update/{id}', [SitioController::class, 'update'])->name('admin.pages.update');
    Route::delete('/admin/pages/delete/{id}', [SitioController::class, 'delete'])->name('admin.pages.eliminar');

    //home page controller CRUD
    Route::get('/admin/Phome/index', [SitioController::class, 'homeIndex'])->name('admin.home.index');
    Route::get('/admin/Phome/create', [SitioController::class, 'homeCreate'])->name('admin.home.create');
    Route::post('/admin/Phome/store', [SitioController::class, 'homeStore'])->name('admin.home.store');
    // Route::get('/admin/Phome/show', [AdminController::class, 'pageshow'])->name('admin.home.show');
    Route::get('/admin/Phome/edit/{id}', [SitioController::class, 'homeEdit'])->name('admin.home.edit');
    Route::post('/admin/Phome/update/{id}', [SitioController::class, 'homeUpdate'])->name('admin.home.update');
    Route::delete('/admin/Phome/delete/{id}', [SitioController::class, 'homeDelete'])->name('admin.home.delete');

    // Route::get('/admin/Phome/profile', [PageController::class, 'profile'])->name('admin.profile');

});

