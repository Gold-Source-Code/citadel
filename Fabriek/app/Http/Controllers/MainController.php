<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Machine;
use Illuminate\Http\Request;

class MainController extends Controller
{
// Functie voor de statusicoontjes op de map pagina
    public function mainpage()
    {
        $status1 = Machine::where('id', 'cmg7yz9xr0001jo04hid1dymy')->value('status');
        $status2 = Machine::where('id', 'cmg7yz9zl0003jo04unkqcfz9')->value('status');
        return view('mainpage', ['status1' => $status1, 'status2' => $status2]);
    }
// Functie voor het vertalen van een string naar een list
    public function stringtolist($string)
    {
        $input = $string;

        $output = json_decode($input, true);
        $output = array_merge(...$output);
        return ($output);
    }
// Functie voor het informatie van de schaarvenster.
    public function schaar()
    {
        $datum = Main::where('id', 1)->value('datum');
        $video = Main::where('id', 1)->value('video');
        $extra = Main::where('id', 1)->value('extra');
        $contact = Main::where('id', 1)->value('contact');
        $photo = Machine::where('id', 'cmg7yz9z20002jo04ten5f6yz')->value('photo');
        $manual = Machine::where('id', 'cmg7yz9z20002jo04ten5f6yz')->value('manual');
        $status = Machine::where('id', 'cmg7yz9xr0001jo04hid1dymy')->value('status');
        return view('schaar', ['extrainfo' => $extra, 'video' => $video, 'datum' => $datum, 'photo' => $photo, 'contact' => $contact, 'status' => $status, 'manual' => $manual]);
    }
// Functie voor het informatie van de kantbankvenster.
        public function kantbank()
    {
        $datum = Main::where('id', 1)->value('datum');
        $video = Main::where('id', 1)->value('video');
        $extra = Main::where('id', 1)->value('extra');
        $contact = Main::where('id', 1)->value('contact');
        $photo = Machine::where('id', 'cmg7yz9zl0003jo04unkqcfz9')->value('photo');
        $manual = Machine::where('id', 'cmg7yz9zl0003jo04unkqcfz9')->value('manual');
        $status = Machine::where('id', 'cmg7yz9zl0003jo04unkqcfz9')->value('status');
        return view('schaar', ['extrainfo' => $extra, 'video' => $video, 'datum' => $datum, 'photo' => $photo, 'contact' => $contact, 'status' => $status, 'manual' => $manual]);
    }
}
