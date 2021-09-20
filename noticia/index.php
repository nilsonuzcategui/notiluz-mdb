<?php
include_once('../apis/funciones.php');
$ruta_imagen_noticia = '../apis/imagenes/';
$noticia = (isset($_GET['n'])) ? $_GET['n'] : '';
$idnoticia = (isset($_GET['i'])) ? $_GET['i'] : '';
$datos_noticia = obtener_noticia_detallada($noticia);

if ($datos_noticia != 0) {
    $imagenes_secundarias = obtener_imagenes_secundarias($idnoticia);
    $titulo = $datos_noticia['titulo'];
    $subtitulo = $datos_noticia['subtitulo'];
    $contenido = $datos_noticia['contenido'];
    $img_banner = $datos_noticia['baner'];
    $img_cuadrada = $datos_noticia['imagen'];

    $contenidoAux = '';
    $num_limite = 150;
    $logitud_contenido = strlen($contenido);
    if ($logitud_contenido <= $num_limite) {
        $contenidoAux = $contenid;
    } else {
        $contenidoAux = substr($contenido, 0, $num_limite) . '...';
    }
} else {
    # No se encontro la noticia
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once('../apis/head.php');
    $extension = pathinfo($ruta_inicio . '/apis/imagenes/' . $img_cuadrada, PATHINFO_EXTENSION);
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= $titulo ?> | Notiluz</title>
    <meta name="description" content="<?= $contenidoAux ?>">
    <meta property="og:title" content="<?= $titulo ?> | Notiluz" />
    <meta property="og:description" content="<?= $contenidoAux ?>" />
    <meta property="og:url" content="<?= $ruta_inicio ?>noticia/?n=<?= $datos_noticia['noticia_url'] ?>&i=<?= $datos_noticia['idnoticia'] ?>">
    <meta property="og:site_name" content="Notiluz" />
    <meta property="og:image" content="<?= $ruta_inicio ?>/apis/imagenes/<?= $img_cuadrada ?>" />
    <meta property="og:image:secure_url" content="<?= $ruta_inicio ?>/apis/imagenes/<?= $img_cuadrada ?>">
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />
    <meta property="og:type" content="article" />
    <meta property="og:image:alt" content="<?= $titulo ?>">
    <meta property="og:image:type" content="image/<?= $extension ?>">

    <meta property="article:publisher" content="https://www.facebook.com/PeriodicoNotiluzInternacional/">
    <meta property="article:section" content="Noticias">
    <meta property="article:published_time" content="<?= $datos_noticia['fecha'] ?>">
    <meta property="article:modified_time" content="<?= $datos_noticia['fecha'] ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $titulo ?> | Notiluz">
    <meta name="twitter:description" content="<?= $contenidoAux ?>">
    <meta name="twitter:image" content="<?= $ruta_inicio ?>apis/imagenes/<?= $img_cuadrada ?>">

    <link href="../libreria/viewerjs-master/viewer.css" rel="stylesheet">
    <script src="../libreria/viewerjs-master/viewer.js"></script>

    <style>
        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 100% !important;
            position: relative;
        }

        @media only screen and (max-width: 600px) {
            .post-date {
                display: none;
            }
        }
    </style>

    <script>
        $(document).ready(function() {
            const gallery = new Viewer(document.getElementById('images'));
        });
    </script>
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

                <?php include_once('../apis/slider-logo-header.php') ?>


                <div class="align-items-center pt-3 pb-2 mb-3">

                    <!-- CONTENIDO DE LA PAGINA -->
                    <div class="row">
                        <div class="col-md-12">
                            <img src="https://notiluz.com/apis/imagenes/<?= $img_banner ?>" style="width: 100%;">
                            <h2 class="titulo-fuente mb-2"><?= ucfirst($titulo) ?></h2>
                            <h5><?= ucfirst($subtitulo) ?></h5>
                            <p class="text-muted" style="font-size: 12px;margin-bottom: 0;">
                                Publicado hace
                                <script>
                                    document.write(moment('<?= $datos_noticia['fecha'] ?>').fromNow(true));
                                </script>
                            </p>
                            <hr>
                        </div>


                        <div class="col-12">
                            <p style="color: #111;font-size: 20px;">
                                <?= nl2br(htmlentities($contenido, ENT_QUOTES, 'UTF-8')) ?>
                            </p>
                        </div>

                        <div class="col-12">
                            <h2 class="titulo-fuente">Galería</h2>
                            <hr>
                            <div class="row" id="images">
                                <div class="col-md-3 mb-3">
                                    <img src="https://notiluz.com/apis/imagenes/<?= $datos_noticia['imagen'] ?>" alt="<?= $datos_noticia['titulo'] ?>" style="width: 100%;">
                                </div>
                                <?php
                                if ($imagenes_secundarias != 0) {
                                    foreach ($imagenes_secundarias as $row) {
                                        echo '<div class="col-md-3 mb-3"><img src="https://notiluz.com/apis/imagenes/' . $row['imagen'] . '" alt="' . $datos_noticia['titulo'] . '" style="width: 100%;"></div>';
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="fb-comments" data-href="https://notiluz.com/noticia/?n=<?= $datos_noticia['noticia_url'] ?>&i=<?= $datos_noticia['idnoticia'] ?>" data-numposts="10" data-width="100%"></div>
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