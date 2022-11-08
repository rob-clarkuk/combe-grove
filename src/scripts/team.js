$('.js-team-member-toggle').on('click', function(e){
    e.preventDefault();
    var $this = $(this);
    $this.toggleClass('open');
    $('.team__item__biography', $this).slideToggle();
})


$('.team__item__inner').on('click', function(){
    $teamData = $(this).attr('data-team')
    openPopup($teamData)
})

$('.team__item--popout--close, .team__item--popout__bg').on('click', function(){
    closePopup()
})

const openPopup = (e) => {
    $('#' + e).addClass('active');
    $('body').css('overflowY', 'hidden');
}

const closePopup = () => {

    $('.team__item--popout').removeClass('active');
    $('body').css('overflowY', 'auto');

}