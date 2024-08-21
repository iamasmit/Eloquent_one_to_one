<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('student', StudentController::class);

// This route is to call the ContactController of function show()
Route::get('/contact', [ContactController::class,'show']);
