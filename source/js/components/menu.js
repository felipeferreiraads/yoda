if ($(window).width() <= 1000) {
    $(document).click(e => {
        if(!$(e.target).closest('.toggle, .menu').length) {
            if($('.menu').is(":visible")) {
                $('.menu').hide()
            }
        }
    })

    $('.toggle').on('click', () => {
        $('.menu').toggle()
    })
}