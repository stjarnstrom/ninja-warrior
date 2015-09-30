(function($) {
    $(function( ) {
        $( window ).on("ready load scroll resize content-change", function() {
            var c = $( window ).scrollTop(), d = $( window ).height(), e = 200;

            $(".reveal:not(.reveal-in-view)").each( function( ) {
                var b = $(this);
                b.css("transition-delay", e + "ms");
                var f = parseInt(b.offset().top, 10);

                if (c + d >= f + 100) {
                  b.addClass("reveal-in-view");
                  e += 25;
                }
            });
        });
    });
})(jQuery);