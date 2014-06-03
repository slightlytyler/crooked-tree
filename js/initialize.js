jQuery(document).ready(function() {

    jQuery(window).load(function() {
         $("html,body").animate({scrollTop: 0}, 0);
    });

    // Disable scroll for when drawer opens

    var mobileScrollDisable = false; // default

    function disableScroll(){
        var scrollPosition = [
        self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
        self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
        ];
        var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
        html.data('scroll-position', scrollPosition);
        html.data('previous-overflow', html.css('overflow'));
        html.css('overflow', 'hidden');
        window.scrollTo(scrollPosition[0], scrollPosition[1]);
        mobileScrollDisable = true;
    }

    function enableScroll(){
        var html = jQuery('html');
        var scrollPosition = html.data('scroll-position');
        html.css('overflow', html.data('previous-overflow'));
        window.scrollTo(scrollPosition[0], scrollPosition[1])
        mobileScrollDisable = false;
    }

    // Sidr Inits

    function sidrInit(){
        jQuery('#drawer-menu').sidr({
            side: 'right',
            displace: false,
            onOpen: function(drawerMenuPush) {
                jQuery("#drawer-menu").addClass('push');
                disableScroll();
            },
            onClose: function(drawerMenuPush) {
                jQuery("#drawer-menu").removeClass('push');
                enableScroll();
            }
        });

        jQuery(".sidr").removeClass('displace');
    }

    function sidrMobileInit(){
        jQuery('#drawer-menu').sidr({
            side: 'right',
            displace: true,
            onOpen: function(drawerMenuPush) {
                jQuery("#drawer-menu").addClass('push');
                disableScroll();
            },
            onClose: function(drawerMenuPush) {
                jQuery("#drawer-menu").removeClass('push');
                enableScroll();
            }
        });

        jQuery(".sidr").addClass('displace');
    }

    function sidrSelect(){
        if (jQuery(window).width() > 640) {
           sidrInit()
        }
        else {
           sidrMobileInit();
        }
    }

    sidrSelect()

    jQuery(window).resize(function() {
        sidrSelect();
    });

    // Disable mobile scroll while drawer is open

    document.ontouchmove = function(e){
       if(mobileScrollDisable){
         e.preventDefault();
       } 
    }

    // Close Drawer when user clicks outside it

    $(document).mouseup(function (e) {
        var container = jQuery("#sidr");

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {   
            jQuery.sidr('close', 'sidr');
        }
    });

    document.addEventListener('touchstart', function(e) {
        var container = jQuery("#sidr");
        
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {   
            jQuery.sidr('close', 'sidr');
        }

    }, false);

    // Index height Fix;
    var innerHeight = jQuery('.inner-page').outerHeight(true);
    var windowHeight = jQuery(window).height()

    if ( innerHeight < windowHeight ){
        jQuery('.outer-page').addClass('fill');
    }

    jQuery(window).resize(function() {
        if (innerHeight < outerHeight){
            jQuery('.outer-page').addClass('fill');
        }
        else {
            jQuery('.outer-page').removeClass('fill');
        }
    });
});