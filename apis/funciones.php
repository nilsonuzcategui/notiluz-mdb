<?php

function on_bd(){
  $mysqli = new mysqli("localhost", "root", "", "notiluzinternacional");
  // $mysqli = new mysqli("159.203.124.63", "asambleas", "asambleas", "notiluzinternacional");
  $mysqli->query("SET NAMES 'utf8'");
  if (mysqli_connect_errno()) {
      die("Error al conectar: ".mysqli_connect_error());
  }
  return $mysqli;
}

function off_bd(Mysqli $mysqli){
  $mysqli->close();
}


function obtener_usuario_iduser($iduser){
    $mysqli = on_bd();
    $sql = "SELECT * FROM user_data WHERE iduser = $iduser;";
    $result = $mysqli->query($sql);
    if($mysqli->affected_rows > 0 ){
        $return = $result->fetch_array(MYSQLI_ASSOC);
    }else {
        $return = '';
    }
    off_bd($mysqli);
    return $return;
}

function obtener_etiquetas(){
  $mysqli = on_bd();
  $sql = "SELECT * FROM etiquetas WHERE status ORDER BY etiqueta ASC";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row);
    }
    $return = $array;
  }else {
    $return = [];
  }
  off_bd($mysqli);
  return $return;
}

function obtener_etiquetas_recientes(){
  $mysqli = on_bd();
  $sql = "SELECT e.idetiqueta, e.etiqueta
  FROM noticia n
  LEFT JOIN noticia_etiqueta ne ON n.idnoticia=ne.idnoticia
  LEFT JOIN etiquetas e ON ne.idetiqueta=e.idetiqueta
  WHERE e.status
  GROUP BY ne.idetiqueta
  ORDER BY n.idnoticia DESC
  LIMIT 10";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row);
    }
    $return = $array;
  }else {
    $return = [];
  }
  off_bd($mysqli);
  return $return;
}

function obtener_importantes(){
  $mysqli = on_bd();
  $sql = "SELECT n.idnoticia, n.noticia_url, n.iduser, n.fecha, n.titulo, n.subtitulo, n.baner, n.imagen, ud.nombres, ud.apellidos
  FROM noticia n
  LEFT JOIN user_data ud ON n.iduser = ud.iduser 
  WHERE importante = 1 AND n.status
  ORDER BY idnoticia DESC";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row);
    }
    $return = $array;
  }else {
    $return = [];
  }
  off_bd($mysqli);
  return $return;
}

function obtener_7_ultimas_noticias(){
  $mysqli = on_bd();
  $sql = "SELECT n.idnoticia, n.iduser, n.fecha, n.titulo, n.subtitulo, n.baner, n.imagen, n.pais, ud.nombres, ud.apellidos, n.contenido, n.noticia_url
  FROM noticia n
  LEFT JOIN user_data ud ON n.iduser = ud.iduser 
  WHERE n.status
  ORDER BY idnoticia DESC
  LIMIT 7";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row);
    }
    $return = $array;
  }else {
    $return = [];
  }
  off_bd($mysqli);
  return $return;
}

function obtener_noticia_detallada($noticia_url){
  $mysqli = on_bd();
  $sql = "SELECT *
  FROM noticia n 
  LEFT JOIN user_data ud ON n.iduser=ud.iduser
  WHERE n.noticia_url = '$noticia_url' AND status = 1";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $return = $result->fetch_array(MYSQLI_ASSOC);
  }else {
    $return = 0;
  }
  off_bd($mysqli);
  return $return;  
}

function obtener_noticia_detallada_id($idnoticia){
  $mysqli = on_bd();
  $sql = "SELECT *
  FROM noticia n 
  LEFT JOIN user_data ud ON n.iduser=ud.iduser
  WHERE n.idnoticia = $idnoticia AND status = 1";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $return = $result->fetch_array(MYSQLI_ASSOC);
  }else {
    $return = 0;
  }
  off_bd($mysqli);
  return $return;  
}

function obtener_todas_noticias(){
  $mysqli = on_bd();
  $sql = "SELECT * FROM noticia WHERE status";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row);
    }
    $return = $array;
  }else {
    $return = [];
  }
  off_bd($mysqli);
  return $return;
}

function buscar_etiqueta_noticia_admin($idnoticia){
  $mysqli = on_bd();
  $sql = "SELECT ne.idnoticia, ne.idetiqueta, e.etiqueta
  FROM noticia_etiqueta ne
  LEFT JOIN etiquetas e ON ne.idetiqueta=e.idetiqueta
  WHERE ne.idnoticia = $idnoticia";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row['idetiqueta']);
    }
    // $return = implode(",", $array);
    $return =  $array;
  }else {
    $return = [];
  }
  off_bd($mysqli);
  return $return;
}


function obtener_comentarios_noticia($idnoticia){
  $mysqli = on_bd();
  $sql = "SELECT nc.idcomentario, nc.idnoticia, nc.iduser, nc.correo, nc.comentario, nc.fecha,
  ud.nombres, ud.apellidos, ud.foto, ud.admin
  FROM noticia_comentarios nc
  LEFT JOIN user_data ud ON nc.iduser=ud.iduser
  WHERE nc.idnoticia = $idnoticia AND nc.status";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row);
    }
    $return =  $array;
  }else {
    $return = 0;
  }
  off_bd($mysqli);
  return $return;
}

