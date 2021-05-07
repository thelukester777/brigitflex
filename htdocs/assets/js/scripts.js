/*
    Slider
*/
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
});



jQuery(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});


    function trackPageView(pageTitle, pageURL) {
        callBack = function () {
            window.location = pageURL;
        };

        ga('send', {
            'hitType': 'pageview',
            'page'   : pageURL,
            'title'  : pageTitle,
            'hitCallback': callBack
        });
        
        return false;
    }

    $("a[id^='brigitEmail']").click(function() {
      trackPageView("Brigitflex@foxvalley.net Email Clicked", this.href);
    });
    $("a[id^='phoneNumber']").click(function() {
      trackPageView("Phone Number Clicked", this.href);
    });

});
