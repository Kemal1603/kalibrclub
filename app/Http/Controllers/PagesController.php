<?php

namespace App\Http\Controllers;

use App\Albums;
use App\Playgrounds;
use Illuminate\Http\Request;
use App\Photos;

class PagesController extends Controller
{
    public function index()
    {


        $album1 = Albums::find(1);

        $album2 = Albums::find(2);

        $playgrounds = Playgrounds::all();

        return view('index')->with('album1',$album1)->with('album2',$album2)->with('playgrounds', $playgrounds );
    }
}
