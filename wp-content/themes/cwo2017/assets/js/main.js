var main = (function(){
    function setup(){
        //Hello, im there!
        console.log("main.js running");

        //Events
        events.scroll();
        events.click();

        // ForwadLinking
        page_forwarding.setup();

        //Frontpage: History Slider
        if($('.the_history').length) historySlider.setup();

        //Single Galerie: Slider(both)
        if($('#the_galery_slider').length) galerieSlider.setup();

        //Reframe Iframe (Page Horst)
        if($('.page-memorial_content').length) $('iframe').reframe();

        //CapAnimation
        if($('#the_cap').length) capAnimation.setup();

        //Contact
        if($('#cwo_contact').length) cwoContact.setup();

        //EventTime Switcher
        if($('#fragment_slider').length) eventsTimeSwitcher.setup();
    }

    return {
        setup: setup
    }
})();
$(document).ready(main.setup);
window.onpageshow = fadeOverlay.pageShow;