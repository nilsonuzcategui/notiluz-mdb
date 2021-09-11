<!DOCTYPE html>
<html lang="es">

<head>

    <?php include_once('../../apis/head.php') ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GPQYH6YJJL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-GPQYH6YJJL');
    </script>

    <meta charset="UTF-8">
    <meta name="description" content="Joyas Luz del Mundo, el Manual de nuestra amada obra, acá veras como se organiza esta hermosa iglesia, con sus leyes y estatutos.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta property="og:title" content="Libro Joyas Luz del Mundo | Notiluz" />
    <meta property="og.type" content="article" />
    <meta property="og:description" content="Joyas Luz del Mundo, el Manual de nuestra amada obra, acá veras como se organiza esta hermosa iglesia, con sus leyes y estatutos." />
    <meta property="og:url" content="<?= $ruta_inicio ?>joyas-luz-del-mundo/">
    <meta property="og:site_name" content="Notiluz" />
    <meta property="article:publisher" content="https://www.facebook.com/PeriodicoNotiluzInternacional/">
    <meta property="article:section" content="Libros">

    <meta property="og:image" content="<?= $ruta_inicio ?>libros/portadas/joyas-luz-del-mundo-redes.jpg" />
    <meta property="og:image:secure_url" content="<?= $ruta_inicio ?>libros/portadas/joyas-luz-del-mundo-redes.jpg">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="453" />
    <meta property="og:image:alt" content="Libro Joyas Luz del Mundo">
    <meta property="og:image:type" content="image/jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Libro Joyas Luz del Mundo | Notiluz">
    <meta name="twitter:description" content="Joyas Luz del Mundo, el Manual de nuestra amada obra, acá veras como se organiza esta hermosa iglesia, con sus leyes y estatutos.">
    <meta name="twitter:image" content="<?= $ruta_inicio ?>libros/portadas/joyas-luz-del-mundo-redes.jpg">

    <!-- Title -->
    <title>Libro Joyas Luz del Mundo | Notiluz</title>

    <script src="../../libreria/onebook3d/jquery.mousewheel.min.js"></script>

    <script src="../../libreria/onebook3d/three.min.js"></script>

    <script src="../../libreria/onebook3d/jquery.onebook3d-2.33.js"></script>

    <link href="../../libreria/viewerjs-master/viewer.css" rel="stylesheet">
    <script src="../../libreria/viewerjs-master/viewer.js"></script>

    <style>
        /* #OneBook3d_123456_stage{
    z-index: 0 !important;
} */
        /* #OneBook3d_123456_background{
    background: #666 !important;
} */


        #scrollUp {
            display: none !important;
        }

        #contenedor_libro_responsive {
            display: none;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            height: 100px;
            width: 100px;
            outline: black;
            background-size: 100%, 100%;
            border-radius: 50%;
            background-image: none;
        }

        .carousel-control-next-icon:after {
            content: '>';
            font-size: 55px;
            color: rgb(6, 6, 6);
        }

        .carousel-control-prev-icon:after {
            content: '<';
            font-size: 55px;
            color: rgb(6, 6, 6);
        }

        @media only screen and (max-width: 767px) {
            .header-area .logo-area {
                height: 170px !important;
            }

            #contenedor_libro {
                display: none !important;
            }

            #OneBook3d_123456_stage,
            #OneBook3d_123456_icons_panel,
            #OneBook3d_123456_save_menu {
                display: none !important;
            }

            #contenedor_libro_responsive {
                display: block;
            }
        }

        @media only screen and (max-width: 344px) {
            .header-area .logo-area {
                height: 210px !important;
            }
        }
    </style>

    <script>
        $(document).ready(function() {
            var src = [
                'img/joyas luz del mundo_pages-to-jpg-0001.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0002.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0003.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0004.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0005.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0006.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0007.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0008.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0009.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0010.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0011.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0012.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0013.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0014.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0015.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0016.jpg',
                'img/joyas luz del mundo_pages-to-jpg-0017.jpg',

            ];

            $('#mybook').onebook(src, {
                'bgDark': 'dark'
            });


            const gallery = new Viewer(document.getElementById('carouselExampleControls'));

            // $('#carouselExampleControls').carousel({
            //     interval: 50000
            // })
        });
    </script>
</head>

<body style="background: #777;">

    <header class="header-area">
        <!-- Logo Area -->
        <div class="logo-area text-center" style="background: #fff;box-shadow: 0px 5px 10px 0px black;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">

                        <a href="<?= $ruta_inicio ?>" class="original-logo div-logo-cabezera">
                            <img class="text-center" src="<?= $ruta_inicio ?>/img/logo.png" alt="notiluzinternacional.com" width="100">
                            <h1 class="m-auto" style="font-size: 25px;color: #f9e700;text-shadow: 0 0 3px #011566;">NOTILUZ INTERNACIONAL</h1>
                        </a>

                    </div>

                    <div class="col-12 text-left">

                        <div>
                            <a href="../"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atrás</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br><br><br>
            </div>
            <div class="col-md-4">
                <h2 class="titulo-fuente" style="color:#fff;">Joyas de la Luz del Mundo</h2>
                <hr>
                <p style="color:#fff;">
                    Vendrán muchos pueblos, y dirán: "Venid y subamos al monte de Jehová, a la casa del Dios de Jacob;
                    y nos enseñará sus caminos y caminaremos por sus sendas, porque de DIos saldrá la ley, y de Jerusalem
                    la Palabra de Jehová". Isaías 2:3.
                </p>
            </div>


            <div id="contenedor_libro" class="col-md-8 d-sm-none d-md-block" style="background-color: #9a9a9a;padding: 10px !important;">
                <div id="mybook"></div>
            </div>

            <div id="contenedor_libro_responsive" class="col-md-12">

                <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0001.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0002.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0003.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0004.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0005.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0006.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0007.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0008.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0009.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0010.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0011.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0012.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0013.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0014.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0015.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0016.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/joyas luz del mundo_pages-to-jpg-0017.jpg">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>





            <div class="col-md-12">
                <br><br><br><br>
                <br><br><br><br>
            </div>

        </div>
    </div>







    <?php include_once('../../apis/footer.php') ?>
</body>

</html>