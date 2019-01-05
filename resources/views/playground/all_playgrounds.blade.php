<html lang="en"><head>
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
</head>
<body>
<div id="app"><nav class="navbar navbar-expand-md navbar-light navbar-laravel"><div class="container"><a href="http://127.0.0.1:8000" class="navbar-brand">
                ADMINISTRATOR
            </a></div></nav></div>


<div class="row">

    <div class="col-md-7">

        <div class="row">
@foreach($playgrounds as $playground)

    <form action="/playground/{{$playground->id}}/edit" method="get">


        <div class="form-group">
            <a href="/playground/{{$playground->id}}/edit" class="btn btn-primary m-3">{{$playground->title}}</a>


        </div>
    </form>

@endforeach

        </div>
    </div>




    <div class="col-md-5">

        <a href="/playground/create" class=" btn btn-outline-primary m-2">ДОБАВИТЬ ПЛОЩАДКУ</a>


    </div>



</div>




</body>
</html>