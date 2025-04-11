<?php
include_once('__content.php');
include_once('_header.php');
?>


<main>

    <section id="product-detail">
        <div class="container">

            <div class="col left">
                <header class="mobile">
                    <div class="tt-sm">Boston</div>
                    <h1 class="tt-lg">190BA</h1>
                </header>

                <div class="slider-product">

                    <?php for( $img = 0; $img < 3; $img++ ): ?>
                    <div class="product-item">
                        <figure>
                            <img src="./upload/produtos-img04.png" alt="">
                        </figure>
                    </div>
                    <?php endfor; ?>

                </div>

                <ul class="product-info">
                    <li>
                        <img src="./upload/icon-altura-frente.png" alt="Altura frente: 45 cm">
                        <span>45 cm</span>
                    </li>

                    <li>
                        <img src="./upload/icon-altura-fundo.png" alt="Altura fundo: 83 cm">
                        <span>83 cm</span>
                    </li>

                    <li>
                        <img src="./upload/icon-profundidade.png" alt="Profundidade> 75 cm">
                        <span>57 cm</span>
                    </li>

                    <li>
                        <img src="./upload/icon-largura-fundo.png" alt="Largunda fundo: 60 cm">
                        <span>60 cm</span>
                    </li>

                    <li>
                        <img src="./upload/icon-peso.png" alt="peso: 4,2 kg">
                        <span>4,2 kg</span>
                    </li>
                </ul>
            </div>

            <div class="col right">
                <header>
                    <div class="tt-sm">Boston</div>
                    <h1 class="tt-lg">190BA</h1>
                </header>

                <div class="text_container">
                    <p>Cadeira Boston com braços fixa, empilhável. Base tubular com concha em plástico injetado. As conchas de polipropileno também podem ser estofadas em tecido ou couríssimo nos padrões disponíveis ou no revestimento fornecido pelo cliente.</p>
                    <p>Para salas de espera, ambientes de atendimento, escritórios, auditórios e até onde a imaginação permitir, a Cadeira Fixa Boston com Braços se encaixa nos mais diferentes tipos de empresa proporcionando conforto, beleza e organização ao espaço. Outras cores e bases em inox sob consulta.</p>
                </div>

                <div class="action">
                    <a href="" class="btn light"><span>Baixar pdf manual</span><i class="fa-solid fa-file-pdf"></i></a>
                </div>
            </div>

        </div>
    </section>
    <hr>
    

    <section id="home-blog">
        <div class="container">

            <header class="mb-5 to-left">
                <h2 class="tt-lg">Linha Boston Mais do que cadeiras</h2>
            </header>

            <ul class="grid-blog">
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
            </ul>

        </div>
    </section>
    <hr>

</main>


<?php include_once('_footer.php'); ?>