<?php

namespace App\Http\Controllers;

use App\Playgrounds;
use function Couchbase\defaultDecoder;
use Illuminate\Support\Facades\Storage;

class PlaygroundsController extends Controller
{


    public function create()
    {
        return view('playground.create');

    }


    public function show($slug, Playgrounds $playground)
    {
        /*Здесь мы в скобках принимаем slug и id, которые передали в index.php*/


        $albums = $playground->albums;
        /*Здесь, в переменную $albums мы передаем альбом принадлежащий конкретной площадке*/


        $playground = Playgrounds::where('slug', $slug)->first();
       /*Тут, мы достаем первый slug из модели Playgrounds, где присваиваем ему значение параметра, которое
       мы приняли в скобках*/

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
       /*Передали в этот метод данные о площадке, переданный запрос поместили в переменную $data, в следующей строке
       при помощи str_slug задали slug в модели, теперь он имеет имя, которое было в title */


        $playground = Playgrounds::create($data);
        /*Создаем в модели Playgrounds площадку с данными, которые мы поместили в переменной $data */


        $playground->albums()->create(['album_name' => $playground->title]);
        /*Т.к. переменная $playground теперь содержит в себе модель Playgrounds  с данными, которые мы поместили
        в переменной $data, мы обращаемся к методу albums-модели Playgrounds. Внутри самой модели прописан метод, который
        указывает на то, что модель  Playgrounds может содержать в себе одну модель albums, данная строка кода обращается
        к модели  albums через модель  Playgrounds и создает там строку album_name состоящую из title переданной нами площадки */


        return redirect('/all_playgrounds');
    }


    public function edit(Playgrounds $playground)
    {

        $albums = $playground->albums;


        return view('playground.edit')->with('playgrounds', $playground)->with('albums', $albums);
    }


    public function delete(Playgrounds $playground)
    {


        /*  1. Получить альбом  и циклом foreach пройти по всем фоткам этого альбома, удалить их из storage и из базы данных
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
