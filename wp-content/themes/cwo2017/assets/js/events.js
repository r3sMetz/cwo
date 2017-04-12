var events = (function(){

    function setEventHandlerForWindow(){
        //Mobile or Desktop Window-Event
        var windowEvent = device.isMobile ? 'orientationchange' : 'resize';
        $(window).on(windowEvent,function(){

        });
    }
    function setEventHandlerForClick(){}

    function setEventHandlerForScroll(){

    }



    return {
        window : setEventHandlerForWindow,
        click  : setEventHandlerForClick,
        scroll : setEventHandlerForScroll
    }
})();