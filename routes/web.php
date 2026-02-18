<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', [testController::class, 'index']);

Route::get('/about', [testController::class, 'index']);

