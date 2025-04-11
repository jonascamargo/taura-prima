<?php
include_once('__content.php');
include_once('_header.php');
?>

<main>
    <section id="products-list">
        <div class="container-lg">

            <header>
                <h1 class="tt-lg">Area restrita</h1>
            </header>

            <div class="wrapper">
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

                <div class="col list">

                    <ul class="list-header">
                        <li>Marca</li>
                        <li>Linha</li>
                        <li>Designer</li>
                    </ul>

                    <ul class="list-row">

                        <?php for( $p = 0; $p <= 15; $p++ ): ?>
                        <li>
                            <a href="./restrita" title="Prima Design">Prima Design</a>
                            <p title="Boston">Boston</p>
                            <p title="Ariel Missio">Ariel Missio</p>
                        </li>
                        <?php endfor; ?>

                    </ul>

                </div>
            </div>

        </div>
    </section>
</main>

<?php include_once('_footer.php'); ?>