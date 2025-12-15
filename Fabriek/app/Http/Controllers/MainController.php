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
        $allInfo = Main::all();
        $foto = Main::where('id', 1)->value('foto');
        $datum = Main::where('id', 1)->value('datum');
        $video = Main::where('id', 1)->value('video');
        $extra = Main::where('id', 1)->value('extra');
        $extra = Main::where('id', 1)->value('contact');
        return view('schaar', ['extrainfo' => $extra, 'video' => $video, 'datum' => $datum, 'foto' => $foto, 'contact' => $contact]);
    }
}
