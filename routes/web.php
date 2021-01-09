<?php

use App\Http\Controllers\NestedController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NestedController::class, 'index']);
