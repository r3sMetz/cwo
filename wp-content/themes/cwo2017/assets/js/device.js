var device = (function () {

    /**
     * @Desc Mobile Check with Regular Expression
     */
    function isMobile() {
        var mobileExp = new RegExp('/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/');
        return mobileExp.test(navigator.userAgent);
    }


    /**
     * @Desc Disables/Enables Mobile Touch Scrolling
     */
    function toggleScrollability(control) {
        //Disable
        if (control == 0) {
            document.ontouchmove = function (e) {
                e.preventDefault();
            };
        }

        //Enable
        else if (control == 1) {
            document.ontouchmove = function (e) {
                return true;
            };
        }
    }


    /**
     * @Desc Get the Browser of Device
     */
    function getBrowser() {
        if ((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1) {
            return('Opera');
        }
        else if (navigator.userAgent.indexOf("Chrome") != -1) {
            return('Chrome');
        }
        else if (navigator.userAgent.indexOf("Safari") != -1) {
            if(isMobile())
                return('Safari iOS');
            else
                return ('Safari');
        }
        else if (navigator.userAgent.indexOf("Firefox") != -1) {
            return('Firefox');
        }
        else if ((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
        {
            return('IE');
        }
        else {
            return('unknown');
        }
    }


    /**
     * @Desc: Object for Bootstrap(Version) Screen-Sizes
     */
    var screen = {
        sm: 768,
        md: 992,
        lg: 1200,
        xl: 1450
    };




    return {
        screen              : screen,
        isMobile            : isMobile(),
        toggleScrollability : toggleScrollability,
        browser             : getBrowser()
    }
})();