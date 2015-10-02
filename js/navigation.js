/*!
 *
 *  Copyright (c) David Bushell | http://dbushell.com/
 *
 */
(function($, window, document, undefined) {

    window.App = (function()
    {

        var _init = false, app = { };

        app.init = function()
        {
            if (_init) {
                return;
            }
            _init = true;

//            var nav_open = false,
//                $inner = $('#inner-wrap');
//
            
            $('#hamburger').on('click', function( ev ) {
                ev.preventDefault(); 
                $('html').toggleClass('opening');
                $('html').toggleClass('blocking');
                $('#content').toggleClass('slideout');
            });

            $('#blocker').on('click', function() {
                $('html').removeClass('blocking');
                $('html').removeClass('opening');
                $('#content').removeClass('slideout');
            });

//            $('#nav-open-btn').on('click', function()
//            {
//                if (!nav_open) {
//                    $inner.animate({ left: '70%' }, 500);
//                    nav_open = true;
//                    return false;
//                }
//            });
//
//            $('#nav-close-btn').on('click', function()
//            {
//                if (nav_open) {
//                    $inner.animate({ left: '0' }, 500);
//                    nav_open = false;
//                    return false;
//                }
//            });

            $(document.documentElement).addClass('js-ready');
        };

        return app;

    })();

    $.fn.ready(function()
    {
        window.App.init();
    });

})(jQuery, window, window.document);
