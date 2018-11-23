var $galleryDiv = $('.img-gallery');
if ($galleryDiv.length && $.fn.owlCarousel) {
    $galleryDiv.owlCarousel({
        nav: false,
        center: false,
        loop: true,
        autoplay: true,
        dots: false,
        navText: ['<span class="ti-arrow-left"></span>', '<span class="ti-arrow-right"></span>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 4
            }
        }
    });
}