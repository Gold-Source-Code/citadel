<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/mainpage', [MainController::class, "mainpage"])->name("main");
Route::get('/schaar', [MainController::class, "schaar"]);
