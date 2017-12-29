var main = (function(){
    function setup(){
        //Hello, im there!
        console.log("main.js running");

        //Scroll Events
        events.scroll();

        //Single Galerie: Slider(both)
        if($('.single-galerien_content').length) galerieSlider.setup();
    }

    return {
        setup: setup
    }
})();
$(document).ready(main.setup);
window.onpageshow = fadeOverlay.pageShow;