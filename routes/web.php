<?php

use App\Http\Controllers\NestedController;
use App\Http\Livewire\NestedComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/laravel', [NestedController::class, 'index'])->name('laravel_nested');
Route::get('/livewire', NestedComponent::class)->name('livewire_nested');
