<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../apis/head.php') ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Libros | Notiluz</title>
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

                        <div class="col-md-12">
                            <h2 class="titulo-fuente">Libros Hrno. Puertas</h2>
                            <hr>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="portadas/joyas-luz-del-mundo.jpg" alt="luz del mundo - joyas luz del mundo" style="width: 100%;">
                                    <h5 class="card-title">Joyas de Luz del Mundo</h5>
                                    <p class="card-text">Preguntas y respuesta que todo santo debe conocer.</p>
                                    <div style="display: flex;justify-content: space-between;">
                                        <a href="pdf/joyas%20luz%20del%20mundo.pdf" class="btn btn-success">Descargar</a>
                                        <a href="joyas-luz-del-mundo/" class="btn btn-primary">Leer online</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="portadas/tierra-santa-redes.jpg" alt="luz del mundo - tierra santa es" style="width: 100%;">
                                    <h5 class="card-title mt-2">Tierra santa es</h5>
                                    <p class="card-text">Un libro sobre las maravillas de Dios para con Israel.</p>
                                    <div style="display: flex;justify-content: space-between;">
                                        <a href="pdf/tierra%20santa.pdf" class="btn btn-success">Descargar</a>
                                        <a href="tierra-santa/" class="btn btn-primary">Leer online</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="portadas/ayunadores.jpg" alt="luz del mundo - Ayunadores" style="width: 100%;">
                                    <h5 class="card-title mt-2">Setenta Ayunadores</h5>
                                    <p class="card-text">Una expectacular guía sobre el ayuno que Dios quiere que nosotros cumplamos, Aqui recibirás tips para empezar tu ayuno de forma eficiente.</p>
                                    <div style="display: flex;justify-content: space-between;">
                                        <a href="pdf/ayunadores.pdf" class="btn btn-success">Descargar</a>
                                        <a href="ayunadores/" class="btn btn-primary">Leer online</a>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>
            </main>

        </div>
    </div>



    <?php include_once('../apis/footer.php') ?>
</body>

</html>