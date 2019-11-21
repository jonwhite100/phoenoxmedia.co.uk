console.log('Put custom JS in this file: understrap-child/src/js/custom-javascript.js!');

// preloader JavaScript
// Wait for window load
jQuery(window).load(function() {
	// Animate loader off screen
	jQuery(".se-pre-con").fadeOut("slow");
	// Stop carousel from autoplaying
	jQuery('#carousel-testimonials.carousel').carousel('pause');
});

jQuery(document).ready(function($) {
    // script to shrink header
	$(window).scroll(function () {
		if ($(window).scrollTop() > 100) {
			$('.navbar').addClass('shrink');
		}

		else{
			$('.navbar').removeClass('shrink');
		}
	});

    // script to scroll to each section by id using https://github.com/cferdinandi/smooth-scroll
    // var scroll = new SmoothScroll('a[href*="#"]');
	$('a[href^="#"]').on('click',function (e) {
		// e.preventDefault();
		var target = this.hash,
		$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top-120
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});

	// delay showing content until scrolled into view
	// ScrollReveal().reveal('.section-about .col-md-8', { delay: 500 });
	// ScrollReveal().reveal('.section-about .col-md-4', { delay: 500 });
	ScrollReveal().reveal('.section-testimonials .carousel', {
		delay: 200
	});
	ScrollReveal().reveal('.card-testimonials', { interval: 200 });
	ScrollReveal().reveal('.wp-block-image', {
		interval: 200
	});
	ScrollReveal().reveal('.blocks-gallery-item', { interval: 200 });

    // script for multi slides per BS carousel. From https://www.codeply.com/go/3EQkUOhhZz
	$('#carousel-films').carousel({
		interval: 6000
	})

	$('.carousel-multi-item .carousel-item').each(function(){
		var next = $(this).next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));

		for (var i=0;i<2;i++) {
			next=next.next();
			if (!next.length) {
				next = $(this).siblings(':first');
			}

			next.children(':first-child').clone().appendTo($(this));
		}
	});

});
