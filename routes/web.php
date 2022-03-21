<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Index');

Route::resource('/books', BookController::class);