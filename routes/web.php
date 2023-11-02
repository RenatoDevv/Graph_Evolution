<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\PageController;
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
    Route::get('/admin/paginas', [PageController::class, 'index'])->name('admin.pages');
    Route::get('/admin/pages/create', [PageController::class, 'create'])->name('admin.pages.create');
    Route::post('/admin/pages/store', [PageController::class, 'store'])->name('admin.pages.store');
    Route::get('/admin/pages/show/{id}', [PageController::class, 'show'])->name('admin.pages.show');
    Route::get('/admin/pages/edit/{id}', [PageController::class, 'edit'])->name('admin.pages.edit');
    Route::post('/admin/pages/update/{id}', [PageController::class, 'update'])->name('admin.pages.update');
    Route::delete('/admin/pages/delete/{id}', [PageController::class, 'delete'])->name('admin.pages.eliminar');

    //home page controller CRUD
    Route::get('/admin/hoem/create', [AdminController::class, 'create'])->name('admin.home.create');
    Route::post('/admin/hoem/store', [AdminController::class, 'store'])->name('admin.home.store');
    Route::get('/admin/hoem/show/{id}', [AdminController::class, 'show'])->name('admin.home.show');
    Route::get('/admin/hoem/edit/{id}', [AdminController::class, 'edit'])->name('admin.home.edit');
    Route::post('/admin/hoem/update/{id}', [AdminController::class, 'update'])->name('admin.home.update');
    // Route::get('/admin/pages/users', [PageController::class, 'users'])->name('admin.users');
    Route::get('/admin/pages/profile', [PageController::class, 'profile'])->name('admin.profile');

});
Route::get('/prueba', function () {
    return view('pruebas.pruebas');
})->name('pruebas');
