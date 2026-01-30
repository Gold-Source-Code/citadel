<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainpage()
    {
        $allInfo = Main::all();
        $foto = Main::where('id', 2)->value('foto');
        $datum = Main::where('id', 2)->value('datum');
        $video = Main::where('id', 2)->value('video');
        $extra = Main::where('id', 2)->value('extra');
        $contact = Main::where('id', 2)->value('contact');
        return view('mainpage', ['extrainfo' => $extra, 'video' => $video, 'datum' => $datum, 'foto' => $foto, 'contact' => $contact]);
    }

    public function schaar()
    {
        $allInfo = Main::all();
        $foto = Main::where('id', 2)->value('foto');
        $datum = Main::where('id', 2)->value('datum');
        $video = Main::where('id', 2)->value('video');
        $extra = Main::where('id', 2)->value('extra');
        $contact = Main::where('id', 2)->value('contact');
        return view('schaar', ['extrainfo' => $extra, 'video' => $video, 'datum' => $datum, 'foto' => $foto, 'contact' => $contact]);
    }
}
