<?php
//Variable para las rutas
if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '192.168.1.16'){
    $ruta_inicio = "/notiluz-mdb";
}else{
    $ruta_inicio = "/";
}
?>

<!-- MDB icon -->
<link rel="icon" href="<?=$ruta_inicio?>/favicon.ico" type="image/x-icon" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
<!-- Google Fonts Roboto -->
<link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
/>
<!-- MDB -->
<link rel="stylesheet" href="<?=$ruta_inicio?>/css/mdb.min.css" />

<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
<!-- <link href="dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="<?=$ruta_inicio?>/dashboard.css" rel="stylesheet">
<script src="<?=$ruta_inicio?>/js/jquery-2.2.4.min.js"></script>
<script src="<?=$ruta_inicio?>/js/moment-with-locales.js"></script>

<script>
    moment.locale('es');
</script>