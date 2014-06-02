jQuery(document).ready(function() {
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
});