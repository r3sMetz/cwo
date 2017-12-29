var galerieSlider = (function(){
    /** Private **/
    function build_the_big_slider(){
        var the_big_slider = $('.the_big_slider').slick({
            slidesToShow: 1,
            arrows: false,
            fade: true,
            asNavFor: '.the_small_slider'
        });
    }

    function build_the_small_slider(){
        var the_small_slider = $('.the_small_slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            prevArrow: '.prev_slide',
            nextArrow: '.next_slide',
            focusOnSelcet: true,
            asNavFor: '.the_big_slider',
            responsive: [
                {
                    breakpoint: device.screen.sm,
                    settings: {
                        // slidesToShow: 2,
                    }
                }
            ]
        });
    }

    /** Public **/
    function setup(){
        //Selbsterklärend ;)
        build_the_big_slider();
        build_the_small_slider()
    }

    return {
        setup: setup
    }
})();