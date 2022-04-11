<?php

use App\Http\Controllers\Api\CourseController;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;



Route::get('/', function () {
    return view('welcome');
});
