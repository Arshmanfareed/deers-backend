<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('app-register', [App\Http\Controllers\Auth\RegisterController::class, 'apiRegister']);
Route::post('app-login', [App\Http\Controllers\Auth\LoginController::class, 'appLogin']);
Route::post('upload-document', [App\Http\Controllers\backend\DocumentController::class, 'upload']);

Route::get('/app-departments', [App\Http\Controllers\backend\DepartmentController::class, 'appDepartments']);
Route::get('/add-department', [App\Http\Controllers\backend\DepartmentController::class, 'add_departments']);
// Route::post('/add-department-submit', [App\Http\Controllers\backend\DepartmentController::class, 'add_departments_submit']);
// Route::get('/departments/{department}/edit', [App\Http\Controllers\backend\DepartmentController::class, 'edit_departments']);
// Route::post('departments/edit/{department}', [App\Http\Controllers\backend\DepartmentController::class, 'edit_departments_submit']);
// Route::delete('/departments/{department}', [App\Http\Controllers\backend\DepartmentController::class, 'destroy']);

// // Route::post('app-login', [App\Http\Controllers\Auth\LoginController::class, 'appLogin']);