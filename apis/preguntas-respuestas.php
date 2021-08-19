<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$array = array(
    "response" => "error",
    "html" => "",
);
include_once('funciones.php');
$mysqli = on_bd();

$opt = (isset($datos['opt'])) ? limpiar($datos['opt']) : '';

$nombre = (isset($datos['nombre'])) ? limpiar($datos['nombre']) : 'Anónimo';
$correo = (isset($datos['correo'])) ? limpiar($datos['correo']) : '';
$pregunta = (isset($datos['pregunta'])) ? limpiar($datos['pregunta']) : '';


if($opt == 'obtener_preguntas'){
    $sql = "SELECT * FROM preguntas WHERE estado=1 ORDER BY destacado DESC";
    $result = $mysqli->query($sql);
    if($mysqli->affected_rows > 0 ){
        $array = array();
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            array_push($array,$row);
        }
        $array['html'] = $array;
        $array['response'] = 'exito';
    }else {
        $array['response'] = 'no_resultados';
    }
}elseif ($opt == 'agregar_pregunta') {
    $nombre = ($nombre == '') ? 'Anónimo' : $nombre ;
    $sql = "INSERT INTO `preguntas` (`nombre`, `correo`, `pregunta`, `fecha`) 
    VALUES ('$nombre', '$correo', '$pregunta', NOW());";
    $result = $mysqli->query($sql);
    if($mysqli->affected_rows > 0 ){
        $array['response'] = 'exito';
    }else {
        $array['response'] = 'no_insert';
    }
}


$mysqli->close();
echo json_encode($array); 
?>