function obtener_comentarios_agroecoluz(){
  $mysqli = on_bd();
  $sql = "SELECT nc.idcomentario, nc.iduser, nc.correo, nc.comentario, nc.fecha,
  ud.nombres, ud.apellidos, ud.foto, ud.admin
  FROM comentarios_agroecoluz nc
  LEFT JOIN user_data ud ON nc.iduser=ud.iduser
  WHERE nc.status";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row);
    }
    $return =  $array;
  }else {
    $return = 0;
  }
  off_bd($mysqli);
  return $return;
}

function generar_validar_url_noticia($string_url_modificado){
  $mysqli = on_bd();
  $sql = "SELECT idnoticia FROM noticia WHERE noticia_url = '$string_url_modificado'";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $return = $string_url_modificado.'-'.rand();
  }else {
    $return = $string_url_modificado;
  }
  off_bd($mysqli);
  return strtolower($return); //minusculas  
}

function obtener_paises(){
  $paises = array(
    '',
    'Venezuela',
    'Brasil',
    'Colombia',
    'Nicaragua',
    'Perú',
    'Uruguay',
    'Paraguay',
    'España',
    'Chile',
    'Argentina',
    'Mexico',
    'Curacao',
    'Bolivia',
  );
}


function obtener_imagenes_secundarias($idnoticia){
  $mysqli = on_bd();
  $sql = "SELECT * FROM noticia_imagenes WHERE idnoticia = $idnoticia ORDER BY posicion ASC";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row);
    }
    $return =  $array;
  }else {
    $return = 0;
  }
  off_bd($mysqli);
  return $return;
}

function obtener_preguntas(){
  $mysqli = on_bd();
  $sql = "SELECT * FROM preguntas WHERE estado=1 ORDER BY destacado DESC";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row);
    }
    $return =  $array;
  }else {
    $return = 0;
  }
  off_bd($mysqli);
  return $return;
}


function obtener_tratados(){
  $mysqli = on_bd();
  $sql = "SELECT * 
  FROM tratados t
  INNER JOIN tratado_imagenes ti ON t.idtratado = ti.idtratado
  WHERE t.status = 1 AND ti.posicion = 1";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $array = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
      array_push($array,$row);
    }
    $return =  $array;
  }else {
    $return = 0;
  }
  off_bd($mysqli);
  return $return;
}

function obtener_tratado($tratado_url){
  $mysqli = on_bd();
  $sql = "SELECT * FROM tratados WHERE tratado_url = '$tratado_url' LIMIT 1";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $return = $result->fetch_array(MYSQLI_ASSOC);
  }else {
    $return = 0;
  }
  off_bd($mysqli);
  return $return; 
}

function obtener_tratado_img($idtratado){
  $mysqli = on_bd();
  $sql = "SELECT * FROM tratado_imagenes WHERE idtratado = $idtratado AND posicion = 1 ORDER BY posicion ASC LIMIT 1";
  $result = $mysqli->query($sql);
  if($mysqli->affected_rows > 0 ){
    $return = $result->fetch_array(MYSQLI_ASSOC);
  }else {
    $return = 0;
  }
  off_bd($mysqli);
  return $return;
}



//---------------------------------------LIMPIAR INPUT DE INYECCIONES SQL-----------------------------------------------------------
function cleanInput($input) {

    $search = array(
      '@<script[^>]*?>.*?</script>@si',   // Elimina javascript
      '@<[\/\!]*?[^<>]*?>@si',            // Elimina las etiquetas HTML
      '@<style[^>]*?>.*?</style>@siU',    // Elimina las etiquetas de estilo
      '@<![\s\S]*?--[ \t\n\r]*>@'         // Elimina los comentarios multi-línea
    );
  
      $output = preg_replace($search, '', $input);
      return $output;
    }
  
  function limpiar($input) {
      if (is_array($input)) {
          foreach($input as $var=>$val) {
              $output[$var] = limpiar($val);
          }
      }
      else {
          if (get_magic_quotes_gpc()) {
              $input = stripslashes($input);
          }
          $input  = cleanInput($input);
          //$output = mysql_real_escape_string($input);
          $output = $input;
      }
      return $input;
  }
  function imprimir_mes_espanol($mes){
    if ($mes == 1) {
      $return = 'Enero';
    }elseif ($mes == 2) {
      $return = 'Febrero';
    }elseif ($mes == 3) {
      $return = 'Marzo';
    }elseif ($mes == 4) {
      $return = 'Abril';
    }elseif ($mes == 5) {
      $return = 'Mayo';
    }elseif ($mes == 6) {
      $return = 'Junio';
    }elseif ($mes == 7) {
      $return = 'Julio';
    }elseif ($mes == 8) {
      $return = 'Agosto';
    }elseif ($mes == 9) {
      $return = 'Septiembre';
    }elseif ($mes == 10) {
      $return = 'Octubre';
    }elseif ($mes == 11) {
      $return = 'Noviembre';
    }elseif ($mes == 12) {
      $return = 'Diciembre';
    }
    return $return;
  }

  /* Función que elimina los acantos y letras ñ*/
function quitar_acentos($cadena){
  $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ';
  $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyyby';
  $cadena = utf8_decode($cadena);
  $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
  return utf8_encode($cadena);
}

?>