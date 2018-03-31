var capAnimation = (function(){
    /** Private **/
    //Set Initial Laugh Status (which laugh has been choosen)
    var last_laugh = false;

    //Init Laugh Array
    var all_laughs = Array(4);

    //Recursive Laughfinder
    function findNewLaugh(){
        var the_laugh = Math.floor(Math.random() * all_laughs.length);

        if(the_laugh !== last_laugh)
            return the_laugh;
        else
            return findNewLaugh();
    }

    /** Public **/
    function setup(){
        //if(!device.isMobile && device.width() >= device.screen.md) {
            //Activate Tooltips
        	$('[data-toggle="tooltip"]').tooltip();

            //Set Cap Jquery Object
            var the_cap = $('#the_cap');

            //Show that cap has Interaction
            the_cap.addClass('playable');

            //Load All Laughs
            $.each(all_laughs, function (index) {
                all_laughs[index] = new Audio(defaults.template_directory_uri + '/assets/mp3/lache_' + index + '.mp3')
            });

            //Set Intervall for Cap Animation
            setInterval(function () {
                the_cap.toggleClass('moving');
            }, 2500);


            //Set Click Event for the Cap
            the_cap.on('click', function () {
                //Find new laugh and play it
                var new_laugh = findNewLaugh();
                all_laughs[new_laugh].play();

                //Set last laugh to current laugh
                last_laugh = new_laugh
            })
        //}
    }

    return {
        setup : setup
    }
})();