var main = (function(){
    function setup(){
        //Hello, im there!
        console.log("main.js running");

        //Events
        events.scroll();
        events.click();

        //Single Galerie: Slider(both)
        if($('.single-galerien_content').length) galerieSlider.setup();

        //Reframe Iframe (Page Horst)
        if($('.page-memorial_content').length) $('iframe').reframe();
    }

    return {
        setup: setup
    }
})();
$(document).ready(main.setup);
window.onpageshow = fadeOverlay.pageShow;