var header = $('.fixed-menu');
var header1 = $('.right1');
var contentq = $('.content-q');
/* чтобы при нажатии на "Показать еще" не появлялось второе меню */
$('.ias-trigger a').on('click', function() {
    header1.removeClass('out');
});

$(window).scroll(function() {
	var scrolled = $(window).scrollTop();

	if ( scrolled > 33) {
		header.addClass('position-fixed');
		contentq.addClass('content-scroll');
	} else {
		header.removeClass('position-fixed');
		contentq.removeClass('content-scroll');
	}
 
	if ( scrolled > 100 && scrolled > scrollPrev ) {
		header1.addClass('out');
	} else {
		header1.removeClass('out');
	}
	scrollPrev = scrolled;
}); 