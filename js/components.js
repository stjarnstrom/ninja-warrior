!function($,a,t){function n(a){return{"-webkit-transform":a,"-moz-transform":a,"-ms-transform":a,transform:a}}var o=null,e=null,i=null,r=function(){o&&o.add(e).add(i).each(function(){var a=$(this),t={top:parseFloat(a.parent().offset().top,10),height:parseFloat(a.height(),10),depth:0,middle:0,hasLimitAfter:a.hasClass("parallax-limit"),hasLimitBefore:a.hasClass("parallax-limit-before")},n=a.data("parallax-depth");n&&(t.depth=parseFloat(n,10)),t.middle=t.top+.5*t.height,a.data("parallax-data",t)})},l=function(){if(o){var l=$(a).scrollTop(),s=$(a).height(),c=l+.4*s;o.each(function(){var a=$(this),t=a.data("parallax-data"),o=(c-t.middle)*-.02*t.depth;t.hasLimitAfter&&(o=Math.min(0,o)),t.hasLimitBefore&&(o=Math.max(0,o)),a.css(n("translate3d(0px, "+o+"px, 0px)"))}),c=t+.5*r,e.each(function(){var a=$(this),n=a.data("parallax-data"),o=n.top,e=n.height;if(!(o>t+r||t>o+e)){var i=o+.5*e,l=(c-i)*-.3;$(this).css({"background-position":"50% "+l+"px"})}}),i.each(function(){var a=$(this),o=a.data("parallax-data"),e=o.top,i=o.height;if(!(e>t+r||t>e+i)){var l=.4*(c-o.middle);a.css(n("translate3d(0px, "+l+"px, 0px)"))}})}};$(a).on("load content-change debouncedresize",function(){r()}),$(a).on("load scroll content-change debouncedresize",function(){l()}),$(function(){o=$(".parallax.parallax-position-y"),e=$(".parallax.parallax-background-y"),i=$(".parallax.parallax-background-translate-y"),r(),l()})}(jQuery,window,document),function($){var a=function(a){a.each(function(){var a=.1,t=$(this),n=parseFloat(t.offset().top,10);$(this).css("background-position","center "+($(window).scrollTop()-n)*a+"px")})};$(function(){var t=$(".parallax-background");$(window).on("load scroll",function(){a(t)})})}(jQuery),function($){$(function(){$(window).on("ready load scroll resize content-change",function(){var a=$(window).scrollTop(),t=$(window).height(),n=200;$(".reveal:not(.reveal-in-view)").each(function(){var o=$(this);o.css("transition-delay",n+"ms");var e=parseInt(o.offset().top,10);a+t>=e+100&&(o.addClass("reveal-in-view"),n+=25)})})})}(jQuery),function($){$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=$(this.hash);if(a=a.length?a:$("[name="+this.hash.slice(1)+"]"),a.length)return $("html,body").animate({scrollTop:a.offset().top},1e3),!1}})})}(jQuery);