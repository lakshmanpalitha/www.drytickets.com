!function(a) {
    a.fn.equalHeights = function() {
        var b = 0, c = a(this);
        return c.each(function() {
            var c = a(this).innerHeight();
            c > b && (b = c)
        }), c.css("height", b)
    }, a("[data-equal]").each(function() {
        var b = a(this), c = b.data("equal");
        b.find(c).equalHeights()
    })
}(jQuery);
jQuery(document).ready(function() {
    //Set up the Slider 
    if (jQuery(window).width() > 991) {
        setTimeout(function() {
            for (var i = 0; i < 15; i++) {
                jQuery('#primary-home .row-' + i + ' article').equalHeights();
            }
        }, 1250);

        jQuery("#top-search-btn").click(function() {
            //if(jQuery(".site").offset().top != 0){
            jQuery("html, body").animate(
                    {scrollTop: "0px"}, 500, function() {

            });
            // }


            if (jQuery("#top-search").css('display') == 'none') {
                jQuery("#top-search").slideDown("slow");
            } else {
                jQuery("#top-search").slideUp("slow");
            }

        });


    }

    jQuery('.main-navigation .menu ul').superfish({
        delay: 1000, // 1 second avoids dropdown from suddenly disappearing
        animation: {opacity: 'show'}, // fade-in and slide-down animation
        speed: 'fast', // faster animation speed
        autoArrows: false                            // disable generation of arrow mark-up
    });

    jQuery('.menu-toggle').toggle(function() {
        jQuery('#site-navigation ul.menu').slideDown();
        jQuery('#site-navigation div.menu').fadeIn();
    },
            function() {
                jQuery('#site-navigation ul.menu').hide();
                jQuery('#site-navigation div.menu').hide();
            });

    jQuery(window).bind('scroll', function(e) {
        hefct();
    });

    if (jQuery(window).width() > 992) {
        //  jQuery('#primary-home article').css( 'height', jQuery(this).parent('.row').height() ); 
        //  jQuery('#primary-home article').css( 'height', jQuery(this).parent('.row').height() );
    }
});
function hefct() {
    var scrollPosition = jQuery(window).scrollTop();
    jQuery('#parallax-bg').css('top', (0 - (scrollPosition * .2)) + 'px');
}

//Filter events-Lakmal
try {
    jQuery(document).on('click', '#event_filter_icon li:nth-child(1)', function() {
		
		
		jQuery(".category-evets").hide(0);
        jQuery(".category-now-on-sell").show(0);
        //jQuery(".category-evets img").addClass('hide-event').removeClass('show-event');
        //jQuery(".category-now-on-sell img").addClass('show-event').removeClass('hide-event');
    });

    jQuery(document).on('click', '#event_filter_icon li:nth-child(2)', function() {
        //jQuery(".category-evets").css("display", "none");
        //jQuery(".category-upcoming-events").css("display", "block");
		
		jQuery(".category-evets").hide(0);
        jQuery(".category-upcoming-events").show(0);
        //jQuery(".category-evets img").addClass('hide-event').removeClass('show-event');
        //jQuery(".category-upcoming-events img").addClass('show-event').removeClass('hide-event');
    });

    jQuery(document).on('click', '#event_filter_icon li:nth-child(3)', function() {
        //jQuery(".category-evets").css("display", "none");
        //jQuery(".category-past-events").css("display", "block");
		
		jQuery(".category-evets").hide(0);
        jQuery(".category-past-events").show(0);
        //jQuery(".category-evets img").addClass('hide-event').removeClass('show-event');
        //jQuery(".category-past-eventss img").addClass('show-event').removeClass('hide-event');
    });
}
catch (err) {
    console.log(err.message);
}


