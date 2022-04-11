<?php

use App\Http\Controllers\Api\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('/courses', CourseController::class);

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
