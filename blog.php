<?php
include_once('__content.php');
include_once('_header.php');
?>

<main>

    <section id="blog-destaques">
        <div class="container">

            <div class="post-slider">

                <?php for( $dest = 1; $dest <= 2; $dest++ ): ?>
                <div class="slider-post-item">
                    <div class="img">
                        <figure><img src="./upload/blog-post0<?= $dest; ?>.png" alt="Como Escolher Móveis que Unem Design e Funcionalidade"></figure>
                    </div>

                    <div class="info">
                        <div class="text_container tx-sm"><p>Jonas C. • 20/01/2025</p></div>
                        <div class="tt-sm">[<?= $dest; ?>] Como Escolher Móveis que Unem Design e Funcionalidade</div>
                    </div>
                </div>
                <?php endfor; ?>

            </div>

        </div>
    </section>
    <hr>
    
    
    <section class="blog-posts">
        <div class="container">

            <div class="posts-filtro">
                <form action="">
                    <fieldset class="input-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Faça sua busca ...">
                    </fieldset>

                    <div class="select">
                        <select name="" id="">
                            <option value="">2025</option>
                            <option value="">2024</option>
                            <option value="">2023</option>
                        </select>

                        <select name="" id="">
                            <option value="">Todas as tags</option>
                            <option value="">Evento</option>
                            <option value="">Premiação</option>
                        </select>
                    </div>
                </form>
            </div>

            <ul class="post-grid">

                <?php for( $post = 1; $post <= 2; $post++ ): ?>
                <li>
                    <a href="./blog-post" class="inner group">
                        <div class="img">
                            <figure><img src="./upload/blog-post0<?= $post; ?>.png" alt="Como Escolher Móveis que Unem Design e Funcionalidade"></figure>
                        </div>

                        <div class="info">
                            <div class="text_container"><p>Jonas C. • 20/01/2025</p></div>
                            <div class="tt-xs">[<?= $post; ?>] O Poder dos Detalhes: Como Componentes Certos Transformam um Móvel</div>
                        </div>
                    </a>
                </li>
                <?php endfor; ?>

            </ul>

            <div class="action">
                <button class="btn-lg"><span>Carregar mais</span><i class="fa-solid fa-circle-notch fa-spin"></i></button>
            </div>

        </div>
    </section>
    <hr>

</main>

<?php include_once('_footer.php'); ?>