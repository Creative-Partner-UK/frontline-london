<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\EmployeeDesignationController;
use App\Http\Controllers\Api\V1\AddressController;

Route::prefix('v1')->group(function () {
    Route::apiResource('/address', AddressController::class);
    Route::apiResource('/employee-designations', EmployeeDesignationController::class);
    Route::apiResource('/employees', EmployeeController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
