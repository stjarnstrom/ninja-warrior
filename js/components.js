!function($,a,t){function n(a){return{"-webkit-transform":a,"-moz-transform":a,"-ms-transform":a,transform:a}}var o=null,i=null,e=null,r=function(){o&&o.add(i).add(e).each(function(){var a=$(this),t={top:parseFloat(a.parent().offset().top,10),height:parseFloat(a.height(),10),depth:0,middle:0,hasLimitAfter:a.hasClass("parallax-limit"),hasLimitBefore:a.hasClass("parallax-limit-before")},n=a.data("parallax-depth");n&&(t.depth=parseFloat(n,10)),t.middle=t.top+.5*t.height,a.data("parallax-data",t)})},l=function(){if(o){var l=$(a).scrollTop(),s=$(a).height(),d=l+.4*s;o.each(function(){var a=$(this),t=a.data("parallax-data"),o=(d-t.middle)*-.02*t.depth;t.hasLimitAfter&&(o=Math.min(0,o)),t.hasLimitBefore&&(o=Math.max(0,o)),a.css(n("translate3d(0px, "+o+"px, 0px)"))}),d=t+.5*r,i.each(function(){var a=$(this),n=a.data("parallax-data"),o=n.top,i=n.height;if(!(o>t+r||t>o+i)){var e=o+.5*i,l=(d-e)*-.3;$(this).css({"background-position":"50% "+l+"px"})}}),e.each(function(){var a=$(this),o=a.data("parallax-data"),i=o.top,e=o.height;if(!(i>t+r||t>i+e)){var l=.4*(d-o.middle);a.css(n("translate3d(0px, "+l+"px, 0px)"))}})}};$(a).on("load content-change debouncedresize",function(){r()}),$(a).on("load scroll content-change debouncedresize",function(){l()}),$(function(){o=$(".parallax.parallax-position-y"),i=$(".parallax.parallax-background-y"),e=$(".parallax.parallax-background-translate-y"),r(),l()})}(jQuery,window,document);var updatePosition=function(a){a.each(function(){var a=.1,t=$(this),n=parseFloat(t.offset().top,10);$(this).css("background-position","center "+($(window).scrollTop()-n)*a+"px")})};$(function(){var a=$(".parallax-background");$(window).on("load scroll",function(){updatePosition(a)})}),$(function(){$(window).on("ready load scroll resize content-change",function(){var a=$(window).scrollTop(),t=$(window).height(),n=200;$(".reveal:not(.reveal-in-view)").each(function(){var o=$(this);o.css("transition-delay",n+"ms");var i=parseInt(o.offset().top,10);a+t>=i+100&&(o.addClass("reveal-in-view"),n+=25)})})});