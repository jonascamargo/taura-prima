<?php
include_once('__content.php');
include_once('_header.php');
?>

<main>
    <section>
        <div class="container">
            <h1 class="tt-2xl">TItulo 2XL</h1>
            <h2 class="tt-xl">TItulo XL</h2>
            <h3 class="tt-lg">TItulo LG</h3>
            <h4 class="tt">TItulo</h4>
            <h6 class="tt-sm">TItulo SM</h6>

            <hr>

            <p class="tx-xl">Texto tamanho XL</p>
            <p class="tx-lg">Texto tamanho LG</p>
            <p class="tx">Texto</p>
            <p class="tx-sm">Texto tamanho SM</p>

            <hr>

            <ul>
                <li><a href="" class="btn-sm"><span>Botão</span></a></li>
                <li><a href="" class="btn-sm"><i class="fa-solid fa-droplet"></i></a></li>
                <li><a href="" class="btn"><span>Botão</span></a></li>
                <li><a href="" class="btn-lg"><span>Botão</span></a></li>
                <li><a href="" class="btn-xl"><span>Botão</span></a></li>
                <li><br></li>
                <li><a href="" class="btn line"><span>Botão</span></a></li>
                <li><a href="" class="btn line white"><span>Botão</span></a></li>
                <li><a href="" class="btn-xl line light"><span>Botão</span><i class="fa-solid fa-person-skating"></i></a></li>
                <li><a href="" class="btn light"><span>Botão</span></a></li>
                <li><button class="btn white"><span>Botão</span></button></li>
                <li><a href="" class="btn"><span>Botão</span><i class="fa-solid fa-play"></i></a></li>
            </ul>

            <hr>

            <ul>
                <li><a href="" class="link"><span>Link com icone</span><i class="fa-solid fa-arrow-right"></i></a></li>
                <li><a href="" class="link"><span>Link sem icone</span></a></li>
                <li><br></li>
                <li><a href="" class="link-sm"><span>Link pequeno</span></a></li>
                <li><a href="" class="link-lg"><span>Link grande</span></a></li>
                <li><a href="" class="link light"><span>Link claro</span></a></li>
                <li><a href="" class="link white"><span>Link branco</span></a></li>
            </ul>
            
            <hr>

            <form class="form">
                <fieldset>
                    <input type="text" placeholder="Campo de TEXTO">
                </fieldset>

                <div class="fieldset">
                    <fieldset>
                        <input type="email" placeholder="Campo de E-MAIL">
                    </fieldset>

                    <fieldset>
                        <input type="password" name="" id=""  placeholder="Campo de SENHA">
                    </fieldset>
                </div>

                <fieldset>
                    <textarea name="" id="" placeholder="Campo de TEXTAREA"></textarea>
                </fieldset>

                <fieldset>
                    <select name="" id="">
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="">Item 01</option>
                        <option value="">Item 02</option>
                        <option value="">Item 03</option>
                    </select>
                </fieldset>
            </form>

            <hr>

            <div class="text_container">
                <p>Lorem ipsum dolor sit amet <strong>consectetur</strong> <em>adipisicing</em> elit. Aperiam quisquam sed eaque dignissimos. Quam quas autem quia distinctio facilis? Tempora eius quidem consequuntur voluptate modi omnis alias sed ipsam sunt.</p>
                <p>Lorem ipsum dolor sit amet <i></i> <u>adipisicing</u> elit. Aperiam quisquam sed eaque dignissimos.</p>

                <ul>
                    <li>Item 1 da lista</li>
                    <li>Item 2 da lista</li>
                    <li>Item 3 da lista</li>
                </ul>

                <p>Lorem ipsum dolor sit amet consectetur a fugiat magnam magni? <a href="">Aliquam</a>, iste. Mollitia, obcaecati.</p>

                <figure>
                    <img src="./upload/home-produto-01.png" alt="">
                </figure>
            </div>

            <hr>

            <ul>
                <li class="card-blue">
                    <div class="tt-lg">Titulo</div>
                    <div class="tx-lg">Conteudo do card</div>
                </li>

                <li class="card-blue">
                    <div class="tt-lg">Titulo</div>
                    <div class="tx-lg">Conteudo do card</div>
                </li>

                <li class="card-blue">
                    <div class="tt-lg">Titulo</div>
                    <div class="tx-lg">Conteudo do card</div>
                </li>
            </ul>
            
            <hr>
        </div>
    </section>
</main>

