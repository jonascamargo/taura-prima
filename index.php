<?php
include_once('__content.php');
include_once('_header.php');
?>

    <main>

        <section id="home-hero"></section>
        <hr>
        <!-- END #home-hero -->


        <section id="home-marcas">
            <div class="container">

                <header class="sec-header">
                    <h2 class="ttl-2"><?= dot($site, 'home.marcas.title'); ?></h2>
                </header>

                <ul class="grid-marcas">
                    
                    <?php foreach( dot($site, 'home.marcas.posts') as $post ): ?>
                    <li class="card-blue">
                        <a href="/sobre">
                            <figure>
                                <img src="<?= $post['img']; ?>" alt="<?= $post['title']; ?>">
                            </figure>

                            <p><?= $post['text']; ?></p>
                        </a>
                    </li>
                    <?php endforeach; ?>

                </ul>

                <div class="text-box">
                    <p><?= dot($site, 'home.marcas.text'); ?></p>
                </div>

            </div>
        </section>
        <hr>
        <!-- END #home-marcas -->


        <section id="home-produtos">
            <div class="container">
                
                <div class="my-layout-2">

                    <div class="col">
                        <header class="sec-header">
                            <h2 class="ttl-3"><?= dot($site, 'home.produtos.title'); ?></h2>

                            <div class="text_box"><?= dot($site, 'home.produtos.text'); ?></div>

                            <div class="action">
                                <a href="<?= dot($site, 'home.produtos.btn.url'); ?>" class="link">
                                    <span><?= dot($site, 'home.produtos.btn.title'); ?></span>
                                    <?= dot($site, 'home.produtos.btn.icon'); ?>
                                </a>
                            </div>
                        </header>
                    </div>

                    <div class="col">
                        <ul class="layout-masonry">

                            <?php foreach( dot($site, 'home.produtos.produto') as $produto ): ?>
                            <li class="car-blur">
                                <a href="<?= $produto['url']; ?>">
                                    <figure><img src="<?= $produto['img']; ?>" alt=""></figure>
                                    <div><?= $produto['title']; ?></div>
                                </a>
                            </li>
                            <?php endforeach; ?>

                            <li class="grid-action">
                                <a href="<?= dot($site, 'home.produtos.action.btn.url'); ?>">
                                    <?= dot($site, 'home.produtos.action.title'); ?>
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
                
            </div>
        </section>
        <hr>
        <!-- END #home-produtos -->


        <section id="home-blog">
            <div class="container">

                <header class="sec-header">
                    <h2 class="ttl-2"><?= dot($site, 'home.blog.title'); ?></h2>
                </header>

                <ul class="layout-col-3">

                    <?php foreach( dot($site, 'home.blog.posts') as $post ): ?>
                    <li class="car-blur">
                        <a href="<?= $post['url']; ?>">
                            <figure><img src="<?= $post['img']; ?>" alt="<?= $post['title']; ?>"></figure>
                            <div><?= $post['title']; ?></div>
                        </a>
                    </li>
                    <?php endforeach; ?>

                    <li class="grid-action">
                        <a href="<?= dot($site, 'home.blog.action.url'); ?>" class="btn-full">
                            <?= dot($site, 'home.blog.action.title'); ?>
                        </a>
                    </li>

                </ul>

            </div>
        </section>
        <hr>
        <!-- END #home-blog -->


        <section id="banner">
            <div class="wrapper group">

                <img src="<?= dot($site, 'home.banner.bg'); ?>" alt="background do banner">
                
                <div class="container-box">
                    <div class="inner">
                        <figure><img src="<?= dot($site, 'home.banner.img'); ?>" alt=""></figure>
                        <p><?= dot($site, 'home.banner.text'); ?></p>
                    </div>
                </div>

            </div>
        </section>
        <!-- END #banner -->

    </main>

<?php include_once('_footer.php'); ?>