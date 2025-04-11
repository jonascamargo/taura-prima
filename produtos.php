<?php
include_once('__content.php');
include_once('_header.php');
?>

<main>

    <section id="page-header" class="pb-10!">
        <div class="header-wrap container">

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
    </section>
    <hr>

    
    <section id="products">
        <div class="container">

            <div class="col filter">

                <div class="filter-menu"><i class="fa-solid fa-list"></i></div>

                <div class="inner">
                    <fieldset>
                        <label for="">Seleciona a marca</label>
                        
                        <select name="" id="">
                            <option value="">Prima Design</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label for="">Seleciona a linha</label>
                        
                        <select name="" id="">
                            <option value="">Todas</option>
                            <option value="">Boston</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label for="">Designer responsável</label>
                        
                        <select name="" id="">
                            <option value="">Todos</option>
                            <option value="">Boston</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label for="">Categoria</label>
                        
                        <select name="" id="">
                            <option value="">Todas</option>
                            <option value="">Boston</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label for="">Ambiente</label>
                        
                        <select name="" id="">
                            <option value="">Todos</option>
                            <option value="">Hospitalar</option>
                        </select>
                    </fieldset>
                </div>

            </div>

            <div class="col-products">

                <ul class="grid-products">

                    <?php
                    $produto = dot($site, 'produto.posts');
                    for( $p = 0; $p <= 5; $p++ ):
                    ?>
                    <li class="card-slick">

                        <a href="<?= $produto[$p]['url']; ?>" class="inner">
                            <figure><img src="<?= $produto[$p]['img']; ?>" alt=""></figure>
                            <div><?= $produto[$p]['title']; ?></div>
                        </a>

                    </li>
                    <?php endfor; ?>

                </ul>

                <div class="action">
                    <button class="btn"><span>Carregar mais</span></button>
                </div>

            </div>

        </div>
    </section>
    <hr>
    <!-- END #products -->

</main>

<?php include_once('_footer.php'); ?>