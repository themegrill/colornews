jQuery( document ).ready( function() {
	jQuery( '.search-icon' ).click( function() {
		jQuery( '.search-box' ).toggleClass( 'active' );
	} );

	jQuery( '.close' ).click( function() {
		jQuery( '.search-box' ).removeClass( 'active' );
	} );

	/******** bx-slider ***********/
	jQuery( '.bxslider' ).bxSlider( {
		pagerCustom: '.bx-pager',
		controls   : false,
		auto       : true
	} );

	jQuery( '.carousel-slider' ).bxSlider( {
		minSlides  : 5,
		maxSlides  : 8,
		slideWidth : 133,
		slideMargin: 7,
		pager      : false
	} );

	jQuery( '.category-toggle-block' ).click( function() {
		jQuery( '.category-menu' ).slideToggle();
	} );

	jQuery( '#site-navigation .menu-toggle' ).click( function() {
		jQuery( '#site-navigation .menu' ).slideToggle( 'slow' );
	} );

	jQuery( '#site-navigation .menu-item-has-children' ).append( '<span class="sub-toggle"> <i class="fa fa-angle-right"></i> </span>' );

	jQuery( '#site-navigation .sub-toggle' ).click( function() {
		jQuery( this ).parent( '.menu-item-has-children' ).children( 'ul.sub-menu' ).first().slideToggle( '1000' );
		jQuery( this ).children( '.fa-angle-right' ).first().toggleClass( 'fa-angle-down' );
	} );

	// scroll up setting
	jQuery( '#scroll-up' ).hide();
	jQuery( function() {
		jQuery( window ).scroll( function() {
			if ( jQuery( this ).scrollTop() > 800 ) {
				jQuery( '#scroll-up' ).fadeIn();
			} else {
				jQuery( '#scroll-up' ).fadeOut();
			}
		} );
		jQuery( 'a#scroll-up' ).click( function() {
			jQuery( 'body,html' ).animate( {
				scrollTop: 0
			}, 1400 );
			return false;
		} );
	} );

	/* FitVids Setting */
	jQuery( '.fitvids-video' ).fitVids();

} );
jQuery( document ).on( 'click', '#site-navigation .menu li.menu-item-has-children > a', function( event ) {
	var menuClass = jQuery( this ).parent( '.menu-item-has-children' );
	if ( ! menuClass.hasClass( 'focus' ) ) {
		menuClass.addClass( 'focus' );
		event.preventDefault();
		menuClass.children( '.sub-menu' ).css( {
			'display': 'block'
		} );
	}
} );

/**
 * Fix: menu out of viewport.
 */
( function() {

	// Create a custom function.
	jQuery.fn.isInViewport = function() {

		// Return if no valid element.
		if ( this.length < 1 )
			return;

		var subMenu = this;

		if ( 'function' === typeof jQuery && subMenu instanceof jQuery ) {
			subMenu = subMenu[ 0 ];
		}

		// In case browser doesn't support getBoundingClientRect function.
		if ( 'function' === typeof subMenu.getBoundingClientRect ) {

			var rect = subMenu.getBoundingClientRect(),
			    html = html || document.documentElement;

			if ( rect.right > ( window.innerWidth || html.clientWidth ) ) {
				return 'sub-menu--left'; // menu goes out of viewport from right.
			} else if ( rect.left < 0 ) {
				return 'sub-menu--right'; // menu goes out of viewport from left.
			} else {
				return false;
			}
		}

	};

	jQuery( window ).resize( function() {

		var subMenu,
		    menuItem = jQuery( '#site-navigation .menu-item-has-children, #site-navigation .page_item_has_children' );

		menuItem.hover( function() {

			subMenu = jQuery( this ).children( 'ul.sub-menu, ul.children' );

			var viewportClass = subMenu.isInViewport();

			if ( false !== viewportClass ) {
				subMenu.addClass( viewportClass );
			}

		}, function() {

			menuItem.children( 'ul.sub-menu, ul.children' ).removeClass( 'sub-menu--left sub-menu--right' );

		} );

	} ).resize();

} )();
