<?php

use App\Http\Controllers\Api\TicketTypeController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\OrderIntentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//endpiont:http://localhost:8000/api/events (events.store)
Route::resource('events', EventController::class);
Route::get('ticket/types', [TicketTypeController::class,'index']);
//------
// Route::get('events', [EventController::class, 'index']);
Route::get('events/{id}/ticket-types', [TicketTypeController::class, 'show']);
Route::post('order-intents', [OrderIntentController::class, 'store']);
Route::post('orders', [OrderIntentController::class, 'store']);
Route::get('orders', [OrderIntentController::class, 'index']);