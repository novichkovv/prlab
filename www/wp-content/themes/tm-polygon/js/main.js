/*--------------------------------------------------------------
 Custom js
 --------------------------------------------------------------*/
var snapper = new Snap( {
	element: document.getElementById( 'page' ),
	dragger: document.getElementsByClassName( 'page' ),
	disable: 'right',
	slideIntent: 10,
} );
if(jQuery('#open-left').length > 0) {
	var addEvent = function addEvent(element, eventName, func) {
		if (element.addEventListener) {
			return element.addEventListener(eventName, func, false);
		} else if (element.attachEvent) {
			return element.attachEvent("on" + eventName, func);
		}
	};
	addEvent(document.getElementById('open-left'), 'click', function () {
		snapper.open('left');
	});
}
jQuery( document ).ready( function ( $ ) {
	'use strict';

	// mini-cart
	var $mini_cart = $( '.mini-cart' );
	$mini_cart.on( 'click', function ( e ) {
		$( this ).addClass( 'open' );
	} );

	$( document ).on( 'click', function ( e ) {
		if ( $( e.target ).closest( $mini_cart ).length == 0 ) {
			$mini_cart.removeClass( 'open' );
		}
	} );

	// search in menu
	var $search_btn = $( '.search-box > i' ),
		$search_form = $( 'form.search-form' );

	$search_btn.on( 'click', function () {
		$search_form.toggleClass( 'open' );
	} );

	$( document ).on( 'click', function ( e ) {
		if ( $( e.target ).closest( $search_btn ).length == 0
		     && $( e.target ).closest( 'input.search-field' ).length == 0
		     && $search_form.hasClass( 'open' ) ) {
			$search_form.removeClass( 'open' );
		}
	} );

	$( '.counter' ).counterUp( {
		delay: 10,
		time: 3000
	} );

	$('.vc_row.matchHeight .wpb_column').matchHeight();

	window.sr = new scrollReveal();

	$( '.close-message-box' ).on( 'click', function () {
		$( this).closest('.vc_message_box').hide(100);
	} );

	$( '.countdown-clock' ).each(function( index ) {
		var endDay, year, month, day, hours, minutes, seconds, type, selectedType;
		year = $(this).attr('data-year');
		month = $(this).attr('data-month');
		day = $(this).attr('data-day');
		hours = $(this).attr('data-hour');
		minutes = $(this).attr('data-minute');
		seconds = $(this).attr('data-second');
		type = new Array();
		selectedType = $(this).attr('data-type');

		type['type01'] = '<h1>{dn} <sup><h5>{dl}</h5></sup></h1>' +
						 '<h1>{hn} <sup><h5>{hl}</h5></sup></h1>' +
						 '<h1>{mn} <sup><h5>{ml}</h5></sup></h1>' +
						 '<h1>{sn} <sup><h5>{sl}</h5></sup></h1>';
		type['type02'] = '<div><h1>{dn}</h1><h5>{dl}</h5></div>' +
						'<h1>:</h1>' +
						'<div><h1>{hn}</h1><h5>{hl}</h5></div>' +
						'<h1>:</h1>' +
						'<div><h1>{mn}</h1><h5>{ml}</h5></div>' +
						'<h1>:</h1>' +
						'<div><h1>{sn}</h1><h5>{sl}</h5></div>';
		endDay = new Date(year, month, day, hours, minutes, seconds);
		$( this ).countdown({until: endDay, padZeroes: true,
			layout: type[selectedType]});
	});

	$(".carousel-partners .wpb_image_grid_ul").owlCarousel(
		{
			responsive: {
				0: {
					items: 1,
				},
				768: {
					items: 3,
				},
				1199: {
					items: 5,
				},
			},

			nav: false,
			margin: 0,
			dots: false,
			autoplay: false,
			autoHeight : true,
			center: true,
			loop:true,
		}
	);

	// Partners Carousel.
	var owl = $('.carousel-partners .wpb_image_grid_ul');
	$(".owl-next").live('click', function(){
		if(owl.length > 0) {
			owl.data('owlCarousel').next();
		}
	});

	$(".owl-prev").live('click', function(){
		if(owl.length > 0) {
			owl.data('owlCarousel').prev();
		}
	})

	// Fitvids.
	$(".container").fitVids();
	// post's gallery
	$(".post-gallery.slider").owlCarousel(
		{
			items: 1,
			nav: true,
			dots: false,
			loop: true,
			autoHeight:true,
			autoplay: true,
			autoplayHoverPause: true,
			autoplayTimeout: 3000,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn'
		}
	);


} );