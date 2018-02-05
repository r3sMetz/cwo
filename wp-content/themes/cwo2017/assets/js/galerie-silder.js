var galerieSlider = (function(){
    /** Private **/
    var the_gallery = false;

    function build_the_big_slider(){
        var the_element = $('.the_big_slider');

        the_element.on('init',function(event,slick){
            buildGradientBG(slick);
        });

        the_element.on('afterChange',function(event,slick,current){
            buildGradientBG(slick,current);
        });

        the_element.slick({
            slidesToShow: 1,
            arrows: false,
            fade: true,
            asNavFor: '.the_small_slider'
        });

    }

    function build_the_small_slider(){
        var the_element = $('.the_small_slider');

        the_element.slick({
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

    function buildGradientBG(slick,current){
        if(!current)
            current = 0;

        var vibrant  = new Vibrant(slick.$slides[current]);
        var swatches = vibrant.swatches();

        var firstColor = swatches.DarkVibrant.getHex();
        var secColor   = swatches.DarkMuted.getHex();

        the_gallery.css({
            'background-image': '-webkit-linear-gradient(left,'+firstColor+','+secColor+')'
        });
    }

    /** Public **/
    function setup(){
        the_gallery = $('#the_gallery_wrapper');
        //Selbsterklärend ;)
        build_the_big_slider();
        build_the_small_slider()
    }

    return {
        setup: setup
    }
})();