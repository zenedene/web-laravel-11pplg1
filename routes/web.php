<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'home']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/contact', [ProfileController::class, 'contact']);