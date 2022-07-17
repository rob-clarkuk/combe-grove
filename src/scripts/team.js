$('.js-team-member-toggle').on('click', function(e){
    e.preventDefault();
    var $this = $(this);
    $this.toggleClass('open');
    $('.team__item__biography', $this).slideToggle();
})
