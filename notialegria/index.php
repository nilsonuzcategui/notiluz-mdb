<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../apis/head.php') ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Notialegria | Notiluz</title>
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
                        <div class="col-12 mb-3">
                            <img src="<?= $ruta_inicio ?>/img/banner/notialegria.png" class="img-banner">
                        </div>

                        
                        <div class="col-md-12">
                            <h2 class="titulo-fuente">Notialegria</h2>
                            <hr>
                        </div>
                        
                        <div class="col-md-6">
                            <p>
                            Es una visión de nutrición alimenticia del Periódico Notiluz, la cual nació al observar la necesidad que tienen nuestros 
                            niños y niñas en Venezuela, a causa de la situación económica actual que atraviesa el País.
                            </p>
                            <p>
                            Por esa razón, cada vez que un empresario se anima a dar su aporte, le preparamos un rico y nutritivo almuerzo a 
                            los pequeños, el cual va acompaño de un jugo, esto se ofrece a los más necesitados quienes andan en las calles y 
                            aún así a algunos que tienen techo y abrigo pero pasan días sin ingerir alimentos.
                            </p>
                            <h2 class="titulo-fuente text-center" style="color: #555;font-size: 25px !important;">"Toda la gloria sea para Dios"</h2>
                        </div>
                        <div class="col-md-6">
                            <!-- Carousel wrapper -->
                                <div
                                id="carruselNotiAlegria"
                                class="carousel slide carousel-fade ms-3"
                                data-mdb-ride="carousel"
                                >

                                <!-- Inner -->
                                <div class="carousel-inner">
                                    <!-- Single item -->
                                    <div class="carousel-item active">
                                    <img
                                        src="<?=$ruta_inicio?>/img/notialegria/foto1.png"
                                        class="d-block"
                                    />
                                    </div>

                                    <div class="carousel-item">
                                    <img
                                        src="<?=$ruta_inicio?>/img/notialegria/foto2.png"
                                        class="d-block"
                                    />
                                    </div>

                                    <div class="carousel-item">
                                    <img
                                        src="<?=$ruta_inicio?>/img/notialegria/foto3.png"
                                        class="d-block"
                                    />
                                    </div>

                                    <div class="carousel-item">
                                    <img
                                        src="<?=$ruta_inicio?>/img/notialegria/foto4.png"
                                        class="d-block"
                                    />
                                    </div>

                                    <div class="carousel-item">
                                    <img
                                        src="<?=$ruta_inicio?>/img/notialegria/foto5.jpg"
                                        class="d-block"
                                    />
                                    </div>
                                    
                                </div>
                                <!-- Inner -->

                                <!-- Controls -->
                                <button
                                    class="carousel-control-prev"
                                    type="button"
                                    data-mdb-target="#carruselNotiAlegria"
                                    data-mdb-slide="prev"
                                >
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button
                                    class="carousel-control-next"
                                    type="button"
                                    data-mdb-target="#carruselNotiAlegria"
                                    data-mdb-slide="next"
                                >
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                                <!-- Carousel wrapper -->
                        </div>


                        <div class="col-12">
                            <h2 class="titulo-fuente">Contácto</h2>
                            <hr>
                            <p>
                                Si deseas ser partícipe de esta noble visión, escríbenos atraves de
                            </p>
                            <div>
                                <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=584145431445&text=Quiero%20contactar%20con%20la%20administraci%C3%B3n%20de%20notiluzinternacional" target="_blank">Whatsapp</a>
                                <a class="btn btn-info" href="periodiconotiluzinternacional@gmail.com">Correo Electrónico</a>
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