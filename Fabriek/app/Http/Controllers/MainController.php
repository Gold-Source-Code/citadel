<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Machine;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainpage()
    {
        $allInfo = Main::all();
        $extraInfo = Machine::all();
        $foto = Main::where('id', 1)->value('foto');
        $datum = Main::where('id', 1)->value('datum');
        $video = Main::where('id', 1)->value('video');
        $extra = Main::where('id', 1)->value('extra');
        $contact = Main::where('id', 1)->value('contact');
        $photo = Machine::where('id', 1)->value('photo');
        return view('mainpage', ['extrainfo' => $extra, 'video' => $video, 'datum' => $datum, 'foto' => $foto, 'contact' => $contact]);
    }

    public function stringtolist($string)
    {
        $input = $string;

        $output = json_decode($input, true);
        $output = array_merge(...$output);
        return ($output);
    }

    /* 
    public function schaar()
    {
        $allInfo = Main::all();
        $foto = Main::where('id', 1)->value('foto');
        $datum = Main::where('id', 1)->value('datum');
        $video = Main::where('id', 1)->value('video');
        $extra = Main::where('id', 1)->value('extra');
        $contact = Main::where('id', 1)->value('contact');
        return view('schaar', ['extrainfo' => $extra, 'video' => $video, 'datum' => $datum, 'foto' => $foto, 'contact' => $contact]);
    } 
    */
}