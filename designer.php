<?php
include_once('__content.php');
include_once('_header.php');
?>

<main>
    
    <section id="designer-bio">
        <div class="container">

            <div class="col left">
                <figure>
                    <img src="<?= dot($site, 'designers.0.img'); ?>" alt="<?= dot($site, 'designers.0.name'); ?>">
                </figure>
            </div>

            <div class="col right">
                <header>
                    <div class="tt-sm"><?= dot($site, 'designers.0.title'); ?></div>

                    <h1 class="tt-lg"><?= dot($site, 'designers.0.name'); ?></h1>
                </header>

                <div class="text_container">
                    <?= dot($site, 'designers.0.bio'); ?>
                </div>

                <ul class="social-link">
                    
                    <?php foreach( dot($site, 'designers.0.redes') as $link ): ?>
                    <li>
                        <a href="<?= $link; ?>">
                            <?php
                            if (strpos($link, 'facebook') !== false):
                                echo '<i class="fa-brands fa-square-facebook"></i>';
                            elseif (strpos($link, 'instagram') !== false):
                                echo '<i class="fa-brands fa-square-instagram"></i>';
                            elseif (strpos($link, 'linkedin') !== false):
                                echo '<i class="fa-brands fa-linkedin"></i>';
                            elseif (strpos($link, 'twitter') !== false || strpos($link, 'x.com') !== false):
                                echo '<i class="fa-brands fa-square-x-twitter"></i>';
                            endif;
                            ?>
                        </a>
                    </li>
                    <?php endforeach; ?>

                </ul>
            </div>

        </div>
    </section>
    <hr>
    <!-- NED #designer-bio -->


    <section id="designer-criacoes">
        <div class="container">

            <header class="sec-header">
                <h2 class="tt-lg">Criações</h2>
            </header>

            <div class="grid-criacoes">
                
                <?php
                $produto = dot($site, 'produto.posts');
                for( $p = 0; $p <= 4; $p++ ):
                ?>
                <div class="card-slick">

                    <a href="<?= $produto[$p]['url']; ?>" class="inner">
                        <figure><img src="<?= $produto[$p]['img']; ?>" alt=""></figure>
                        <div><?= $produto[$p]['title']; ?></div>
                    </a>

                </div>
                <?php endfor; ?>
                
            </div>

        </div>
    </section>
    <!-- NED #designer-bio -->
    
</main>


<?php include_once('_footer.php'); ?>