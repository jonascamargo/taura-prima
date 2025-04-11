<?php
include_once('__content.php');
include_once('_header.php');
?>


<main>

    <section id="page-header">
        <div class="header-wrap container">
            <div class="inner">
                <div class="col"></div>
                
                <div class="col">
                    <figure>
                        <img src="./src/imgs/logo-topo.png" alt="Prima Design">
                    </figure>
                </div>
            </div>

            <img src="./upload/banner-bg-02.png" alt="capa da pagina" class="header-img">
        </div>

        <div class="container">

            <div class="to-left">
                <h2 class="tt-xl">Descubra a Prime Store</h2>
            </div>

            <div class="to-right">
                <div>
                    <div class="text_container">
                        <p>A Prima Store celebra a riqueza de combinações únicas e contrastes inusitados, trazendo um design que une ludismo, tecnologia e manufatura. Nossa coleção oferece peças versáteis, onde sustentabilidade e consciência ambiental se transformam em atributos essenciais.</p>
                    </div>
                    
                    <div class="action mt-5">
                        <a href="" class="btn light"><span>Catalogo da marca</span><i class="fa-solid fa-file-pdf"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <hr>


    <section id="home-produtos">
        <div class="container">

            <div class="col info">
                <h2 class="tt-lg">Explore por nossas categorias exclusivas</h2>

                <div class="text_container">
                    <p>Encontre exatamente o que procura explorando nossas categorias cuidadosamente organizadas. De <strong>Bostom</strong> a <strong>Smart</strong>, oferecemos uma seleção  ficada para atender às suas necessidades. Navegue e descubra as melhores opções disponíveis para você.</p>
                </div>

                <div class="action">
                    <a href="./produtos" class="link"><span>Todas as categorias</span><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col">
                <ul class="grid-produtos">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
            </div>

        </div>
    </section>
    <hr>


    <section class="banner">
        <div class="container">

            <div class="wrap">
                <img src="./src/imgs/marca-prima_store.png" alt="Prima Store">
                <p>Anuncia a riqueza de combinações únicas e inusitados contrastes, reunindo ludismo, tecnologia e manufatura.</p>
            </div>

        </div>
    </section>
    <hr>


    <section class="cases-products">
        <div class="container">

            <div class="to-left text_container">
                <p>Cada móvel da Prima Store pode ser customizado, proporcionando um toque pessoal e o aconchego dos elementos naturais. Valorizamos materiais e processos que respeitam o meio ambiente, garantindo que cada peça não apenas embeleze espaços, mas também contribua para um futuro mais sustentável.</p>
            </div>
            
            <div class="slider-cases">

                <?php for( $i = 1; $i < 4; $i++ ): ?>
                <div class="case-item">
                    <div class="col img">
                        <figure>
                            <img src="./upload/case-img0<?= $i; ?>.png" alt="Sala de estar ecológica">
                        </figure>
                    </div>
                    
                    <div class="col info">
                        <h2 class="tt-sm">Sala de estar ecológica [<?= $i; ?>]</h2>

                        <div class="text_container">
                            <p>Uma sala de estar sustentável e aconchegante, com <a href="http://www.google.com" target="_blank" rel="noopener noreferrer">poltronas de madeira</a>. O design minimalista harmoniza tons naturais, móveis reaproveitados e detalhes em fibras orgânicas, criando um espaço elegante e eco-friendly.</p>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>

            </div>

        </div>
    </section>

</main>


<?php include_once('_footer.php'); ?>