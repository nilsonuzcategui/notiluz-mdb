<?php
include_once('../apis/funciones.php');
$preguntas = obtener_preguntas();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once('../apis/head.php');
    $descriptionAux = '¿Necesitas una respuesta para una solucion? El Dr. Puertas está dispuesto en responder todas las inquietudes que puedas tener según lo dictado por la Palabra de Dios.';
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Preguntas y Respuestas | Notiluz</title>
    <meta name="description" content="<?=$descriptionAux?>">
    <meta property="og:title" content="Preguntas y Respuestas | Notiluz" />
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
                        <div class="col-12 mb-3">
                            <img src="<?= $ruta_inicio ?>/img/banner/banner-preguntas-respuestas-op.png" class="img-banner">
                        </div>

                        <div role="alert" class="col-12 alert alert-warning">
                            <p><b>Importante!</b> Agradecemos a todos nuestros queridos visitantes que al momento de realizar una pregunta, esta sea planteada en pocas palabras, de manera precisa y directa, recordando que para dar repuesta también se requiere de espacio y el mismo es limitado: </p>
                            <p> Este espacio es para aprender, no para discusiones – genealogías - costumbres ni tradiciones..! Las preguntas farisaicas: serán eliminadas - ¡solo responderemos las preguntas edificativas! </p>
                            <p><b>Al respecto nuestro hermano Puertas nos dice:</b> LAS PREGUNTAS DE JESUS EL MESÍAS, SIRVEN DE MODELO, Para no alargar las nuestras: ¿Por qué me buscabais?, ¿No sabíais que en los negocios de mi Padre, me es necesario estar?, ¿Qué tengo contigo mujer?, ¿Quieres ser sano?, ¿Cómo te llamas?, ¿Qué quieres que te haga?, ¿Dónde le pusisteis?, ¿No te he dicho que si creyeres, verás la Gloria de Dios?, Hombre de poca fe, ¿Por qué dudaste?, ¿Quién dicen los hombres, que soy yo?, DIOS MIO, DIOS MIO, ¿POR QUÉ ME HAS DESAMPARADO?, Mujer, ¿Por qué lloras?, ¿A quién buscas? - Juan 20:15. </p>
                            <p><b>¡EL QUE AHORRA SUS PALABRAS, TIENE SABIDURÍA!</b></p>
                        </div>

                        <div class="col-md-2"></div>
                        <form class="col-md-12 mb-4" id="form-preguntas">
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" name="nombre" id="form4Example1" class="form-control" />
                                <label class="form-label" for="form4Example1">Nombre y Apellido (opcional)</label>
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" name="pregunta" id="form4Example3" rows="4" required></textarea>
                                <label class="form-label" for="form4Example3">Pregunta</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" id="boton-form">Enviar Pregunta <i class="fas fa-paper-plane"></i></button>
                            <button class="btn btn-primary btn-block mb-4" type="button" disabled id="boton-loading" style="display: none;">
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                Enviando...
                            </button>
                        </form>
                        <div class="col-md-2"></div>

                        <div class="col-12">
                            <h2 class="titulo-fuente">Preguntas</h2>
                            <hr>

                            <?php
                            if ($preguntas != 0) { //si existen preguntas
                                foreach ($preguntas as $row) {
                                    //ver si tiene respuesta
                                    $html_respuesta = '';
                                    if ($row['respuesta'] != '') {
                                        $html_respuesta = '
                                        <span class="dpl-newmdb-docs-alert">
                                            <div class="alert alert-info d-flex justify-content-between" role="alert" data-mdb-color="info">

                                            <p class="mb-0">
                                            <i class="fas fa-check"></i>
                                                ' . $row['respuesta'] . '
                                            </p>

                                            </div>
                                        </span>
                                        ';
                                    }

                                    $icono = ($row['destacado'] == 1) ? '<i class="far fa-star" style="color: gold;"></i>' : '';
                                    echo '
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-1 text-center">
                                                <img src="' . $ruta_inicio . '/img/logo.png" class="img-fluid" style="max-width: 70px;" />
                                            </div>
                                            <div class="col-md-11" style="margin: auto 0;display: flex;justify-content: space-between;">
                                                <div class="ms-3">
                                                    <h5 class="card-title">' . $row['nombre'] . '</h5>
                                                    <p class="card-text">
                                                        <small class="text-muted"><i class="far fa-calendar-alt"></i>
                                                            <script>
                                                                document.write(moment("' . $row['fecha'] . '").format("MMMM Do YYYY, h:mm:ss a"));
                                                            </script>
                                                        </small>
                                                    </p>
                                                </div>

                                                <div style="margin-right: 10px;">
                                                    ' . $icono . '
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card-body">

                                                    <p class="card-text">
                                                    <i class="far fa-question-circle"></i> 
                                                    ' . $row['pregunta'] . ' 
                                                    </p>
                                                    
                                                    ' . $html_respuesta . '
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                            } else {
                                echo 'no hay preguntas';
                            }
                            ?>

                            <script src="main.js"></script>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>



    <?php include_once('../apis/footer.php') ?>
</body>

</html>