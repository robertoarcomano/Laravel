<?php

use App\Http\Controllers\Api\UsersController;

// Route::get('/users', [UsersController::class, 'index']);

use Illuminate\Support\Facades\Route;

Route::get('/users', [UsersController::class, 'index']);
