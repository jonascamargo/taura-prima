<?php
include_once('__content.php');
include_once('_header.php');
?>

<main>

    <section id="page-header">
        <div class="header-wrap container-lg">
            <div class="inner">
                <div class="col">
                    <figure>
                        <img src="./src/imgs/logo-topo.png" alt="Prima Design">
                    </figure>
                </div>

                <div class="col">
                    <p>Cum perferendis suscipit, sapiente vero harum doloribus cupiditate officia, veritatis, tempore expedita deserunt totam corporis eum! Tempore officiis natus culpa.</p>
                </div>
            </div>

            <img src="./upload/banner-bg-01.png" alt="capa da pagina" class="header-img">
        </div>

        <div class="container">

            <div class="to-left">
                <h2 class="tt-xl">Conheça a Prima design</h2>
            </div>

            <div class="to-right">
                <div class="text_container">
                    <p>A Prima Design cria móveis inovadores, com detalhes exclusivos em aço e polipropileno, transformando ambientes residenciais e corporativos. Cada peça é uma expressão de originalidade e sofisticação no design.</p>
                </div>
            </div>

        </div>
    </section>
    <hr>


    <section id="historia">
        <div class="container">

            <header class="sec-header">
                <h2 class="tt-lg"><?= dot($site, 'sobre.historia.title'); ?></h2>
            </header>

            <ul class="timeline">
                
                <?php foreach( dot($site, 'sobre.historia.timeline') as $post ): ?>
                <li>
                    <div class="col left col-a">
                        <?php if( $post['img'] ): ?>
                        <figure>
                            <?= $post['img']; ?>
                        </figure>
                        <?php endif; ?>
                    </div>
                    
                    <div class="col right col-b">
                        <header>
                            <h3 class="tt"><?= $post['year']; ?></h3>
                            <h4 class="tt-sm"><?= $post['title']; ?></h4>
                        </header>

                        <div class="text_container">
                            <?= $post['text']; ?>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>

            </ul>

        </div>
    </section>
    <hr>


    <section id="valores">
        <div class="container">
            
            <ul class="grid-valores">
                
                <?php foreach( dot($site, 'sobre.valores') as $valor ): ?>
                <li class="card-blue">
                    <h2 class="ttl-4"><?= $valor['title']; ?></h2>
                    <p><?= $valor['text']; ?></p>
                </li>
                <?php endforeach; ?>
                
            </ul>
            
        </div>
    </section>
    <hr>


    <section id="sobre-designers">
        <div class="container">

            <header class="sec-header">
                <div class="to-left">
                    <h2 class="tt-lg"><?= dot($site, 'sobre.designers.title'); ?></h2>
                </div>

                <div class="to-right">
                    <div class="text_box"><?= dot($site, 'sobre.designers.text'); ?></div>
                </div>
            </header>


            <ul class="sobre-designers">

                <?php foreach( dot($site, 'designers') as $designer ): ?>
                <li>
                    <a href="./designer">
                        <figure>
                            <img src="<?= $designer['img']; ?>" alt="<?= $designer['name']; ?>">
                        </figure>

                        <p><?= $designer['name']; ?></p>
                    </a>
                </li>
                <?php endforeach; ?>

            </ul>

        </div>
    </section>
    <hr>

</main>

<?php include_once('_footer.php'); ?>