<?php
include_once('__content.php');
include_once('_header.php');
?>

<main>

    <section id="cover">

        <figure class="cover-img">
            <img src="<?= dot($site, 'sobre.img'); ?>" alt="capa: <?= dot($site, 'sobre.title'); ?>">
        </figure>

        <div class="container">
            <header class="sec-header">
                <h1 class="ttl-1"><?= dot($site, 'sobre.title'); ?></h1>
            </header>

            <div class="text-box">
                <?= dot($site, 'sobre.text'); ?>
            </div>
        </div>

    </section>
    <hr>
    <!-- END #cover -->
    
    
    <section id="historia">
        <div class="container">

            <header class="sec-header">
                <h2 class="ttl-2"><?= dot($site, 'sobre.historia.title'); ?></h2>
            </header>

            <ul class="timeline">
                
                <?php foreach( dot($site, 'sobre.historia.timeline') as $post ): ?>
                <li>
                    <div class="col-a">
                        <?php if( $post['img'] ): ?>
                        <figure>    
                            <img src="<?= $post['img']; ?>" alt="<?= $post['year']; ?> - <?= $post['title']; ?>">
                        </figure>
                        <?php endif; ?>
                    </div>
                    
                    <div class="col-b">
                        <header>
                            <h3 class="ttl-4"><?= $post['year']; ?></h3>
                            <h4 class="ttl-5"><?= $post['title']; ?></h4>
                        </header>

                        <div class="text-box">
                            <?= $post['text']; ?>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>

            </ul>

        </div>
    </section>
    <hr>
    <!-- END -->


    <section id="valores">
        <div class="container">
            
            <ul class="grid-valores">
                
                <?php foreach( dot($site, 'sobre.valores') as $valor ): ?>
                <li class="card-blue">
                    <div>

                        <h2 class="ttl-4"><?= $valor['title']; ?></h2>
                        <p><?= $valor['text']; ?></p>

                    </div>
                </li>
                <?php endforeach; ?>
                
            </ul>
            
        </div>
    </section>
    <hr>
    <!-- END -->


    <section class="sobre-designers">
        <div class="container">

            <header>
                <h2 class="ttl-3"><?= dot($site, 'designers.title'); ?></h2>

                <div class="text_box"><?= dot($site, 'designers.text'); ?></div>
            </header>


            <ul class="sobre-designers">

                <?php foreach( dot($site, 'designers.post') as $designer ): ?>
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
    <!-- END -->

</main>

<?php include_once('_footer.php'); ?>