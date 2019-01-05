<?php

namespace App\Http\Controllers;

use App\Albums;
use App\Playgrounds;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlaygroundsController extends Controller
{


    public function create()
    {
        return view('playground.create');

    }


    public function show($slug, Playgrounds $playground)
    {

        $albums = $playground->albums;



        $playground = Playgrounds::where('slug', $slug)->first();




        return view('playground.show')->with('playground', $playground)->with('albums', $albums);

    }


    public function index()
    {

        $playgrounds = Playgrounds::all();

        return view('playground.all_playgrounds')->with('playgrounds', $playgrounds);
    }


    protected function store()
    {

        $data = request()->all();
        $data += ['slug' => str_slug($data['title'])];


        $playground = Playgrounds::create($data);

        $playground->albums()->create(['album_name' => $playground->title]);

        return redirect('/all_playgrounds');
    }


    public function edit(Playgrounds $playground)
    {

        $albums = $playground->albums;



        return view('playground.edit')->with('playgrounds', $playground)->with('albums', $albums);
    }


    public function delete(Playgrounds $playground)
    {


        /*  1. Получить альбом  и циклом foreach пройти по всем фоткам этого альбома,
            удалить их из storage и из базы данных
            2. Удалить сам альбом из базы данных
            3. Удалить саму площадку
         */

        $album = $playground->albums;

        foreach ($album->photos as $photo) {
            Storage::delete('/public/strikeball_img/' . $photo->img);
            Storage::delete('/public/strikeball_img_sm/' . $photo->img);
            $photo->delete();
        }

        $album->delete();


        $playground->delete();


        return redirect('/all_playgrounds');
    }

}
