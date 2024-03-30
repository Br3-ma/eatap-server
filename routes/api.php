<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HandshakeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route for user login with mobile number and OTP verification
Route::post('/login', [AuthController::class, 'login']);

// Route for user signup with mobile number
Route::post('/signup/request-otp', [AuthController::class, 'requestOtp']);
Route::post('/signup/verify-otp', [AuthController::class, 'verifyOtp']);
Route::post('/signup/user-info', [AuthController::class, 'userInfo']);
Route::post('/connectx', [HandshakeController::class, 'connect']);

// Protected route to retrieve user information after successful authentication
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

