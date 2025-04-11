$(document).ready(function() {
    
    $('.grid-criacoes').slick({
        dots: false,
        arrows: true,
        infinite: true,
        prevArrow: '<span class="slick-prev"><i class="fa-solid fa-chevron-left"></i></span>',
        nextArrow: '<span class="slick-next"><i class="fa-solid fa-chevron-right"></i></span>',
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.slider-cases').slick({
        dots: true, // Habilita o paginador (dots)
        arrows: true, // Habilita as setas de navegação
        infinite: true, // Permite loop infinito
        speed: 500, // Velocidade da transição em milissegundos
        fade: true, // Ativa a animação de fade
        cssEase: 'linear', // Define o tipo de easing da animação
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>', // Botão "Anterior"
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>', // Botão "Próximo"
        autoplay: false, // Desativa o autoplay (opcional)
        autoplaySpeed: 3000 // Intervalo do autoplay, se ativado
    });


    $('.slider-product').slick({
        dots: true, // Habilita o paginador (dots)
        arrows: true, // Habilita as setas de navegação
        infinite: true, // Permite loop infinito
        speed: 300, // Velocidade da transição em milissegundos
        slidesToShow: 1, // Número de slides visíveis ao mesmo tempo
        slidesToScroll: 1, // Número de slides a serem rolados por vez
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>', // Botão "Anterior"
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>', // Botão "Próximo"
        autoplay: false, // Desativa o autoplay (opcional)
        autoplaySpeed: 3000, // Intervalo do autoplay, se ativado
        adaptiveHeight: true,
    });
    


    $('.post-slider').slick({
        dots: true, // Habilita o paginador (dots)
        arrows: true, // Habilita as setas de navegação
        infinite: true, // Permite loop infinito
        speed: 500, // Velocidade da transição em milissegundos
        fade: true, // Ativa a animação de fade
        cssEase: 'linear', // Define o tipo de easing da animação
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>', // Botão "Anterior"
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>', // Botão "Próximo"
        autoplay: false, // Desativa o autoplay (opcional)
        autoplaySpeed: 3000, // Intervalo do autoplay, se ativado
        adaptiveHeight: true // Ajusta automaticamente a altura do slider ao conteúdo
    });


    $('.blog-posts-similar').slick({
        dots: true, // Habilita o paginador (dots)
        arrows: true, // Habilita as setas de navegação
        infinite: true, // Permite loop infinito
        speed: 300, // Velocidade da transição em milissegundos
        slidesToShow: 4, // Mostra 4 slides por vez
        slidesToScroll: 1, // Rola 1 slide por vez
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>', // Botão "Anterior"
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>', // Botão "Próximo"
        autoplay: false, // Desativa o autoplay (opcional)
        autoplaySpeed: 3000, // Intervalo do autoplay, se ativado
        responsive: [
            {
                breakpoint: 1280, // Para telas menores que 1280px
                settings: {
                    slidesToShow: 3, // Mostra 3 slides
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1024, // Para telas menores que 1024px
                settings: {
                    slidesToShow: 2, // Mostra 2 slides
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768, // Para telas menores que 768px
                settings: {
                    slidesToShow: 1, // Mostra 1 slide
                    slidesToScroll: 1
                }
            }
        ]
    });


})