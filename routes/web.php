<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;
Route::get('/multiply/{num1}/{num2}', [MathController::class, 'multiply']);


Route::get('/', function () {
    return view('welcome');
});


