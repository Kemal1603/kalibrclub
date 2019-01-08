<?php

namespace App\Http\Controllers;

use App\Albums;
use App\Photos;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    protected function store(Albums $each_album)
    {

        request()->validate(['title' => ['required', 'min:1', 'max:20'],'image' => '']);


        Photos::create([
            'albums_id' => $each_album->id,
            'title' => request('title'),
            'img' => request('img')
        ]);

        /*Здесь мы вызываем модель Photos и создаем в ней новые данные  в строку 'albums_id' => Заносим данные,
        которые передали в $each_album->id, так же строке'title' присваеиваем значение переданное запросом
         => request('title'), то же самое и для строки  'img' => request('img') */


        $each_album->photos();
        /*Тут достаем  из переменной уже созданную модель photos с нашими новыми данными*/


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
