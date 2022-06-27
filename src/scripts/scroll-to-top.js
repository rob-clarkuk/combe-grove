$('.js__back-to-top').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({
		scrollTop: 0
	});
});

$('.js__home-scroll').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({scrollTop: $('.js__scroll-target').offset().top - 45}, 1000);
});
