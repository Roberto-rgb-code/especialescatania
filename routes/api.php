<?php

use App\Http\Controllers\EspecialController;
use Illuminate\Support\Facades\Route;

Route::get('/especiales', [EspecialController::class, 'apiIndex']);
Route::get('/especiales/{id}', [EspecialController::class, 'apiShow']);