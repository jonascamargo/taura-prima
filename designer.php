<?php include_once('_main_header.php'); ?>


    <main>

        <section id="designer-bio">
            <div class="container">

                <div class="img">
                    <img src="./upload/designer-img1.png" alt="designer: Ariel Missio">

                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/primadesign" aria-label="Siga-nos no Facebook"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/primadesign" aria-label="Siga-nos no Instagram"><i class="fa-brands fa-square-instagram"></i></a></li>
                        <li><a href="https://www.pinteres.com/primadesign" aria-label="Siga-nos no Pinerest"><i class="fa-brands fa-square-pinterest"></i></a></li>
                    </ul>
                </div>

                <div class="info">
                    <span>Designer</span>

                    <h1>Ariel Missio</h1>
                    
                    <div class="textBox">
                        <p>Ariel Missio é Tecnólogo em Produção Moveleira pela Universidade de Caxias de Sul. Atua como autônomo através da A.M Furniture Engineering onde tem como foco a engenharia de produtos e processos, qualidade, gestão e treinamento.</p>

                        <p>Natural de Espumoso/RS reside atualmente em Bento Gonçalves e ministra aulas sobre processos de fabricação de móveis em escola técnica local. Atuou como gerente industrial na parte de criação de produto e desde 2012 presta assessoria para a Prima Design.</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- END - #designer-bio -->


        <section id="produtos">
            <div class="container">

                <header class="sec-header">
                    <h2>Criações</h2>
                </header>
                
                <ul class="produtos list">
                    <?php for($prod = 1; $prod <= 3; $prod++): ?>
                    <li>
                        <a href="" class="card-blur group">
                            <img src="./upload/produto-0<?= $prod; ?>.png" alt="produto: Nome do produto <?= $prod; ?>" class="img-blur">
                            <h3 class="title-blur">Nome do produto <?= $prod; ?></h3>
                        </a>
                    </li>
                    <?php endfor; ?>
                </ul>

            </div>
        </section>
        <!-- END - #produtos -->

    </main>

    
    <?php include_once('_main_footer.php'); ?>