<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MedicalTestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/lab-tests', [MedicalTestController::class, 'getLabTests'])->middleware('auth:sanctum');

Route::post('/medical-lab-tests', [MedicalTestController::class, 'saveMedicalTest'])->middleware('auth:sanctum');