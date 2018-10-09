$(document).click(e => {
    if(!$(e.target).closest('.toggle').length) {
        if($('.menu').is(":visible")) {
            $('.menu').hide()
        }
    }
})

$('.toggle').on('click', () => {
    $('.menu').toggle().css('display', 'flex')
})