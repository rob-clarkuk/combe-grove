$('.js-book-now').on('click', function(e){
    e.preventDefault();
    $('.eventbrite-ticket-embed').fadeIn();
    $('.js-events-overlay').fadeIn();
})

$('.js-events-overlay').on('click', function(){
    $('.eventbrite-ticket-embed').fadeOut();
    $('.js-events-overlay').fadeOut();
})
