<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Alle functies staan in Http/Controllers/MainController.php
Route::get('/mainpage', [MainController::class, "mainpage"])->name("main"); // http://localhost:8000/mainpage
Route::get('/schaar', [MainController::class, "schaar"]); // http://localhost:8000/schaar
Route::get('/kantbank', [MainController::class, "kantbank"]); // http://localhost:8000/schaar
