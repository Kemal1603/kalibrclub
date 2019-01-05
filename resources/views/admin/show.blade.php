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

<a href="/news/create" class=" btn btn-outline-primary m-2">СОЗДАТЬ НОВОСТЬ</a>
<div class="container">
    <div class="row">
        @foreach($all_news_in_view as $each_news)
            {{--Мы передавали в ServiceController в методе index переменную $all_services_in_view, так вот здесь мы ее объявили и
            указали, что бы нам ее представили в виде переменной $each_service --}}
            <div class="col-md-3">
                <div class="card">
                    <img src="/storage/news_img/{{ $each_news->img }}" alt="Card image cap" width="252">
                    <div class="card-body">
                        {{ $each_news->title }}
                        {{--Здесь мы просим из переменной $each_service вытащить поле title и отобразить нам на странице со всеми ( усдугами, статьями....)--}}
                    </div>
                    <div class="card-body">
                        {{ $each_news->body }}
                        {{--Здесь мы просим из переменной $each_service вытащить поле body и отобразить нам на странице со всеми ( усдугами, статьями....)--}}

                        <hr>

                        <a href="/news/{{$each_news->id}}/edit" class="m-3">Редактировать Новость</a>
                        {{--Вешаем ссылку на редактирование под каждым Заголовком и Текстом и передаем ID конкретного Текста и Заголовка
                        в web.php в строку Route::get('/service/{service_id}/edit', 'ServiceController@edit');--}}


                        <a href="/news/{{$each_news->id}}/delete" class="m-3">Удалить новость</a>
                        {{--Вешаем ссылку на удаление под каждым Заголовком и Текстом и передаем ID конкретного Текста и Заголовка
                         в web.php в строку Route::get('/service/{service_that_we_want_to_delete}/delete', 'ServiceController@delete');--}}
                    </div>
                </div>
            </div>


        @endforeach

    </div>
</div>

</body>
</html>