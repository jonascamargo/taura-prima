<?php
include_once('__content.php');
include_once('_header.php');
?>

<main>

    <section id="contact-form">
        <div class="container">

            <header>
                <h1 class="tt-xl">Faça contato</h1>
            </header>

            <div class="wrapper">
                <div class="col left">
                    <header>
                        <div class="text_container">
                            <p>A Prima Design cria móveis inovadores, com detalhes exclusivos em aço e polipropileno, transformando ambientes residenciais e corporativos. Cada peça é uma expressão de originalidade e sofisticação no design.</p>
                        </div>
                    </header>

                    <ul class="contacto-link">
                        <li><a href="tel:+5434553150" target="_blank" class="link-phone"><sub>54 </sub>3455-3150</a></li>
                        <li><a href="https://wa.me/5554999022223" target="_blank" class="link-whats"><sub>54 </sub>99902-2223</a></li>
                        <li><a href="mailto:prima@primadesign.com.br" class="link-email">prima@primadesign.com.br</a></li>
                        <li><a href="https://maps.app.goo.gl/eESyhCfDDrHSDSZY7" target="_blank" rel="noopener noreferrer" class="link-adress">Av. Sao Roque, 2651 - Aparecida Bento Gonçalves - RS, 95708-700</a></li>
                    </ul>

                    <ul class="social-link">
                        <li><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-square-youtube"></i></a></li>
                    </ul>
                </div>

                <div class="col right">
                    <form action="" class="form">
                        <fieldset>
                            <input type="text" placeholder="Nome completo">
                        </fieldset>

                        <div class="fieldset">
                            <fieldset>
                                <input type="email" name="" id="" placeholder="Email">
                            </fieldset>

                            <fieldset>
                                <input type="text" placeholder="Telefone">
                            </fieldset>
                        </div>

                        <fieldset>
                            <input type="text" placeholder="Assunto">
                        </fieldset>

                        <fieldset>
                            <textarea name="" id="" placeholder="Mensagem"></textarea>
                        </fieldset>


                        <div class="action">
                            <button type="submit" class="btn-lg"><span>Enviar mensagem</span><i class="fa-solid fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <hr>


    <section id="map">
        <div class="container-lg">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3485.032311438867!2d-51.54491942464511!3d-29.13423737539457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951c3b1a0f7068dd%3A0x3747e880b31da320!2sPrima%20Design!5e0!3m2!1spt-BR!2sbr!4v1744314862303!5m2!1spt-BR!2sbr" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

</main>

<?php include_once('_footer.php'); ?>