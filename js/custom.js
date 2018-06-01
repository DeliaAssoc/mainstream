$( document ).ready( function() {

	// Open search form
	$( 'a.search' ).on( 'click', function( e ){

			e.preventDefault();
			
			if ( $('.search-field').hasClass( 'opened' ) ) {
				$('.search-field').removeClass( 'opened' );
			} else {
				$('.search-field').addClass( 'opened' );
			}
	});

	// Hide top bar on scroll
	$( window ).scroll( function(){

		var auxHeader = $( '.aux-header' ),
			wScroll = $( this ).scrollTop(),
			mobileBtn = $( '#responsive-menu-button' );

			if ( wScroll > 300 ) {
				auxHeader.addClass( 'scrolled' );
				mobileBtn.addClass( 'scrolled' )
			} else {
				auxHeader.removeClass( 'scrolled' );
				mobileBtn.removeClass( 'scrolled' );
			}
	});

	// HOMEPAGE SLIDER
	$('.slider').slick({
		// autoplay: true,
		autoplaySpeed: 5000
	});

	// DEFAULT PAGE SLIDER
	$( '.default-slider' ).slick();

	// PRODUCT PAGE SLIDER
	$( '.product-slider' ).slick();

	// LITERATURE PAGE SLIDER
	$( '.media-slider' ).slick();

	// SUCCESS SLIDER
	$('.success-slider').slick({
		infinite: false,
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		responsive: [
			{
				breakpoint: 641,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	  });

	// Tab functionality
	$( '[data-ref="products"]' ).addClass( 'active' );

	// Set 1st product tab and tab content to visible on page load 
	$( '.tabs' ).find( 'li' ).first().find( 'a' ).addClass( 'active' );
	$( '.tab-content' ).find( '.tab-block' ).first().addClass( 'visible' )

	$( '.tabs a' ).on( 'click', function( e ) {
		
		e.preventDefault();

		$ref = $( this ).data( 'ref' ),
		$product = $( '#product' ),
		$success = $( '#success' );

		$( '.tabs a' ).removeClass( 'active' );

		if ( $ref == 'products' ) {
			$( this ).addClass( 'active' );
			$success.removeClass( 'visible' );
			$product.addClass( 'visible' );
		} else if ( $ref == 'success' ) {
			$( this ).addClass( 'active' );
			$product.removeClass( 'visible' );
			$success.addClass( 'visible' );
		}
	  });

	// Smooth Scroll for Back To Top Button *Thank you CSS-TRICKS*
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
				return false;
			}
		}
	});

	// Show/Hide Back to Top button on scroll
	$( window ).on( 'scroll', function()
	{
		var $scrolled = $( window ).scrollTop(),
			$btt = $( '.back-to-top' );

		if ( $scrolled > 100 )
		{
			$btt.addClass( 'visible' );
		} else if ( $scrolled < 100 )
		{
			$btt.removeClass( 'visible' );
		}
	});

	// Toggle ShiftNav Menu
	// $body = $( 'body' ),
	// $menuItem = $( '.open-nav' );
	// $shiftMenu = $( '.shiftnav' );

	// $menuItem.on( 'click', function( e ){

	// 	e.preventDefault();
	// 	// $body.toggleClass( 'menu-open' );
	// 	$body.toggleClass( 'shiftnav-open shiftnav-open-left' );
	// 	$shiftMenu.toggleClass( 'shiftnav-open shiftnav-open-target' );

	// });

	// Shift Navigation
	$hChild = $( '.menu-item-has-children' ),
	$mNav = $( '.main-navigation' ),
	$mButton = $( '#mobile-btn' ),
	$mClose = $( '.menu-close' ),
	$menuItem = $( '.open-nav' ),
	$sItem = $( '.shift' ),
	$shMenu = $( '.shift-nav' ),
	$site = $( '.site-wrapper' ),
	$subMenu = $( '.sub-menu' ),
	$sHeader = $( '.site-header' ),
	$pMenu = $shMenu.find( 'a:contains( "products" )' ),
	$sMenu = $shMenu.find( 'a:contains( "success" )' );

	// ADD MENU ICON TO ITEMS WITH SUBITEMS
	$hChild.append( '<a class="sub-icon"><i class="fas fa-bars"></i></a>' );

	// ADD BACK BUTTON TO SUBMENU
	$subMenu.prepend( '<a href="#" class="go-back"><i class="fas fa-chevron-circle-left"></i> Go Back</a>' );

	// PREPEND TITLE TO EACH SUBMENU
	$hChild.each( function(){

		$title = $( this ).find( 'a:first' ).text();
		$( this ).find( '.sub-menu' ).prepend( '<div class="sub-title">' + $title + '</div>' );
	});

	// OPEN SHIFT MENU AND SHIFT CONENT MOBILE
	$mButton.on( 'click', function( e ){

		e.preventDefault();

		$subMenu.removeClass( 'open' );

		if ( !$site.hasClass( 'open' ) ) {
			$site.addClass( 'open' );
		}

		if ( !$shMenu.hasClass( 'open' ) ) {
			$shMenu.addClass( 'open' );
		}

		if ( !$sHeader.hasClass( 'open' ) ) {
			$sHeader.addClass( 'open' );
		}
		
	});

	// CLOSE MENU AND SHIFT CONTENT BACK
	$mClose.on( 'click', function( e ){

		e.preventDefault();

		if ( $site.hasClass( 'open' ) ) {
			$site.removeClass( 'open' );
		}

		if ( !$shMenu.hasClass( 'open' ) ) {
			$shMenu.addClass( 'open' );
		} else {
			$shMenu.removeClass( 'open' );
		}

		if ( $sHeader.hasClass( 'open' ) ) {
			$sHeader.removeClass( 'open' );
		}
	});

	// OPEN SUBMENU
	$hChild.find( '.sub-icon' ).on( 'click', function( e ){

		e.preventDefault();

		if ( !$( this ).siblings( '.sub-menu' ).hasClass( 'open' ) ) {
			$( this ).siblings( '.sub-menu' ).addClass( 'open' );
		}

	});

	// CLOSE SUBMENU
	$( '.go-back' ).on( 'click', function( e ){

		e.preventDefault();

		if ( $( this ).closest( '.sub-menu' ).hasClass( 'open' ) ) {

			$( this ).closest( '.sub-menu' ).removeClass( 'open' )
		}
	});

	// OPEN SUBMENUS ON DESKTOP
	$sItem.on( 'click', function( e ){

		e.preventDefault();

		if ( !$shMenu.hasClass( 'open' ) ) {

			$shMenu.addClass( 'open' );
			$site.addClass( 'open' );
			$sHeader.addClass( 'open' );
			$subMenu.removeClass( 'open' );
		} 

		if ( $( this ).hasClass( 'products' ) ) {
			
			// If products item
			$shMenu.find( '.sub-menu' ).removeClass( 'open' );

			if ( !$( '#menu-item-397' ).find( '.sub-menu' ).hasClass( 'open' ) ) {

				$( '#menu-item-397' ).find( '.sub-menu' ).addClass( 'open' );
			}

		} else if ( $( this ).hasClass( 'success' ) ) {

			// If success item
			$shMenu.find( '.sub-menu' ).removeClass( 'open' );

			if ( !$( '#menu-item-428' ).find( '.sub-menu' ).hasClass( 'open' ) ) {

				$( '#menu-item-428' ).find( '.sub-menu' ).addClass( 'open' );
			}
		}

	});
});

