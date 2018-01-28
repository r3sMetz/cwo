var historySlider = (function(){
    function setup(){
        console.log("history-slider.js running");
        //Build History Slider
        var history_slider = $('.the_history');
        history_slider.slick({
            arrows: false,
            fade: true,
        });

        //Set Click Event for Navigation Dots
        var all_dots = $('.the_history_navigation li');
        all_dots.on('click',function(){
            var current_dot = $(this);
            if(!current_dot.hasClass('active')){
                var slide_to_show = parseInt(current_dot.data('index'));

                //Build Active Class for Clicked Dot
                all_dots.removeClass('active');
                current_dot.addClass('active');

                //Go to clicked Slide
                history_slider.slick('slickGoTo',slide_to_show);
            }
        })
    }

    return {
        setup: setup
    }
})();