const heroSlider = new Swiper('.swiper.hero-slider', {
    // Configurações básicas
    direction: 'horizontal',
    loop: true,
    effect: 'fade', // efeito de transição suave
    
    // Paginação
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    
    // Navegação
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },

    // Configurações responsivas
    breakpoints: {
        // mobile
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // tablet
        768: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        // desktop
        1024: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    }
});