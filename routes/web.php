<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Blog Routes
Route::resource('blogs', BlogController::class)->middleware('auth');

// Laravel Breeze automatically sets up authentication routes
// No need to manually add Auth::routes()
