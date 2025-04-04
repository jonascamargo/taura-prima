<?php include_once('_main_header.php'); ?>

    <!--
    MAIN envolve toda o conteudo da pagina exceto o cabeçalho e rodape
    -->
    <main>

        <!--
        SECTION separa as ares das paginas
        .WRAP envolve, espaça e formata o conteudo
        -->

        <!--
        classes em caixa alta sao somente para teste nao fazem parte da estilização final
        -->
        <section>
            <div class="wrap">

                <!-- TITULOS -->
                <div class="CONF_BCK">

                    <header>
                        <h1 class="ttl-1">Titulo de nivel H1</h1>
                        <h2 class="ttl-2">Titulo de nivel H2</h2>
                        <h3 class="ttl-3">Titulo de nivel H3</h3>
                        <h4 class="ttl-4">Titulo de nivel H4</h4>
                        <h4 class="ttl-5">Titulo de nivel H5</h4>
                    </header>

                </div>
                <!-- //// //// //// //// //// //// //// //// ////  -->


                <!-- LINK -->
                <div class="CONF_BCK">

                    <a href="" class="link"><span>Botão com icone</span></a><br>
                    <a href="" class="link"><i class="fa-solid fa-arrow-left"></i>Botão com icone</span></a><br>
                    <a href="" class="link"><span>Botão com icone</span><i class="fa-solid fa-arrow-right"></i></a>

                </div>
                <!-- //// //// //// //// //// //// //// //// ////  -->


                <!-- BOTOES PREENCHIDO -->
                <div class="CONF_BCK">

                    <button class="btn"><span>Botão</span></button>
                    <button class="btn-lg"><span>Botão</span></button>
                    <button class="btn-lg" disabled><span>Botão</span></button>

                </div>
                <!-- //// //// //// //// //// //// //// //// ////  -->


                <!-- BOTOES CONTORNO -->
                <div class="CONF_BCK">

                    <button class="btn-line"><span>Botão</span></button>
                    <button class="btn-line-lg"><span>Botão</span></button>
                    <button class="btn-line-lg" disabled><span>Botão</span></button>

                </div>
                <!-- //// //// //// //// //// //// //// //// ////  -->


                <!-- CONTAINER PARA BLOCO DE TEXTO -->
                <div class="CONF_BCK">

                    <div class="txt-wrap">
                        <p>Lorem ipsum dolor sit amet, <a href="http://www.google.com">consectetur adipisicing</a> elit. Dolore, perspiciatis nulla architecto impedit assumenda vero nisi. Voluptatum est aperiam et maiores. Quos sapiente nostrum possimus nulla quas beatae, non doloribus.</p>

                        <ul>
                            <li>conteudo da linha N1</li>
                            <li>conteudo da linha N2</li>
                            <li>conteudo da linha N3</li>
                            <li>conteudo da linha N4</li>
                        </ul>

                        <p><strong>Lorem ipsum dolor</strong> sit amet consectetur adipisicing el optio dolorem debitis sequi. Accusamus nisi possimus voluptatibus amet, voluptatem aspernatur.</p>
                    </div>

                    <div class="flex gap-10 p-10">
                        <div class="txt-wrap-r">
                            <ul>
                                <li>conteudo da linha N1</li>
                                <li>conteudo da linha N2</li>
                                <li>conteudo da linha N3</li>
                                <li>conteudo da linha N4</li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium laboriosam impedit tempora. Consectetur eum cumque delectus, incidunt repellat odio, optio dignissimos fugit nemo perferendis quisquam perspiciatis sint aliquam, sapiente fuga.</p>
                        </div>

                        <div class="txt-wrap">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium laboriosam impedit tempora. Consectetur eum cumque delectus, incidunt repellat odio, optio dignissimos fugit nemo perferendis quisquam perspiciatis sint aliquam, sapiente fuga.</p>
                        </div>

                        <div class="txt-wrap-c">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium <a href="./">laboriosam</a> impedit tempora. Consectetur eum cumque delectus, incidunt repellat odio, optio dignissimos fugit nemo perferendis quisquam perspiciatis sint aliquam, sapiente fuga.</p>
                        </div>
                    </div>

                </div>
                <!-- //// //// //// //// //// //// //// //// ////  -->


                <!-- TEMPLATE DE COLUNAS -->
                <div class="CONF_BCK">

                    <ul class="COLLS grid grid-cols-1 md:grid-cols-3 gap-4">
                        <li>Block 1</li>
                        <li>Block 2</li>
                        <li>Block 3</li>
                        <li>Block 4</li>
                    </ul>

                </div>
                <!-- //// //// //// //// //// //// //// //// ////  -->


                <!-- FORMULARIO -->
                <div class="CONF_BCK">

                    <form action="" class="form">
                        <fieldset>
                            <input type="text" name="" id="" placeholder="Placeholder do campo">
                        </fieldset>
                        
                        <fieldset>
                            <input type="text" name="" id="" placeholder="Placeholder do campo" class="input-ok">
                        </fieldset>

                        <fieldset>
                            <input type="text" name="" id="" placeholder="Placeholder do campo" class="input-alert">
                        </fieldset>

                        <fieldset>
                            <input type="text" name="" id="" placeholder="Placeholder do campo" class="input-error">
                        </fieldset>

                        <div class="fieldset">
                            <fieldset>
                                <input type="email" placeholder="Campo Email">
                            </fieldset>

                            <fieldset>
                                <input type="tel" placeholder="Campo Telefone">
                            </fieldset>
                        </div>

                        <fieldset>
                            <select name="" id="">
                                <option value="">Opção 1</option>
                                <option value="">Opção 2</option>
                            </select>
                        </fieldset>

                        <fieldset>
                            <textarea name="" id="" placeholder="Textarea"></textarea>
                        </fieldset>

                        <div class="action">
                            <div class="alert-wrap">
                                <div class="alert-ok"><span>Mensagem enviada.</span> <i class="fa-solid fa-thumbs-up"></i></div>
                                <div class="alert-alert"><span>Preencha corretamente o campo <strong>Email</strong>.</span> <i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="alert-error"><span>Algo deu errado. Tente novamente mais tarde.</span> <i class="fa-solid fa-triangle-exclamation"></i></div>
                            </div>

                            <button type="submit" class="btn-lg"><span>Botão Submit</span></button>
                        </div>
                    </form>

                </div>
                <!-- //// //// //// //// //// //// //// //// ////  -->


                <!-- REDES SOCIAIS -->
                <div>

                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/primadesign" aria-label="Siga-nos no Facebook"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/primadesign" aria-label="Siga-nos no Instagram"><i class="fa-brands fa-square-instagram"></i></a></li>
                        <li><a href="https://www.pinteres.com/primadesign" aria-label="Siga-nos no Pinerest"><i class="fa-brands fa-square-pinterest"></i></a></li>
                    </ul>
                    
                    <ul class="social-links-center text-3xl">
                        <li><a href="https://www.facebook.com/primadesign" aria-label="Siga-nos no Facebook"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/primadesign" aria-label="Siga-nos no Instagram"><i class="fa-brands fa-square-instagram"></i></a></li>
                        <li><a href="https://www.pinteres.com/primadesign" aria-label="Siga-nos no Pinerest"><i class="fa-brands fa-square-pinterest"></i></a></li>
                    </ul>

                </div>
                <!-- //// //// //// //// //// //// //// //// ////  -->

            </div>
        </section>


        <!-- <section>

            <div class="grid grid-cols-[1fr_1fr] items-start gap-5 p-20">

                <div class="card group">
                    <div class="img-blur">
                        <img src="./upload/blog-post-01-sm.png" alt="">
                    </div>

                    <div class="info-blur">
                        <h3 class="ttl-4">Titulo do card</h3>
                    </div>
                </div>

                <div class="card group">
                    <div class="img-zoom">
                        <img src="./upload/blog-post-01-sm.png" alt="">
                    </div>

                    <div>
                        <h3 class="ttl-4">Titulo do card</h3>
                    </div>
                </div>

                <div class="card-blue">
                    <div class="inner">
                        
                        <h3 class="ttl-3">Titulo do card blue</h3>
                        
                    </div>
                </div>

            </div>
            
        </section> -->

    </main>


    <?php include_once('_main_footer.php'); ?>