<?php
include_once('__content.php');
include_once('_header.php');
?>

<main>

    <section id="blog-post-capa">
        <div class="container-lg">

            <figure>
                <img src="./upload/blog-post01.png" alt="Como Escolher Móveis que Unem Design e Funcionalidade">
            </figure>

        </div>
    </section>
    <hr>


    <section id="blog-post-info">
        <div class="container">

            <header>
                <div class="tx">Jonas C. • 30/01/2025</div>
                <h1 class="tt-xl">Como Escolher Móveis que Unem Design e Funcionalidade</h1>
            </header>

            <div class="text_container">
                <p>Encontrar o equilíbrio entre estética e praticidade é essencial para criar ambientes sofisticados e confortáveis.</p>

                <p>Quando se trata de mobiliar um espaço, o design não deve ser apenas visualmente atraente, mas também funcional. Para isso, é importante considerar alguns fatores:</p>

                <ul>
                    <li>Propósito do ambiente: Um home office precisa de ergonomia, enquanto uma sala de estar exige aconchego.</li>
                    <li>Materiais e durabilidade: Escolher materiais resistentes e fáceis de manter garante longevidade aos móveis.</li>
                    <li>Versatilidade: Peças multifuncionais maximizam o uso dos espaços, especialmente em ambientes compactos.</li>
                </ul>

                <p>Na Prima, combinamos inovação e design inteligente para criar móveis que unem beleza e praticidade no dia a dia.</p>

                <p>Encontrar o equilíbrio entre estética e praticidade é essencial para criar ambientes sofisticados e confortáveis. Encontrar o equilíbrio entre estética e praticidade é essencial para criar ambientes <strong>sofisticados</strong> e confortáveis. Encontrar o equilíbrio entre estética e praticidade é essencial para criar ambientes sofisticados e confortáveis.</p>

                <figure>
                    <img src="./upload/blog-post01.png" alt="titulo da imagem">
                </figure>

                <p>Encontrar o equilíbrio entre estética e praticidade é essencial para criar ambientes sofisticados e confortáveis.</p>

                <p>Quando se trata de mobiliar um espaço, o design não deve ser apenas visualmente atraente, mas também funcional. Para isso, é importante considerar alguns fatores:</p>

                <ul>
                    <li>Propósito do ambiente: Um home office precisa de ergonomia, enquanto uma sala de estar exige aconchego.</li>
                    <li>Materiais e durabilidade: Escolher materiais resistentes e fáceis de manter garante longevidade aos móveis.</li>
                    <li>Versatilidade: Peças multifuncionais maximizam o uso dos espaços, especialmente em ambientes compactos.</li>
                </ul>

                <p>Na Prima, combinamos inovação e design inteligente para criar móveis que unem beleza e praticidade no dia a dia.</p>
            </div>

            <div class="share">
                <div class="tt-xs">Compartilhe</div>

                <div>
                    <ul class="social-link">
                        <li><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-square-youtube"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <hr>


    <section id="posts-similar">
        <div class="container-lg">
            <h2 class="tt-sm">Últimos posts relacionados</h2>

            <div class="blog-posts-similar">
                
                    <?php for( $post = 1; $post <= 6; $post++ ): ?>
                    <div class="post-similar-item">

                        <a href="./blog-post" class="inner group">
                            <div class="img">
                                <figure><img src="./upload/blog-post0<?= ($post % 2 == 0) ? '2' : '1'; ?>.png" alt="Como Escolher Móveis que Unem Design e Funcionalidade"></figure>
                            </div>

                            <div class="info">
                                <div class="tt-xs">[<?= $post; ?>] O Poder dos Detalhes: Como Componentes Certos Transformam um Móvel</div>
                            </div>
                        </a>

                    </div>
                    <?php endfor; ?>
                    
            </div>
        </div>
    </section>

</main>

<?php include_once('_footer.php'); ?>