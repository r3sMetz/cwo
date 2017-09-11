var main = (function(){
    function setup(){
        //Hello, im there!
        console.log("main.js running");

        //SetAllFullHeight Elements to FullHeight
        //fullHeight.build();
    }

    return {
        setup: setup
    }
})();
$(document).ready(main.setup);