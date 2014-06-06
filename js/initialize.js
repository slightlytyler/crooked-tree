 // Some vars

var innerHeight = jQuery('.inner-page').outerHeight(true);
var windowHeight = jQuery(window).height();
var windowWidth = jQuery(window).width();
var welcomeHeight = jQuery('#welcome').outerHeight();
var originsHeight = windowHeight - welcomeHeight;
var originsInnerHeight = jQuery('#origins .description').outerHeight(true);
var mobileScrollDisable = false; // default



jQuery(window).resize(function() {
    windowHeight = jQuery(window).height()
    windowWidth = jQuery(window).width();
});

jQuery(document).ready(function() {

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

    pageInit();

    setSkrollr();

    skrollrSingleton();
   
});

 function pageInit(){

    innerHeight = jQuery('.inner-page').outerHeight(true);
    windowHeight = jQuery(window).height();
    windowWidth = jQuery(window).width();
    welcomeHeight = jQuery('#welcome').outerHeight();
    originsHeight = windowHeight - welcomeHeight;
    originsInnerHeight = jQuery('#origins .description').outerHeight(true);


    // About desktop enhancements

    if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
        jQuery('#about-us-info .title').css('top', windowHeight / 2); // v center title
        jQuery('#about-us-info .title').css('left', windowWidth / 2); // h center title
        jQuery('#about-us-info .title').addClass('centered'); // centered prop

        if(windowHeight > (originsInnerHeight + welcomeHeight)){ // Origins Heights
            jQuery('#origins').height(originsHeight);
        }

        jQuery(window).resize(function() {
            jQuery('#about-us-info .title').css('top', windowHeight / 2); // v center title
            jQuery('#about-us-info .title').css('left', windowWidth / 2); // h center title

            if(windowHeight > (originsInnerHeight + welcomeHeight)){ // Origins Heights
                jQuery('#origins').height(originsHeight);
            }
        });
    }


    // About us welcome push

    jQuery('#about-us-info').css('margin-top', windowHeight);

    jQuery(window).resize(function() {
        jQuery('#about-us-info').css('margin-top', windowHeight);
    });

    // Page height fix

    if ( innerHeight < windowHeight ){
        jQuery('.outer-page').addClass('fill');
    }

    jQuery(window).resize(function() {
        if (innerHeight < windowHeight){
            jQuery('.outer-page').addClass('fill');
        }
        else {
            jQuery('.outer-page').removeClass('fill');
        }
    });

    // Smooth hash navigation

    jQuery('a.hash-nav').click(function(){
        jQuery('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 700);
        return false;
    });

    // Close sidr on nav link click

    jQuery('li.page_item, #drawer-home').click(function(){
        jQuery.sidr('close', 'sidr');
    });

    // Set jQuery Picture

    $('picture').picture();
 }

 // Scroll to top

 function scrollToTop(){
    $("html, body").animate({ scrollTop: 0 }, "slow");
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

function setSkrollr(){
    // Pass Skrollr init. ! Make this last in the init stack. Any changes to the dom after this will need to be refreshed in skrollr. !

    if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
        skrollr = skrollr.init({
            forceHeight: false
        });
    }
}

// Disable scroll for when drawer opens

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

function skrollrSingleton(){
    jQuery('.lazy-load.fade').each(function(){
        $(this).removeAttr('data-edge-strategy data-top-bottom data-bottom-top');
        console.log('ughhh');
    });
    skrollr.refresh();

    $(window).scroll(function(){
        jQuery('.lazy-load.fade').each(function(){
            $(this).removeAttr('data-edge-strategy data-top-bottom data-bottom-top');
            console.log('ughhh');
        });
        skrollr.refresh();
    });
}