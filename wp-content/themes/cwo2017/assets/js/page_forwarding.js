var page_forwarding = (function(){
    /*** Private ***/
    var forwardingOptions = {
        time_initial: 5,
        time: null,
        href: null,
        headline: null,
        the_countdown: null
    };


    function showForwardingProcess(){
        if(!forwardingOptions.headline) {
            //Create Headline
            var headline = document.createElement('h3');

            //Button Builing
            var interupt_button = document.createElement('span');

            interupt_button.className = "cwo-btn cwo-btn-red forwardInterupt";
            interupt_button.innerHTML = "Abbrechen";
            interupt_button.style.fontSize= '16px';


            //Headline Building
            headline.innerHTML = "Du wirst weitergeleitet:<br class='hidden-xs'>"+forwardingOptions.href+" <br/>in <span class='forwarding_secs'>" + forwardingOptions.time_initial + "</span>s<br/>";
            headline.className = "color-white";
            headline.id = "forwardLine";

            //Append Headline and add it do forwarding Options
            $('#fadeOverlay').append(headline);
            forwardingOptions.headline = $('#forwardLine');

            //Append Interuptt To Headline and Build Click Event
            forwardingOptions.headline.append(interupt_button);
            $('.forwardInterupt').on('click',executeInterupt);
        }

        //Show Headline and StartCountdown
        forwardingOptions.time = forwardingOptions.time_initial;
        forwardingOptions.headline.children('.forwarding_secs').text(forwardingOptions.time_initial);
        forwardingOptions.headline.animate({'opacity':1},device.transitions.short,startCountDown);
    }

    function startCountDown(){
        var seconds = forwardingOptions.headline.children('.forwarding_secs');
        forwardingOptions.the_countdown = setInterval(function(){
            if(forwardingOptions.time > 0) {
                forwardingOptions.time--;
                seconds.text(forwardingOptions.time);
            }
            else {
                clearInterval(forwardingOptions.the_countdown);
                forwardingOptions.headline.animate({'opacity':0},device.transitions.short,function () {
                   window.location.href = forwardingOptions.href;
                });
            }
        },1000)
    }

    function executeInterupt(){
        if(forwardingOptions.the_countdown){
            clearInterval(forwardingOptions.the_countdown);
            forwardingOptions.headline.animate({'opacity':0},device.transitions.short,function () {
               forwardingOptions.headline.children('.forwarding_secs').text(forwardingOptions.time_initial);
               fadeOverlay.hide();
            });
        }
    }



    /*** Public ***/
    function setup(){
        $('.forwardLink').on('click',function(event){
            event.preventDefault();
            forwardingOptions.href = this.getAttribute('href');
            fadeOverlay.show(true,showForwardingProcess);
        })
    }

    return {
        setup: setup
    }
})();