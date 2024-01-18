<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DeparmentController;



Route::get('/',[HomepageController::class,'home'])->name('home');
Route::resource('categorys',HomepageController::class);
Route::resource('deparments',DeparmentController::class);
