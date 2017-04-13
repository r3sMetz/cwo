var main = (function(){
    function setup(){
        //Hello, im there!
        console.log("main.js running");

        //FullPage
        $('#fullpage').fullpage();
    }

    return {
        setup: setup
    }
})();
$(document).ready(main.setup);