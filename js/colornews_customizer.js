/**
 * Theme Customizer related js
 */
/* global colornews_customizer_obj */
jQuery(document).ready(function() {

   jQuery('#customize-info .preview-notice').append(
		'<a class="themegrill-pro-info" href="https://themegrill.com/themes/colornews-pro/" target="_blank">{pro}</a>'
		.replace('{pro}',colornews_customizer_obj.pro));

});