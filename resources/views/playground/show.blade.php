<?php
include "header.php"
?>
<meta name="description"
      content="Большой крытый полигон в городе, парковка, бесплатная комната отдыха после игры, чай, кофе, приставка">
<meta name="keywords"
      content="крытый страйкбол в минске игра площадка в здании цена пейнтбол телефон контакты адреса стоимость сценарии">
<section id="drajnia" class="playground">
    <div class="container">
        <div class="row">
            <h1 class="text-center">{{$playground->title}}</h1>
            <div class="col-sm-6">
                <div class="popup-gallery">
                    @foreach($albums->photos as $each_playground)
                    <div class="single-gallery-slide col-md-4 col-sm-6">
                        <a href="/storage/strikeball_img/{{ $each_playground->img }}" title="{{ $each_playground->title }}">
                            <div class="inner-box"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </a>
                        <img class="img-responsive" alt=""
                             src="/storage/strikeball_img_sm/{{ $each_playground->img }}">
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="col-sm-6">
              {{$playground->description}}

            </div>
        </div>


        <div class="row">
            <div class="col"></div>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <iframe src="{{$playground->google_map}}" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6">
          {{$playground->address}}
            </div>

        </div>

    </div>
</section>

<?php
include "footer.php"
?>
