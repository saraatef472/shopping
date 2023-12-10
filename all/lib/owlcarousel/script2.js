$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        },
        margin: 5,
        dots: true,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000.

    });
});