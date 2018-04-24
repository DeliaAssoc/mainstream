$( document ).ready( function() {

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
		dots: true,
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
});
