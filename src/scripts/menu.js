$('.js-menu').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({
		scrollTop: 0
	}, function(){
        $('html, body').addClass('no-scroll');
    });
    $('.js-site-menu').addClass('active');
});

$('.js-nav__close').on('click', function(e){
    e.preventDefault();
    $('html, body').removeClass('no-scroll');
    $('.js-site-menu').removeClass('active');
    $('.js-club-menu').removeClass('active');
});

$('.js-club-menu-launch').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({
		scrollTop: 0
	}, function(){
        $('html, body').addClass('no-scroll');
    });
    $('.js-club-menu').addClass('active');
});
