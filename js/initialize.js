jQuery(document).ready(function() {

    function sidrInit(){
        jQuery('#drawer-menu').sidr({
            side: 'right',
            displace: false,
            onOpen: function(drawerMenuPush) {
                jQuery("#drawer-menu").addClass('push');
            },
            onClose: function(drawerMenuPush) {
                jQuery("#drawer-menu").removeClass('push');
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
            },
            onClose: function(drawerMenuPush) {
                jQuery("#drawer-menu").removeClass('push');
            }
        });

        jQuery(".sidr").addClass('displace');
    }

    function sidrSelect(){
        if ($(window).width() > 640) {
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
});