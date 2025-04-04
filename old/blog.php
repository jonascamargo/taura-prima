<?php include_once('_main_header.php'); ?>


    <main>

        <section id="blog-slider">
            <div class="container">

                <div class="slider">

                    <div class="item">
                        <img src="./upload/blog-post-01-lg.png" alt="post: Titulo do post">

                        <div>
                            <p>Jonas C. • 20/01/2025</p>
                            <h2>Titulo do post <?= $post; ?></h2>
                        </div>
                    </div>

                </div>

                <ul class="slider-paginator">
                    <li class="actived"></li>
                    <li></li>
                    <li></li>
                </ul>

            </div>
        </section>
        <!-- END - #blog-slider -->


        <section id="blog-post-grid">
            <div class="container">

                <div class="post-filtro">
                    <form action="">
                        
                        <fieldset class="busca">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="search" name="" id="">
                        </fieldset>

                        <fieldset class="ano">
                            <select name="" id="">
                                <option value="">2025</option>
                                <option value="">2024</option>
                                <option value="">2023</option>
                            </select>
                        </fieldset>
                        
                        <fieldset class="tag">
                            <select name="" id="">
                                <option value="">Geral</option>
                                <option value="">Decoração</option>
                                <option value="">Dicas</option>
                                <option value="">Eventos</option>
                            </select>
                        </fieldset>
                        
                    </form>
                </div>

                <ul class="post-list">

                    <?php for( $post = 1; $post <= 2; $post++ ): ?>
                    <li>
                        <a href="./blog-post" class="group">
                            <div class="card-blur img">
                                <img src="./upload/blog-post-0<?= $post; ?>-sm.png" alt="post: Titulo do post <?= $post; ?>" class="img-blur">
                            </div>

                            <div class="info">
                                <p>Jonas C. • 20/01/2025</p>
                                <h2>Titulo do post <?= $post; ?></h2>
                            </div>
                        </a>
                    </li>
                    <?php endfor; ?>

                </ul>

                <div class="action">
                    <a href="#carregar-mais" class="btn">Carregar mais</a>
                </div>

            </div>
        </section>
        <!-- END - #blog-post-grid -->

    </main>

    
    <?php include_once('_main_footer.php'); ?>