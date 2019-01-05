<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ADMINISTRATOR') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'ADMINISTRATOR') }}
            </a>

        </div>

    </nav>
</div>

<h1 class="title">Новость</h1>


<form method="post" action="/news/{{$news_that_we_edit->id}}" enctype="multipart/form-data">
    {{--Передаем в web.php  в строку Route::post('/service/{service_that_has_been_edited}', 'ServiceController@update');
    ID редактируемой (статьи, услуги, текста,....)--}}

    @csrf

    <img src="/storage/news_img/{{ $news_that_we_edit->img }}" alt="Card image cap" width="252" class="m-2"  ><br>
    <div class="custom-file m-2">
        <input type="file" class="custom-file-input" id="customFile" name="image_file">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>

    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ $news_that_we_edit->title }}">
    </div>
    {{--Отображаем поле title из переменной $service_that_we_edit, в которую мы передавали данные из $service_id и
     возвращали в ServiceController в строке  with('service_that_we_edit', $service_id);--}}

    <div class="form-group">

        <label for="body">Текст</label>
        <textarea type="text" id="body" name="body" class="form-control"
                  rows="10">{{ $news_that_we_edit->body }}</textarea>

        {{--Отображаем поле body из переменной $service_that_we_edit, в которую мы передавали данные из $service_id и
         возвращали в ServiceController в строке  with('service_that_we_edit', $service_id);--}}

    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary m-2" >Редактировать</button>
    </div>
</form>

</body>
</html>