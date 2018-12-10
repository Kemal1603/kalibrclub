function learn_more_form_show(){
    $('#learn_more_back').css({'display':'flex'});
    $('#learn_more').css({'display':'block'});
}

function learn_more_hide(){
    $('#learn_more_back').css({'display':'none'});
    $('#learn_more').css({'display':'none'});
}

function capture_form_show(){
    $('#order_call_back').css({'display':'flex'});
    $('#order_call').css({'display':'block'});
}

function capture_form_hide(){
    $('#order_call_back').css({'display':'none'});
    $('#order_call').css({'display':'none'});
}

setTimeout(function () {
    $('.intro_bg').addClass('zout');
}, 1000);



$(window).on('load', function () {

    // preloader
    var $preloader = $('#page-pre-loader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');

    // full height
    var heightR = $(window).height();
    if (heightR > 700)
        $('.full_height').css({'height':heightR});

    $('a[href^="#"], a[href^="."]').click(function() {
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
            $('html, body').animate({
                scrollTop: $(scroll_el).offset().top -80
            }, 500);
        }
        return false;
    });

    $('.slick-box').slick({
        infinite: true,
        dots: false,
        arrows: false,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        pauseOnHover: false,
        autoplaySpeed: 3000
    });

    $('.slick-box-2').slick({
        infinite: true,
        dots: false,
        speed: 200,
        prevArrow: $('#arrow-left'),
        nextArrow: $('#arrow-right'),
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false
    });

    $('.slick-box-3').slick({
        infinite: true,
        dots: false,
        speed: 200,
        prevArrow: $('#arrow-left-2'),
        nextArrow: $('#arrow-right-2'),
        autoplay: false
    });
    $('.slick-box-4').slick({
        infinite: true,
        dots: false,
        speed: 200,
        prevArrow: $('#arrow-left-4'),
        nextArrow: $('#arrow-right-4'),
        autoplay: false
    });
    $('.slick-box-5').slick({
        infinite: true,
        dots: false,
        speed: 200,
        prevArrow: $('#arrow-left-5'),
        nextArrow: $('#arrow-right-5'),
        autoplay: false
    });
    $('.slick-box-6').slick({
        infinite: true,
        dots: false,
        speed: 200,
        prevArrow: $('#arrow-left-6'),
        nextArrow: $('#arrow-right-6'),
        autoplay: false
    });

    // Gallery
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        }
    });

    // Gallery
    $('.popup-gallery-2').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        }
    });



});

window.onscroll = function() {
    var scrolled = window.pageYOffset;
    if (scrolled != 0)
        $('.navbar-default').addClass('navbar-dark');
    else
        $('.navbar-default').removeClass('navbar-dark');
};