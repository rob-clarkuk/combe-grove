const $menuIcon = $('.header__menu--icon');
const $menuIconMob = $('.header__menu--icon__mob');
const $search = $('.search__input');
const $searchButton = $('.search__submit');
const $searchContainer = $('.header__search');
const $bookMenu = $('#bookMenu');
const $bookMenuClose = $('.menu__book--close');
const $offCanvas = $('.offCanvas');
const $offCanvasMenu = $('.offCanvas__mob--content');
const $offCanvasMobSubMenu = $('.offCanvas__mob--subMenu');
const $offCanvasSubMenu = $('.offCanvas__subMenu');
const $offCanvasMenuItem = $('.offCanvas__menu--item');
const $offCanvasMobSubMenuTrigger = $('.offCanvas__mob--subMenu__trigger');
const $offCanvasMobSubMenuBackTrigger = $('.offCanvas__mob--subMenu__back--trigger');


$(window).scroll(function() {
	var scroll = $(window).scrollTop();

	if (scroll >= 100) {
	  $("body").addClass("scrolled");
	} else {
	  $("body").removeClass("scrolled");
	}
});

$menuIcon.on('click', function(){
	$('body').toggleClass('offCanvas__active');
})

$menuIconMob.on('click', function(){
	$('body').toggleClass('offCanvas__active--mob');
})

$bookMenu.on('click', function(e){
	e.preventDefault()
	$('body').addClass('bookmenu__active');
})

$bookMenuClose.on('click', function(e){
	e.preventDefault()
	$('body').removeClass('bookmenu__active');
})

$offCanvasSubMenu.hide();

$offCanvasMenuItem.on('mouseover', function(){
	const subMenu = $(this).attr('data-menu');
	$offCanvasSubMenu.not('#' + subMenu).stop(true, false).fadeOut();
	$('#' + subMenu).fadeIn();
})

$searchButton.on('click', function(e){
	if ($search.hasClass('active')){

	} else {
		e.preventDefault();
		$search.addClass('active');
	}
})

$offCanvasMobSubMenuTrigger.on('click', function(){
	const mobMenu = $(this).attr('data-subMenu')
	subMenu = $(this).attr('data-subMenu');
	$offCanvasMenu.addClass('active');
	$('#' + mobMenu).addClass('active');
})

$offCanvasMobSubMenuBackTrigger.on('click', function(e){
	e.preventDefault();
	$offCanvasMobSubMenu.removeClass('active');
	$offCanvasMenu.removeClass('active');
})