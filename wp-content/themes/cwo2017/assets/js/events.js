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
    }

    function setEventHandlerForScroll(){
        $(window).on('scroll',function(){
            console.log("Scroll");
            var pos    = $(window).scrollTop(),
                navbar = $('.cwo_navbar');

            if(pos > 0)
                navbar.addClass('scrolled');
            else
                navbar.removeClass('scrolled');
        })
    }



    return {
        window : setEventHandlerForWindow,
        click  : setEventHandlerForClick,
        scroll : setEventHandlerForScroll
    }
})();