<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('app-register', [App\Http\Controllers\Auth\RegisterController::class, 'apiRegister']);
Route::post('app-login', [App\Http\Controllers\Auth\LoginController::class, 'appLogin']);
// Route::post('app-login', [App\Http\Controllers\Auth\LoginController::class, 'appLogin']);

