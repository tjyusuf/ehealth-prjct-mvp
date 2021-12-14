<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RatingsController;

Route::get('/user',[ RatingsController::class, 'index']);

// // Route::group(function(){
// Route::middleware('auth:sanctum')->group(function(){

//     Route::get('/user', function (Request $request) {
//         return $request->user();
//     })->name('user');

// });
