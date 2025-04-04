<?php include_once('_main_header.php'); ?>


    <main>
        
        <section>
            <div class="wrap">
                
                <div class="swiper hero-slider">
                    <div class="swiper-wrapper">

                        <?php for( $slide = 1; $slide <= 3; $slide++ ): ?>
                        <div class="swiper-slide">
                            <div class="grid grid-cols-2 gap-10 items-center">
                                <div class="hero-slider-img overflow-hidden rounded-xl">
                                    <img src="./upload/hero-img01.jpg" alt="">
                                </div>

                                <div class="hero-slider-info">
                                    <h1 class="ttl-1">Feito para seu estilo, pensado para sua vida <?= $slide; ?></h1>

                                    <div class="text-wrap py-5">
                                        <p>Peças criadas com dedicação, design autêntico e materiais nobres para refletir sua originalidade em cada ambiente.</p>
                                    </div>

                                    <a href="" class="link"><span>Conheça nossas criações</span><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>

                    </div>

                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>
        </section>

    </main>


    <?php include_once('_main_footer.php'); ?>