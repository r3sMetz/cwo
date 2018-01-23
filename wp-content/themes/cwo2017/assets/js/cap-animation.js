var capAnimation = (function(){
    /** Public **/
    function setup(){
        //Set Options
        var the_cap = $('#the_cap');


        //Set Intervall
        setInterval(function(){
            the_cap.toggleClass('moving');
        },2500)
    }

    return {
        setup : setup
    }
})();