var main = (function(){
    function setup(){
        //Hello, im there!
        console.log("main.js running!!!");
    }

    return {
        setup: setup
    }
})();
$(document).ready(main.setup);