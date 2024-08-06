<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

Route::get('/', function () {
    return response()->json([
        'message' => 'ok',
    ]);
});

Route::post('/register', [ApiController::class, 'Register']);
Route::post('/login', [ApiController::class, 'Login']);
