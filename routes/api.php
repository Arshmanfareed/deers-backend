<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AppointmentController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\Auth\RegisterController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('app-register', [App\Http\Controllers\Auth\RegisterController::class, 'apiRegister']);
Route::post('app-login', [App\Http\Controllers\Auth\LoginController::class, 'appLogin']);
Route::post('upload-document', [App\Http\Controllers\backend\DocumentController::class, 'upload']);

Route::get('app-departments', [AppointmentController::class, 'appDepartments']);
Route::apiResource('appointments', AppointmentController::class);
Route::get('/departments/{id}/availability/{date}', [AppointmentController::class, 'checkAvailability']);

Route::prefix('otp')->group(function () {
    Route::post("/otp-verify" , [RegisterController::class,'verify_otp']);
    Route::post("/verified-Otp" , [RegisterController::class,'verifiedOtp']);
    Route::post("/resend-top" , [RegisterController::class,'resendOtp']);
});
