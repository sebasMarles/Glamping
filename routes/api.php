<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabinController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('/cabins', CabinController::class);

Route::get('/hola/locos', 
    [App\Http\Controllers\CabinController::class, 
    'index'])->name('hola.locos');




