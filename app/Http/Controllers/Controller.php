<?php

namespace App\Http\Controllers;

use App\News;
use App\Photos;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function main()
    {

        $all_news_in_controller = News::all();

        return view('news.news')->with('all_news_in_view', $all_news_in_controller);
    }




}
