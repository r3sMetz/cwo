var main = (function(){
    function setup(){
        //Hello, im there!
        console.log("main.js running");

        //Scroll Events
        events.scroll();
    }

    return {
        setup: setup
    }
})();
$(document).ready(main.setup);
window.onpageshow = fadeOverlay.pageShow;