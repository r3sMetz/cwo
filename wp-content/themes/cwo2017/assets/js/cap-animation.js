var capAnimation = (function(){

    /** Public **/
    function setup(){
        if(!device.isMobile && device.width() >= device.screen.md) {
            //Set Cap Jquery Object
            var the_cap = $('#the_cap');

            //Show that cap has Interaction
            the_cap.addClass('playable');

            //Init Laugh Array
            var all_laughs = Array(4);

            //Load All Laughs
            $.each(all_laughs, function (index) {
                all_laughs[index] = new Audio(defaults.template_directory_uri + '/assets/wav/lache_' + index + '.wav')
            });


            //Set Intervall for Cap Animation
            setInterval(function () {
                the_cap.toggleClass('moving');
            }, 2500);


            //Set Click Event for the Cap
            the_cap.on('click', function () {
                var the_laugh = all_laughs[Math.floor(Math.random() * all_laughs.length)];

                the_laugh.play();
            })
        }
    }

    return {
        setup : setup
    }
})();