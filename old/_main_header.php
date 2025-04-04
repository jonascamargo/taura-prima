<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PRIMA Design - Móveis e Design para sua casa">
    <meta name="theme-color" content="white">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&family=Roboto:wght@100..900&display=swap" rel="stylesheet">
    
    <!-- FAVICON -->
    <link rel="icon" href="favicon.ico">

    <!-- PLUGIN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- STYLE -->
    <link href="src/css/output.css" rel="stylesheet">

    <title>PRIMA Design</title>
</head>


<body>

    <header id="main-menu">
        <div class="wrap">

            <div class="main-logo">
                <a href="./"><img src="./src/imgs/logo-topo.png" alt="logo: PRIMA Design"></a>
            </div>

            <div class="main-side">
                <div class="main-side-item search">
                    <a href="#buscar" class="item" aria-controls="find_form" aria-expanded="false"><i class="fas fa-search"></i></a>

                    <div class="popdown find_form">DROP-DOWN</div>
                </div>

                <ul class="main-side-item nav" role="navigation">
                    <li><a href="./">Home</a></li>
                    
                    <li><a href="./sobre">Sobre</a></li>

                    <li>
                        <a href="./produtos" aria-controls="submenu_prod" aria-expanded="false">Produtos</a>

                        <div class="popdown submenu_prod">DROP-DOWN</div>
                    </li>

                    <li><a href="./blog">Blog</a></li>
                    
                    <li><a href="./contato">Contato</a></li>
                </ul>

                <div class="main-side-item acess">
                    <a href="" class="item" aria-controls="form_acess" aria-expanded="false">
                        <!-- <span>Jonas C.</span> -->
                        <i class="fas fa-user"></i>
                    </a>

                    <div class="popdown form_acess">DROP-DOWN</div>
                </div>

                <div class="main-side-item lang">
                    <a href="" class="item" aria-controls="submenu_lang" aria-expanded="false">BR</a>

                    <div class="popdown submenu_lang">DROP-DOWN</div>
                </div>
            </div>

        </div>
    </header>
    <!-- END - .main-menu -->