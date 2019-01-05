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

    <div class="col-md-7 m-2">



        <form action="/playground" method="post" >


            @csrf


            <div class="form-group">
                <h3>Страница создания площадки</h3>
                <label for="title">Заголовок</label>
                <input type="text" class="form-control" name="title" id="title">


            </div>


            <div class="form-group">
                <label for="body">Описание</label>
                <textarea type="text" class="form-control" name="description" id="body" spellcheck rows="10" ></textarea>
            </div>





            <div class="form-group">
                <label for="title">Адрес</label>
                <input type="text" class="form-control" name="address" id="address"
                       {{--required--}}>

            </div>




            <div class="form-group">
                <label for="title">Google Map</label>
                <input type="text" class="form-control" name="google_map" id="address"
                       {{--required--}} >


            </div>


            <div class="form-group">
                <label for="title">Краткое Описание</label>
                <input type="text" class="form-control" name="short_description" id="address"
                       {{--required--}} >

            </div>




            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Создать Площадку</button>

            </div>




        </form>


    </div>



</div>




</body>
</html>