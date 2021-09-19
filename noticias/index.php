<?php
include_once('../apis/funciones.php');
$importantes = obtener_importantes();
$ultimas = obtener_7_ultimas_noticias();
$etiquetas = obtener_etiquetas_recientes();

var_dump($importantes);

$imagenes_principales_html = "";
foreach ($importantes as $nocitia) {
    $imagenes_principales_html .= '
    <div class="carousel-item active">
        <img src="https://notiluz.com/apis/imagenes/" class="d-block w-100" />
        <div class="carousel-caption d-none d-md-block">
            <h5>'.$nocitia.'</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
    </div>';
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


</head>

<body>


    <?php include_once('../apis/header.php') ?>

    <div class="container-fluid">
        <div class="row">

            <!-- MENU IZQUIERDO -->
            <?php include_once('../apis/sidebar.php') ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- SLIDER HOME -->
                <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= $ruta_inicio ?>/img/slidertop1.jpg" class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                            <img src="<?= $ruta_inicio ?>/img/slidertop2.jpg" class="d-block w-100" />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- LOGOS -->
                <div style="display: flex;justify-content: space-around;">
                    <img src="<?= $ruta_inicio ?>/img/logo.png" style="width: 120px;height: 120px;">
                    <img src="<?= $ruta_inicio ?>/img/logo-luz-del-mundo.png" style="width: 120px;height: 120px;">
                </div>
                <hr>


                <div class="align-items-center pt-3 pb-2 mb-3">

                    <!-- CONTENIDO DE LA PAGINA -->
                    <div class="row">

                        <!-- Carousel wrapper -->
                        <div id="carruselNoticia" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                            <!-- Inner -->
                            <div class="carousel-inner">
                                <!-- Single item -->
                                <div class="carousel-item active">
                                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="d-block w-100" alt="..." />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="d-block w-100" alt="..." />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg" class="d-block w-100" alt="..." />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
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



                    </div>

                </div>
            </main>

        </div>
    </div>



    <?php include_once('../apis/footer.php') ?>
</body>

</html>