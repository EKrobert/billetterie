<?php

use App\Http\Controllers\EventViewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('index.events');
//--Route Events
Route::get('events', [EventViewController::class, 'create'])->name('create.events');
//
// Route::get('/api-request', [ApiRequestController::class, 'create'])->name('api.request.create');
Route::post('/api-request', [UserController::class, 'store'])->name('api.request.store');