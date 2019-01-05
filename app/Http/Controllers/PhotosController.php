<?php

namespace App\Http\Controllers;

use App\Albums;
use App\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller
{
    protected function store(Albums $each_album)
    {

        request()->validate(['title' => ['required', 'min:1', 'max:20'],'image' => '']);


        Photos::create([
            'albums_id' => $each_album->id,
            'title' => request('title'),
            'title' => request('title'),
            'img' => request('img')
        ]);


        $each_album->photos();

        return redirect('/albums/'.$each_album->id.'/edit');
    }


    public function delete(Photos $photo_that_we_want_to_delete)
    {

        $album_id = $photo_that_we_want_to_delete->albums_id;

        Storage::delete('/public/strikeball_img/' . $photo_that_we_want_to_delete->img);

        Storage::delete('/public/strikeball_img_sm/' . $photo_that_we_want_to_delete->img);

        $photo_that_we_want_to_delete->delete();



        return redirect('/albums/'.$album_id.'/edit');
    }


}
