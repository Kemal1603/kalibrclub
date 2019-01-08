<?php

namespace App\Http\Controllers;

use App\Albums;
use App\Playgrounds;


class PagesController extends Controller
{
    public function index()
    {


        $album1 = Albums::find(1);

        $album2 = Albums::find(2);

        $playgrounds = Playgrounds::all();

        /*В данном методе берутся две переменные и поочередно из модели Albums достаются 1-ая и 2-ая модель с
        соответствующими id, т.к. эти два альбома уже по умолчанию соданы на индексной странице, в отличае от площадок*/

        return view('index')->with('album1',$album1)->with('album2',$album2)->with('playgrounds', $playgrounds );
    }
}
