/*
 * Settings of the sticky menu
 */

jQuery(document).ready(function(){
   var wpAdminBar = jQuery('#wpadminbar');
   if (wpAdminBar.length) {
      jQuery(".bottom-header-wrapper").sticky({topSpacing:wpAdminBar.height()});
   } else {
      jQuery(".bottom-header-wrapper").sticky({topSpacing:0});
   }
});