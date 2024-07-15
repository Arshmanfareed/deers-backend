<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;


Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('home');
    Route::get('/members', [AdminController::class, 'members'])->name('members');
    Route::get('/add-members', [AdminController::class, 'add_members'])->name('add_members');
    Route::get('/departments', [AdminController::class, 'departments'])->name('departments');
    Route::get('/add-department', [AdminController::class, 'add_departments'])->name('add_departments');
    Route::get('/appointments', [AdminController::class, 'appointments'])->name('appointments');
    Route::get('/add-appointment', [AdminController::class, 'add_appointments'])->name('add_appointments');
    Route::get('/locations', [AdminController::class, 'locations'])->name('locations');
    Route::get('/add-location', [AdminController::class, 'add_location'])->name('add_location');
    Route::get('/subscriptions', [AdminController::class, 'subcsription'])->name('subscriptions');
    Route::get('/reports', [AdminController::class, 'reports'])->name('reports');
    Route::get('/invoices', [AdminController::class, 'invoices'])->name('invoices');
    Route::get('/messages', [AdminController::class, 'messages'])->name('messages');
    Route::get('/inbox', [AdminController::class, 'inbox'])->name('inbox');
});





Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
