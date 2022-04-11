<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\ModuleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/courses/{course}/modules', ModuleController::class);
Route::apiResource('/courses', CourseController::class);

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
