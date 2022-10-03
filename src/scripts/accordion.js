
$('.accordion__title').on('click', function(){
	const id = $(this).attr('data-accordion');
	$('.accordion__content').not('#' + id).slideUp();
	$('#' + id).slideToggle();
});