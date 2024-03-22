<?php

use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[VoitureController::class,'index']);