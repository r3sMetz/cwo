var galerieSlider = (function(){
    var the_galery_slider = false;
    var the_overlay       = false;

    /*** Private ***/
    function showGallery(image_to_show){
        the_galery_slider.slick('slickGoTo',image_to_show,true);
        device.toggleScrollability();
        the_overlay.addClass('active');
    }

    function hideGallery(){
        device.toggleScrollability();
        the_overlay.removeClass('active');
    }


    /** Public **/
    function setup(){
        //Set Options
        the_galery_slider = $('#the_galery_slider');
        the_overlay       = $('#the_gallery_overlay');

        //Build Slider (which you cannot see)
        the_galery_slider.slick({
            slidesToShow: 1,
            nextArrow: '.nav_right',
            prevArrow: '.nav_left'
        });

        $('.single_slide_image').on('click',function(){
            var image_to_show = this.getAttribute('data-key');
            showGallery(image_to_show);
        });

        $('#close_galery').on('click',hideGallery)
    }

    return {
        setup: setup
    }
})();