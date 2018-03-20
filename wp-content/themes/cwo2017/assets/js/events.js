var events = (function(){

    function setEventHandlerForWindow(){
        //Mobile or Desktop Window-Event
        var windowEvent = device.isMobile ? 'orientationchange' : 'resize';
        $(window).on(windowEvent,function(){

        });
    }
    function setEventHandlerForClick(){
        //Fade Overlay
        fadeOverlay.setClickEvents();

        //CWO Location Back
        $('.cwo_loc_back').on('click',function(){
            fadeOverlay.show(true,function(){
                if(document.referrer.includes('cwo'))
                    window.history.back();
                else
                    window.location.href = defaults.home_url;
            });
        });

        // Single Gallery Linking
        $('.single_gallery').on('click',function(){
            var url = $(this).data('url');

            fadeOverlay.show(url);
        });
    }

    function setEventHandlerForScroll(){
        $(window).on('scroll',function(){
            var pos    = $(window).scrollTop(),
                navbar = $('.cwo-navbar');

            if(pos > 0)
                navbar.addClass('blackened');
            else
                navbar.removeClass('blackened');
        })
    }



    return {
        window : setEventHandlerForWindow,
        click  : setEventHandlerForClick,
        scroll : setEventHandlerForScroll
    }
})();