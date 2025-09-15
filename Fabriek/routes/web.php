<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/mainpage', [MainController::class, "index"])->name("main");
