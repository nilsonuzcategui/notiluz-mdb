<?php
include_once('../apis/funciones.php');
$tratadoUrl = (isset($_GET['t'])) ? $_GET['t'] : '';
if ($tratadoUrl != '') {
    include_once('tratado.php');
} else {
    $tratados = obtener_tratados();
    $html_tratados = '';
    if ($tratados != 0) {
        foreach ($tratados as $row) {
            $contenidoAux = '';
            $num_limite = 200;
            $logitud_contenido = strlen($row['contenido']);
            if ($logitud_contenido <= $num_limite) {
                $contenidoAux = $row['contenido'];
            } else {
                $contenidoAux = substr($row['contenido'], 0, $num_limite) . '...';
            }
            $html_tratados .= '
                <div class="col-md-4">
                    <div class="card">
                        <img src="../apis/imagenes/' . $row['imagen_url'] . '" class="card-img-top" alt="' . $row['titulo'] . '" title="' . $row['titulo'] . '"/>
                        <div class="card-body">
                            <h5 class="card-title" style="color: #333;">' . $row['titulo'] . '</h5>
                            <p class="card-text">
                                ' . $contenidoAux . '
                            </p>
                            <div class="text-center">
                                <a href="?t=' . $row['tratado_url'] . '" class="btn btn-primary">Leer Online</a>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    } else {
        $html_tratados = '
        <div class="alert alert-warning" role="alert">
            No se han publicado tratados todavia, intente más tarde.
        </div>';
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php 
            include_once('../apis/head.php');
            $descriptionAux = 'En este espacio encontrarás una serie de tratados de nuestro amado Pastor: Jaime Puertas.';
        ?>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Tratados | Notiluz</title>
        <meta name="description" content="<?=$descriptionAux?>">
        <meta property="og:title" content="Tratados | Notiluz" />
        <meta property="og:description" content="<?=$descriptionAux?>" />
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
                    <?php include_once('../apis/slider-logo-header.php') ?>


                    <div class="align-items-center pt-3 pb-2 mb-3">

                        <!-- CONTENIDO DE LA PAGINA -->
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="titulo-fuente mb-4">Tratados - Hno. Puertas</h2>
                            </div>

                            <?= $html_tratados ?>




                        </div>






                    </div>

            </div>
            </main>

        </div>
        </div>



        <?php include_once('../apis/footer.php') ?>
    </body>

    </html>
<?php
} //fin else tratadoUrl 
?>