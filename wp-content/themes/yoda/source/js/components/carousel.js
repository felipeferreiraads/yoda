import 'owl.carousel'

$('.partners .grid').owlCarousel({
    navigation : false,
    dots: false,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive:{
        320: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1024: {
            items: 4
        }
    }
})

$('.prev').click(function () {
    $('.partners .grid').trigger('prev.owl.carousel', [300])
})

$('.next').click(function () {
    $('.partners .grid').trigger('next.owl.carousel')
})