<?php
$tratadoUrl = $tratadoUrl;
$datos = obtener_tratado($tratadoUrl);
$idtratado = $datos['idtratado'];
$tratado_img = obtener_tratado_img($idtratado);
$portada_tratado = '';
$html_carrusel = '';
if ($tratado_img != 0) {
    $portada_tratado = $tratado_img['imagen_url'];
}
$contenidoAux = '';
$num_limite = 150;
$logitud_contenido = strlen($datos['contenido']);
if ($logitud_contenido <= $num_limite) {
    $contenidoAux = $datos['contenido'];
}else {
    $contenidoAux = substr($datos['contenido'], 0, $num_limite).'...';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once('../apis/head.php'); 
        $extension = pathinfo($ruta_inicio.'/apis/imagenes/'.$portada_tratado, PATHINFO_EXTENSION);
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Tratados: <?=$datos['titulo']?> | Notiluz</title>
    <meta name="description" content="<?=$contenidoAux?>">
    <meta property="og:title" content="Tratados: <?=$datos['titulo']?> | Notiluz" />
    <meta property="og:description" content="<?=$contenidoAux?>" />
    <meta property="og:url" content="<?=$ruta_inicio?>tratado/?t=<?=$datos['tratado_url']?>">
    <meta property="og:site_name" content="Notiluz" />
    <meta property="og:image" content="<?= $ruta_inicio ?>/apis/imagenes/<?=$portada_tratado?>" />
    <meta property="og:image:secure_url" content="<?= $ruta_inicio ?>/apis/imagenes/<?=$portada_tratado?>">
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />
    <meta property="og:type" content="article"/>
    <meta property="og:image:alt" content="<?=$datos['titulo']?>">
    <meta property="og:image:type" content="image/<?=$extension?>">

    <meta property="article:publisher" content="https://www.facebook.com/PeriodicoNotiluzInternacional/">
    <meta property="article:section" content="Noticias">
    <meta property="article:published_time" content="<?=$datos['fecha_creado']?>">
    <meta property="article:modified_time" content="<?=$datos['fecha_modificado']?>">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tratados: <?=$datos['titulo']?> | Notiluz">
    <meta name="twitter:description" content="<?=$contenidoAux?>">
    <meta name="twitter:image" content="<?=$ruta_inicio?>apis/imagenes/<?=$portada_tratado?>">
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
                            <h2 class="titulo-fuente mb-2"><?= ucfirst($datos['titulo']) ?></h2>
                            <p class="text-muted" style="font-size: 12px;margin-bottom: 0;">
                                Publicado hace 
                                <script>
                                    document.write(moment('<?=$datos['fecha_creado']?>').fromNow(true));
                                </script>
                            </p>
                        </div>


                        <div class="col-12">
                            <p style="color: #111;font-size: 20px;">
                                <?= nl2br(htmlentities($datos['contenido'], ENT_QUOTES, 'UTF-8')) ?>
                            </p>
                        </div>

                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <img src="../apis/imagenes/<?= $portada_tratado ?>" style="width: 100%;">
                        </div>
                        <div class="col-md-4"></div>

                    </div>
                </div>
        </div>
        </main>

    </div>
    </div>



    <?php include_once('../apis/footer.php') ?>
</body>

</html>