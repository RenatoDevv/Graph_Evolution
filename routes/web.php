<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SitioController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\MessageController;
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
Route::get('/soporte', [HomeController::class, 'help'], 'help')->name('help');


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

    //services page controller CRUD
    Route::get('/admin/Services/index', [SitioController::class, 'servicesIndex'])->name('admin.services.index');
    Route::get('/admin/Services/create', [SitioController::class, 'servicesCreate'])->name('admin.services.create');
    Route::post('/admin/Services/store', [SitioController::class, 'servicesStore'])->name('admin.services.store');
    // Route::get('/admin/Phome/show', [AdminController::class, 'pageshow'])->name('admin.home.show');
    Route::get('/admin/Services/edit/{id}', [SitioController::class, 'servicesEdit'])->name('admin.services.edit');
    Route::post('/admin/Services/update/{id}', [SitioController::class, 'servicesUpdate'])->name('admin.services.update');
    Route::delete('/admin/Services/delete/{id}', [SitioController::class, 'servicesDelete'])->name('admin.services.delete');



    //SERVOCE CONTROLLER

    Route::get('/admin/Services/index', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('/admin/Services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/admin/Services/store', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/admin/Services/show{id}', [ServiceController::class, 'show'])->name('admin.services.show');
    Route::get('/admin/Services/edit/{id}', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::post('/admin/Services/update/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/admin/Services/delete/{id}', [ServiceController::class, 'delete'])->name('admin.services.delete');


    // MESSAGE CRUD CONTROLLER

    Route::get('/admin/message', [MessageController::class, 'index'])->name('admin.message');
    Route::post('admin/message/store', [MessageController::class, 'store'])->name('admin.message.store');
    Route::get('admin/message/show', [MessageController::class, 'show'])->name('admin.message.show');
    Route::post('/admin/message/edit/{id}', [MessageController::class, 'edit'])->name('admin.message.edit');
    Route::delete('/admin/message/delete/{id}', [MessageController::class, 'destroy'])->name('admin.message.delete');
});

