<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainpage()
    {
        return view('mainpage');
    }

    public function schaar()
    {
        return view('schaar');
    }
}
