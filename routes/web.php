<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;


// Landing Page
Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/blog',[HomeController::class, 'blog']);
Route::get('/detail',[HomeController::class, 'detail']);
Route::get('/fasilitas',[HomeController::class, 'fasilitas']);
Route::get('/virtual-tour',[HomeController::class, 'virtualTour']);


// Dashboard Page
Route::get('/dashboard',[DashboardController::class, 'index']);
Route::get('/login',[DashboardController::class, 'viewLogin']);
Route::get('/perumahan',[DashboardController::class, 'home']);
Route::get('/insert-perumahan',[DashboardController::class, 'insertPerumahan']);

