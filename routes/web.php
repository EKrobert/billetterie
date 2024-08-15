<?php

use App\Http\Controllers\EventViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventViewController::class, 'index'])->name('index.events');
//--Route Events
Route::get('events', [EventViewController::class, 'create'])->name('create.events');
