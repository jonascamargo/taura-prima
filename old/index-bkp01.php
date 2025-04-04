<?php include_once('_main_header.php'); ?>


    <main>

        <section id="hero">
            <div class="container">

                <div class="slider-tem">
                    <div class="img">
                        <img src="./upload/hero-img01.jpg" alt="banner: Feito para seu estilo, pensado para sua vida">
                    </div>

                    <div class="info">
                        <h2>Feito para seu estilo, pensado para sua vida</h2>
                        <p>Peças criadas com dedicação, design autêntico e materiais nobres para refletir sua originalidade em cada ambiente.</p>
                        
                        <a href="" class="link fade-r">Conheça nossas criações <i class="fa-solid fa-arrow-right"></i></a><br>
                    </div>
                </div>

            </div>
        </section>
        <!-- END - #HERO -->
        

        <section id="home-marcas">
            <div class="container">

                <header class="sec-header">
                    <h1>Transformamos Espaços, Criamos Histórias </h1>
                </header>

                <ul class="grid-marcas">
                    <li>
                        <a href="./sobre" class="marcas-item">
                            <img src="./upload/logo-primadesign.png" alt="logo: Prima Design">
                            <p>Produtos em metal, polipropileno ou madeira, que empregam no processo produtivo avançada tecnologia.</p>
                        </a>
                    </li>

                    <li>
                        <a href="./sobre" class="marcas-item">
                            <img src="./upload/logo-primastore.png" alt="logo: Prima Store">
                            <p>Anuncia a riqueza de combinações únicas e inusitados contrastes, reunindo ludismo, tecnologia e manufatura.</p>
                        </a>
                    </li>

                    <li>
                        <a href="./sobre" class="marcas-item">
                            <img src="./upload/logo-primachoice.png" alt="logo: Prima Choice">
                            <p>Disponibiliza no mercado uma linha especial de componentes e acessórios para móveis.</p>
                        </a>
                    </li>
                </ul>
                
                <div class="textBox r">
                    <p>Na <strong>Prima design</strong>, cada peça é pensada para dar vida aos seus ambientes. Com três marcas únicas, oferecemos móveis que unem estilo, funcionalidade e personalidade.</p>
                </div>

            </div>
        </section>
        <!-- END - #home-marcas -->
        
        
        <section id="home-produtos">
            <div class="container">

                <div class="info">
                    <header class="sec-header">
                        <h2>Explore por nossas categorias exclusivas</h2>
                    </header>

                    <div class="textBox pb-10">
                        <p>Encontre exatamente o que procura explorando nossas categorias cuidadosamente organizadas. De <strong>Bostom</strong> a <strong>Smart</strong>, oferecemos uma seleção diversificada para atender às suas necessidades. Navegue e descubra as melhores opções disponíveis para você.</p>
                    </div>

                    <div class="action">
                        <a href="" class="link fade-r">Conheça nossas criações <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="img">
                    <div class="grid-categorias">
                        
                        <?php for($categ = 1; $categ <= 3; $categ++): ?>
                        <a href="./produtos" class="item card-blur group">
                            <img src="./upload/home-categorias-0<?= $categ; ?>.png" alt="categoria: Casa" class="img-blur">
                            <h2 class="title-blur">Categoria <?= $categ; ?></h2>
                        </a>
                        <?php endfor; ?>

                        <div class="item">
                            <div class="btn-grid">
                                <h2>Todas as nossas categorias</h2>

                                <a href="./produtos" class="btn-bb group">Confira <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </section>
        <!-- END - #home-produtos -->
        

        <section id="home-blog">
            <div class="container">

                <header class="sec-header">
                    <h2>Ultima postagem</h2>
                </header>
                
                <div class="grid-posts">
                    <?php for($post = 1; $post <= 4; $post++): ?>
                    <a href="./blog-post" class="card-blur group post-item">
                        <img src="./upload/home-blog-img01.jpg" alt="blog: Titulo da postagem aqui" class="img-blur">
                        <h2 class="title-blur">Titulo da postagem <?= $post; ?> aqui</h2>
                    </a>
                    <?php endfor; ?>

                    <div class="post-item grid-action">
                        <div>
                            <h2>Veja todas as noticias</h2>

                            <a href="./produtos" class="btn-bb group">Nossas cateforias <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END - #home-blog -->
        

        <section class="banner">
            <div class="banner-body">

                <div class="wrap">
                    <img src="./upload/logo-primadesign.png" alt="">
                    <p>Anuncia a riqueza de combinações únicas e inusitados contrastes, reunindo ludismo, tecnologia e manufatura.</p>
                </div>

                <img src="./upload/banner-img01.png" alt="" class="banner-bg">

            </div>
        </section>
        
    </main>


    <?php include_once('_main_footer.php'); ?>