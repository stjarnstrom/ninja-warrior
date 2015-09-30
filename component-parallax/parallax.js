/* parallaxian */

(function($, b, c) {

    function d(a) {
        return {
            "-webkit-transform": a,
            "-moz-transform": a,
            "-ms-transform": a,
            transform: a
        }
    }

    var e = null, f = null, g = null, h = function() {
        e && e.add(f).add(g).each(function() {
            var b = $(this), c = {
                top: parseFloat(b.parent().offset().top, 10),
                height: parseFloat(b.height(), 10),
                depth: 0,
                middle: 0,
                hasLimitAfter: b.hasClass("parallax-limit"),
                hasLimitBefore: b.hasClass("parallax-limit-before")
            }, d = b.data("parallax-depth");
            d && (c.depth = parseFloat(d, 10)), c.middle = c.top + .5 * c.height, b.data("parallax-data", c)
        })
    }, i = function() {
        if (e) {
            var scrollOffset = $(b).scrollTop(), height = $(b).height(), i = scrollOffset + .4 * height;

            e.each(function() {
                var b = $(this), c = b.data("parallax-data"), e = (i - c.middle)*-.02 * c.depth;

                c.hasLimitAfter && (e = Math.min(0, e)), c.hasLimitBefore && (e = Math.max(0, e)), b.css(d("translate3d(0px, " + e + "px, 0px)"))
            }), i = c + .5 * h, f.each(function() {
                var b = $(this), d = b.data("parallax-data"), e = d.top, f = d.height;
                if (!(e > c + h || c > e + f)) {
                    var g = e + .5 * f, j = (i - g)*-.3;
                    $(this).css({
                        "background-position": "50% " + j + "px"
                    })
                }
            }), g.each(function() {
                var b = $(this), e = b.data("parallax-data"), f = e.top, g = e.height;
                if (!(f > c + h || c > f + g)) {
                    var j = .4 * (i - e.middle);
                    b.css(d("translate3d(0px, " + j + "px, 0px)"))
                }
            })
        }
    };

    $(b).on("load content-change debouncedresize", function() {
        h()
    }), $(b).on("load scroll content-change debouncedresize", function() {
        i()
    }), $(function() {
        e = $(".parallax.parallax-position-y"), f = $(".parallax.parallax-background-y"), g = $(".parallax.parallax-background-translate-y"), h(), i()
    })
}(jQuery, window, document));



/* background parallax */

(function($) {
    var updatePosition = function( bimg ) {
        bimg.each( function( ) {
            var a = .1;
            var b = $( this );
            var offset
                = parseFloat( b.offset().top, 10 );

            $( this ).css( "background-position", "center " + ($( window ).scrollTop() - offset ) * a + "px" );
        });
    };



    $(function() {
        var bimg = $( ".parallax-background" );
        $( window ).on( "load scroll", function( ) {
            updatePosition( bimg );
        });
    });
})(jQuery);