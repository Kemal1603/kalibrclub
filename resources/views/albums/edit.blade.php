<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="OXVrxzHTT5BdJLXBjYL9UDBywLi5UtohqctVQGlV">

    <title>ADMINISTRATOR</title>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/css/magnific-popup.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container"><a href="http://127.0.0.1:8000" class="navbar-brand">
                ADMINISTRATOR
            </a></div>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-7">


            <div class="row">
                @foreach($photos as $each_album)
                    <div class="single-gallery-slide col-md-3 ">
                        <a href="{{ $each_album->img }}" title="Страйкбол">
                            <div class="inner-box"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </a>
                        <img class="img-fluid center-block" alt="{{ $each_album->title }}"
                             src="/storage/strikeball_img/{{ $each_album->img }}">
                        <a href="/photos/{{$each_album->id}}/delete" class="m-3">Удалить фото</a>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="col-md-5">

            <form action="/photos/{{ $all_albums->id }}" method="post" enctype="multipart/form-data">


                @csrf


                <div class="form-group">

                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control  {{$errors->has('title')?'alert-danger':''}}" name="title"
                           id="title"
                           {{--required--}} value="{{old('title')}}">
                    @if ($errors->has('title'))
                        <strong>{{ $errors->first('title') }}</strong>
                    @endif
                    {{--Имя инпута (naeme) и название атрибута for, тега Label, должны совпадать
                        иначе принимаемые значения потом не получается изменить. Тэг required
                        требуется для того, что бы при вводн пустых строк, ничего не сохранялось
                        value="{{old('title')}} При помощи значений этого тега, мы сохраняем введенные значения в поле "Заголовок" ,
                        то есть, если ввести 2 буквы, а мы установили минимум 3, то при редиректе, ничего не сотрется, введенные данные останутся--}}

                </div>


                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image_file">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>

                <br>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary">Добавить</button>

                </div>


            </form>
        </div>
    </div>
</div>


</body>
</html>