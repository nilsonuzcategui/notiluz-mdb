<?php
include_once('../apis/funciones.php');
$importantes = obtener_importantes();
$ultimas = obtener_7_ultimas_noticias();
$etiquetas = obtener_etiquetas_recientes();

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $ruta_noticia = "/notiluz-mdb/apis/imagenes/";
} else {
    $ruta_noticia = "/apis/imagenes/";
}

$imagenes_principales_html = "";
$i = 0;
foreach ($importantes as $noticia) {
    $bannerActive = ($i == 0) ? 'active' : '';
    $imagenes_principales_html .= '
    <div class="carousel-item ' . $bannerActive . '">
        <img src="' . $ruta_noticia . $noticia['baner'] . '" class="d-block w-100" />
        <div class="carousel-caption" style="background-color: #0d2848a6 !important;">
            <h5 class="banner-titulo-noticia">' . $noticia['titulo'] . '</h5>
            <p class="d-none d-md-block">' . $noticia['subtitulo'] . '</p>
        </div>
    </div>';
    $i++;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../apis/head.php') ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Ofrenda Misionera | Notiluz</title>
    <meta name="description" content="Aquí encontrarás las  explícitas Noticias, de nuestra amada 'Obra Luz del Mundo' a nivel Nacional e Internacional y otros aconteceres del mundo cristiano, las mejores y más importantes acciones de nuestro día a día las podrás disfrutar aquí.">
    <meta property="og:title" content="Notiluz | Noticias Luz del Mundo" />
    <meta property="og:description" content="Aquí encontrarás las  explícitas Noticias, de nuestra amada 'Obra Luz del Mundo' a nivel Nacional e Internacional y otros aconteceres del mundo cristiano, las mejores y más importantes acciones de nuestro día a día las podrás disfrutar aquí." />
    <meta property="og:url" content="hptts://notiluz.com/">
    <meta property="og:site_name" content="Notiluz" />
    <meta property="og:image" content="<?= $ruta_inicio ?>/img/logo-para-redes.png" />
    <meta property="og:image:secure_url" content="<?= $ruta_inicio ?>/img/logo-para-redes.png">
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />

    <style>
        .carta-contenido-noticia {
            color: #333;
        }

        .carta-cuerpo-noticia {
            padding: 0px 15px;
        }

        .lds-roller {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-roller div {
            animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            transform-origin: 40px 40px;
        }

        .lds-roller div:after {
            content: " ";
            display: block;
            position: absolute;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #2075F4;
            margin: -4px 0 0 -4px;
        }

        .lds-roller div:nth-child(1) {
            animation-delay: -0.036s;
        }

        .lds-roller div:nth-child(1):after {
            top: 63px;
            left: 63px;
        }

        .lds-roller div:nth-child(2) {
            animation-delay: -0.072s;
        }

        .lds-roller div:nth-child(2):after {
            top: 68px;
            left: 56px;
        }

        .lds-roller div:nth-child(3) {
            animation-delay: -0.108s;
        }

        .lds-roller div:nth-child(3):after {
            top: 71px;
            left: 48px;
        }

        .lds-roller div:nth-child(4) {
            animation-delay: -0.144s;
        }

        .lds-roller div:nth-child(4):after {
            top: 72px;
            left: 40px;
        }

        .lds-roller div:nth-child(5) {
            animation-delay: -0.18s;
        }

        .lds-roller div:nth-child(5):after {
            top: 71px;
            left: 32px;
        }

        .lds-roller div:nth-child(6) {
            animation-delay: -0.216s;
        }

        .lds-roller div:nth-child(6):after {
            top: 68px;
            left: 24px;
        }

        .lds-roller div:nth-child(7) {
            animation-delay: -0.252s;
        }

        .lds-roller div:nth-child(7):after {
            top: 63px;
            left: 17px;
        }

        .lds-roller div:nth-child(8) {
            animation-delay: -0.288s;
        }

        .lds-roller div:nth-child(8):after {
            top: 56px;
            left: 12px;
        }

        @keyframes lds-roller {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @media only screen and (max-width: 450px) {
            .banner-titulo-noticia {
                font-size: 17px !important;
            }

            .carta-contenido-noticia {
                font-size: 17px;
            }

            .carta-cuerpo-noticia {
                padding: 15px 15px;
            }

        }

        @media only screen and (max-width: 380px) {
            .banner-titulo-noticia {
                font-size: 15px !important;
            }
        }
    </style>
    <script src="./main.js"></script>
</head>

<body>


    <?php include_once('../apis/header.php') ?>

    <div class="container-fluid">
        <div class="row">

            <!-- MENU IZQUIERDO -->
            <?php include_once('../apis/sidebar.php') ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?php include_once('../apis/slider-logo-header.php') ?>


                <div class="align-items-center pt-3 pb-2 mb-3">

                    <!-- CONTENIDO DE LA PAGINA -->
                    <div class="row">

                        <!-- Carousel wrapper -->
                        <div id="carruselNoticia" class="col-12 carousel slide carousel-fade mb-5" data-mdb-ride="carousel">
                            <!-- Inner -->
                            <div class="carousel-inner">
                                <?= $imagenes_principales_html ?>
                            </div>
                            <!-- Inner -->

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-mdb-target="#carruselNoticia" data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-mdb-target="#carruselNoticia" data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- Carousel wrapper -->

                        <div id="contenedor_noticias"></div>


                        <div class="col-12 text-center" id="loadingForm">
                            <div class="lds-roller">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button id="botonVerMas" class="btn btn-primary">Ver más</button>
                        </div>



                    </div>

                </div>
            </main>

        </div>
    </div>



    <?php include_once('../apis/footer.php') ?>
</body>

</html>