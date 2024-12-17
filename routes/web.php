<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', ViewController::class);

Route::get('/events', [EventoController::class, 'index']);
Route::post('/storeevent', [EventoController::class, 'store']);

Route::get('/users', [UserController::class, 'index']);
Route::post('/storeuser', [UserController::class, 'store']);
