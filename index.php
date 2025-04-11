<?php
include_once('__content.php');
include_once('_header.php');
?>


<main>

    <section id="home-hero">
        <div class="container-lg">

            <div class="slider">
                <div class="item">
                    <div class="col img">
                        <figure>
                            <img src="./upload/home-slide-01.png" alt="Feito para seu estilo, pensado para sua vida">
                        </figure>
                    </div>

                    <div class="col info">
                        <h2 class="tt-xl">Feito para seu estilo, pensado para sua vida</h2>

                        <div class="text_container">
                            <p>Peças criadas com dedicação, design autêntico e materiais nobres para refletir sua originalidade em cada ambiente.</p>
                        </div>

                        <div class="action">
                            <a href="" class="link"><span>Conheça nossas criações</span><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="paginator">
                    <span></span>
                    <span class="activated"></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

        </div>
    </section>
    <hr>


    <section id="home-marcas">
        <div class="container">

            <div class="to-left">
                <h2 class="tt-lg">Transformamos Espaços, Criamos Histórias</h2>
            </div>

            <!-- <ul class="grid-card-blue grid-marcas"> -->
            <ul class="home-grid-marcas">
                <li class="card-blue">
                    <figure>
                        <img src="./src/imgs/marca-prima_design.png" alt="Prima Design">
                    </figure>

                    <p>Produtos em metal, polipropileno ou madeira, que empregam no processo produtivo avançada tecnologia.</p>
                </li>

                <li class="card-blue">
                    <figure>
                        <img src="./src/imgs/marca-prima_store.png" alt="Prima Store">
                    </figure>

                    <p>Anuncia a riqueza de combinações únicas e inusitados contrastes, reunindo ludismo, tecnologia e manufatura.</p>
                </li>

                <li class="card-blue">
                    <figure>
                        <img src="./src/imgs/marca-prima_choice.png" alt="Prima Choise">
                    </figure>

                    <p>Disponibiliza no mercado uma linha especial de componentes e acessórios para móveis.</p>
                </li>
            </ul>

            <div class="to-right">
                <div class="text_container">
                    <p>Na <strong>Prima design</strong>, cada peça é pensada para dar vida aos seus ambientes. Com três marcas únicas, oferecemos móveis que unem estilo, funcionalidade e personalidade.</p>
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


    <section id="home-blog">
        <div class="container">

            <header class="mb-5 to-left">
                <h2 class="tt-lg">Ultima postagem</h2>
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


    <section class="banner">
        <div class="container">

            <div class="wrap">
                <img src="./src/imgs/marca-prima_store.png" alt="Prima Store">
                <p>Anuncia a riqueza de combinações únicas e inusitados contrastes, reunindo ludismo, tecnologia e manufatura.</p>
            </div>

        </div>
    </section>
    <hr>

</main>


<?php include_once('_footer.php'); ?>