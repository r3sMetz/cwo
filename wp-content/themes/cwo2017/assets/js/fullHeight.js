var fullHeight = (function(){
    function fullHeightAll(){
        if(!device.isMobile){
            $('.full_height_element').css('height',device.height()+'px');
        }
    }

    return {
        build : fullHeightAll
    }
})();