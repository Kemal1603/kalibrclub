<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function create()
    {
        return view('news.create');

    }


    public function show(News $news_id)
    {



        return view('news.show')->with('each_news', $news_id);

    }


    public function store()
    {

        request()->validate(['title' => ['required', 'min:3', 'max:50'], 'body' => ['required', 'min:3', 'max:2000'], 'image' => '']);


        /* Если хотим запретить создавать пустые значения в полях и хотим указать мин и макс длины создаваемых строк*/

        $data = request()->all();


        if (!empty(request()->file('image_file'))) {
            $image = Input::file('image_file');

            $filename = str_random(32) . '.' . $image->getClientOriginalExtension();

            $path = storage_path('app/public/news_img_sm/' . $filename);
            Image::make($image)->fit(250, 250)->save($path);

            $path = storage_path('app/public/news_img/' . $filename);
            Image::make($image)->fit(1000, 600)->save($path);

            $data += ['img' => basename($filename)];

        }

        News::create($data);


        return redirect('/admin.show');
    }


    public function index()
    {

        $all_news_in_controller = News::all();

        return view('admin.show')->with('all_news_in_view', $all_news_in_controller);
    }


    public function edit(News $news_id)
    {


        return view('news.edit')->with('news_that_we_edit', $news_id);


    }


    public function update(News $news_that_has_been_edited)
    {
        $data = request()->all();


        if (!empty(request()->file('image_file'))) {

            Storage::delete('/public/news_img/' . $news_that_has_been_edited->image);

            $image = Input::file('image_file');

            $filename = str_random(32) . '.' . $image->getClientOriginalExtension();

            $path = storage_path('app/public/news_img_sm/' . $filename);
            Image::make($image)->fit(250, 250)->save($path);

            $path = storage_path('app/public/news_img/' . $filename);
            Image::make($image)->fit(1000, 600)->save($path);

            $data += ['img' => basename($filename)];

        }

        $news_that_has_been_edited->update($data);
        return redirect('/admin.show');
    }


    public function delete(News $news_that_we_want_to_delete)
    {


        Storage::delete('/public/news_img/' . $news_that_we_want_to_delete->img);

        Storage::delete('/public/news_img_sm/' . $news_that_we_want_to_delete->img);

        $news_that_we_want_to_delete->delete();


        return redirect('/admin.show');
    }
}



