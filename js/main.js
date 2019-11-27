$ ( function () {
    window.onscroll = function showHeader () {
        var header = document.querySelector('.header');

        if(window.pageYOffset > 40) {
            header.classList.add('header__fixed');
        } else {
            header.classList.remove('header__fixed');
        }
    }

    var owl = $('.owl-carousel');
    owl.owlCarousel ( {
        item: 1,
        loop: false, 
        margin: 10,
        autoplay: false,
        autoplayTimeout: 1000,
        autoplayHoverPause: false
    } );
});

$('.nav').click( function () {
    $ ('.nav').removeClass("active");
    $ (this).addClass("active");

    var ind = 5-$(this).index();
    
    if (ind==4) {
        window.location="index.html"
    } else {
        if (ind==4) {
            ind--;
        }

    $('html,body').stop().animate({scrollTop:ot},1000);}    
});

