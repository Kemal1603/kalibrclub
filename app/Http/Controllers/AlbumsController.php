<?php

namespace App\Http\Controllers;

use App\Albums;
use App\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class AlbumsController extends Controller
{
    public function store(Albums $album)
    {

        request()->validate(['title' => ['required', 'min:1', 'max:50'], 'image' => '']);


        /* Если хотим запретить создавать пустые значения в полях и хотим указать мин и макс длины создаваемых строк*/

        $data = request()->all();


        if (!empty(request()->file('image_file'))) {
            $image = Input::file('image_file');

            $filename = str_random(32) . '.' . $image->getClientOriginalExtension();

            $path = storage_path('app/public/strikeball_img_sm/' . $filename);
            Image::make($image)->fit(194, 129)->save($path);

            $path = storage_path('app/public/strikeball_img/' . $filename);
            Image::make($image)->fit(1920, 1920)->save($path);

            $data += ['img' => basename($filename)];

        }

        $album->photos()->create($data);


        return redirect('/albums/' . $album->id . '/edit');
    }


    public function edit(Albums $album)
    {


        $photo = $album->photos;





        return view('albums.edit')->with('all_albums', $album)->with('photos', $photo);
    }
}
