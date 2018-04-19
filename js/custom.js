$( document ).ready( function() {

	// Hide top bar on scroll
	$( window ).scroll( function(){

		var auxHeader = $( '.aux-header' ),
			wScroll = $( this ).scrollTop();

			if ( wScroll > 300 ) {
				auxHeader.addClass( 'scrolled' );
			} else {
				auxHeader.removeClass( 'scrolled' );
			}
	});

	$('.slider').slick({
		// autoplay: true,
		autoplaySpeed: 5000
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
