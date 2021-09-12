<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../apis/head.php') ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Agroecoluz | Notiluz</title>
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
        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 100% !important;
            position: relative;
        }
    </style>
</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0&appId=570358796684017&autoLogAppEvents=1" nonce="Ovp0ysNR"></script>

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
                            <img src="<?= $ruta_inicio ?>/img/banner/agroecoluz- banners.png" class="img-banner">
                        </div>


                        <div class="col-md-12">
                            <h2 class="titulo-fuente">Agroecología</h2>
                            <hr>
                        </div>



                        <div class="col-md-6 wow fadeInUp mb-4" data-wow-delay="0.2s" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <p>
                                La Agroecologia es un sistema de producción agrícola, que tiene como finalidad aprovechar las riquezas de la tierra, sin perjudicar trágicamente la biodiversidad. En otro termino la Agroecologia es:
                            </p>
                            <ul style="color: #878787;font-size: 14px;line-height: 1.4;font-family: 'helveticaneuemedium';">
                                <li style="list-style: disc;margin-left: 15px;">Producir alimentos sanos.</li>
                                <li style="list-style: disc;margin-left: 15px;">Cuidar el ambiente.</li>
                                <li style="list-style: disc;margin-left: 15px;">Garantizar el bien estar del productor y del consumidor.</li>
                            </ul>

                            <h3 class="titulo-fuente" style="color: #3a3939;font-size: 25px !important;">Las técnicas de la Agroecologia</h3>
                            <ul style="color: #878787;font-size: 14px;line-height: 1.4;font-family: 'helveticaneuemedium';">
                                <li style="list-style: disc;margin-left: 15px;">Diversificar el agroecosistema.
                                    <ul style="color: #878787;font-size: 14px;line-height: 1.4;font-family: 'helveticaneuemedium';">
                                        <li style="list-style: none;margin-left: 15px;">Asociación de cultivo.</li>
                                        <li style="list-style: none;margin-left: 15px;">Rotación de cultivo.</li>
                                    </ul>
                                </li>

                                <li style="list-style: disc;margin-left: 15px;">Adaptación a las condiciones locales.
                                    <ul style="color: #878787;font-size: 14px;line-height: 1.4;font-family: 'helveticaneuemedium';">
                                        <li style="list-style: none;margin-left: 15px;">Usar los recursos disponibles en el espacio para la producción
                                            Tomar en cuenta las experiencias de los productores locales antes de definir los proyectos.
                                            Balancear el flujo de nutrientes y energías, conservar los recursos.</li>
                                    </ul>
                                </li>
                            </ul>

                            <h3 class="titulo-fuente" style="color: #3a3939;font-size: 25px !important;">Las ventajas de la Agroecologia</h3>
                            <ul style="color: #878787;font-size: 14px;line-height: 1.4;font-family: 'helveticaneuemedium';">
                                <li style="list-style: disc;margin-left: 15px;">Aumento de la productividad de los suelos.</li>
                                <li style="list-style: disc;margin-left: 15px;">Contribuye a mejorar la nutrición, ofreciendo alimentos libres de tóxicos.</li>
                                <li style="list-style: disc;margin-left: 15px;">Participar en frenar los cambios climaticos.</li>
                                <li style="list-style: disc;margin-left: 15px;">Ayudar en reducir la pobreza rural y urbana.</li>
                                <li style="list-style: disc;margin-left: 15px;">Participar en levantar la calidad ambiental. Así regresando la mente humana hacía la bendición que aporta la tierra durante el camino de la vida.</li>

                            </ul>
                        </div>



                        <div class="col-md-6">
                            <!-- Carousel wrapper -->
                            <div id="carruselNotiAlegria" class="carousel slide carousel-fade ms-3" data-mdb-ride="carousel">

                                <!-- Inner -->
                                <div class="carousel-inner">
                                    <!-- Single item -->
                                    <div class="carousel-item active">
                                        <img src="<?= $ruta_inicio ?>/img/agroecoluz/img2.jpg" class="d-block" />
                                    </div>

                                    <div class="carousel-item">
                                        <img src="<?= $ruta_inicio ?>/img/agroecoluz/img3.jpg" class="d-block" />
                                    </div>


                                </div>
                                <!-- Inner -->

                                <!-- Controls -->
                                <button class="carousel-control-prev" type="button" data-mdb-target="#carruselNotiAlegria" data-mdb-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-mdb-target="#carruselNotiAlegria" data-mdb-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <!-- Carousel wrapper -->
                        </div>


                        <div class="col-12">
                            <h2 class="titulo-fuente" style="font-size: 25px !important;">Lic. Jacob Montinard</h2>
                            <hr>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img src="<?= $ruta_inicio ?>/img/agroecoluz/Jacob-Montinard-cuadrado.png" alt="..." class="img-fluid" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Agroecologo</h5>
                                            <p class="card-text">
                                                Nacido el 07 de Noviembre del 1983 en Haití, en un pueblo que se llama Baradères, del Estado de NIPPE, crecido en la Capital, Puerto Príncipe.

                                                Después de su bachillerato, estudio <b>AGROECOLOGIA</b> En Venezuela, estuvo en Cuba en 2010 para unos experimentos en <b>Agricultura de Montaña</b> en la Universidad de Pinar del río.

                                                Hoy en día <b>ASESOR CIENTÍFICO Y CONSEJERO INTERNACIONAL</b> En la OBRA LUZ DEL MUNDO INTERNACIONAL.
                                            </p>
                                            <h6>
                                                <a target="_blank" style="padding-right: 5px;" href="https://api.whatsapp.com/send?phone=584245889308&amp;text=Quiero%20mas%20informaci%C3%B3n%20sobre%20las%20noticias%20y%20consejos%20de%20Agroecoluz%20de%20la%20pagina%20Notiluz.com">
                                                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                                </a>

                                                <a target="_blank" style="padding-right: 5px;" href="mailto:montinardjacob30@gmail.com">
                                                    <i class="fas fa-envelope" aria-hidden="true"></i>
                                                </a>

                                                <a target="_blank" style="padding-right: 5px;" href="https://www.facebook.com/jacob.montinard">
                                                    <i class="fab fa-facebook-square" aria-hidden="true"></i>
                                                </a>

                                                <a target="_blank" style="padding-right: 5px;" href="https://www.instagram.com/jmontinard/">
                                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                                </a>

                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <h2 class="titulo-fuente" style="font-size: 25px !important;">Consejos por Jacob Montinard</h2>
                            <hr>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Tips #1 - Abono de Estiercol, arena, concha de arroz y su Preparación.
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-mdb-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <p>
                                                        <b>Abono de Estiercol, arena y concha de Arroz;</b> Este abono se prepara mezclando estos 3 elementos con un porcentaje de:
                                                        <br>
                                                        1: 25% de estiércol, de ganado
                                                        <br>
                                                        2: 35 de harena de río
                                                        <br>
                                                        3: 40 de concha de arroz
                                                        <br>
                                                        Se humedece y se revisa cada 15 días hasta que la temperatura llega a temperatura de ambiente.
                                                    </p>

                                                    <p>
                                                        <b>Beneficios respetando los pasos de preparación:</b> <br>
                                                        Aportan : Nitrógeno, Fósforo, Potasio. <br>
                                                        Que son los macro Nutrientes en la producción agrícola. <br>
                                                        <br>
                                                        Los famosos NPK <br>
                                                        Ciertamente en una proporción. <br>
                                                        <br>
                                                        La concha de arroz ayuda bastante a la infiltración de suelo, lo que es un factor primordial en la humedad.
                                                        <br><br>
                                                        Ya que más del 90 % De las plantas depende de un buen sistema de riego, para facilitar la presencia del agua en las raíces. Y las bosta de animal, ayuda en la presencia de microorganismos, que son los responsables de la digestión, ya que la boca de las plantas son sus raíces..!
                                                    </p>
                                                </div>
                                                <div class="col-md-5 wow fadeInUp mb-4" data-wow-delay="0.5s" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                    <div id="carouselExampleIndicators2" class="carousel slide" data-mdb-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="<?= $ruta_inicio ?>/img/agroecoluz/tip1-img1.png" alt="agroecoluz">

                                                            </div>
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="<?= $ruta_inicio ?>/img/agroecoluz/tip1-img2.png" alt="agroecoluz">

                                                            </div>

                                                        </div>
                                                        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators2" data-mdb-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </button>
                                                        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators2" data-mdb-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Next</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <hr>


                        <div class="col-md-12">
                            <div class="fb-comments" data-href="https://notiluz.com/agroecoluz" data-numposts="10" data-width="100%"></div>
                        </div>



                    </div>

                </div>
            </main>

        </div>
    </div>



    <?php include_once('../apis/footer.php') ?>
</body>

</html>