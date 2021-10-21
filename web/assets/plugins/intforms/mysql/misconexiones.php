<?php
 $mihost ='localhost';
 
// -------------------------------------------------------
// Función para abrir la base
// -------------------------------------------------------
function Abrir_base($quien="PequeLiante") {

    if (isset($quien)){

        // --- Abrir la base de datos para preguntar nº alumno y password
        //$sql = new MySQLHandler($use_xml = false);
		$sql = new MySQLHandler($quien);
        //$sql->init($quien);
        return $sql;

    } else {
        return false;
    }
}


 /* ---------------------------------------------------------
 Conectar como usuario alumnos al mysql
 --------------------------------------------------------- */
 function conecta_alumno($nombrebase) {

   // --- Realizar la conexion
   @ $db = mysqli_pconnect($mihost,"PequeLiante","H@y59ONGs");   

   if (!$db){
      echo mensaje_error('No se ha podido abrir la base de datos. Inténtelo más tarde',1);
      exit;
   }

   // --- Abrir la base de datos
   $mibase = mysqli_select_db($nombrebase);

   if (!$mibase){
      echo mensaje_error('No existe la base de datos donde se almacena la información. Inténtelo más tarde',1);
      exit;
   }
 }

 // ---------------------------------------------------------
 // --- Conectar como usuario administrador al mysql
 // ---------------------------------------------------------
 function conecta_profesor($nombrebase) {

   // --- Realizar la conexion
   //@ $db = mysqli_pconnect($mihost,"GranLiante","S4l4d3l4M4k1nA");
	@ $db = mysqli_pconnect($mihost,"GranLiante","S4l4d3l4M4k1nA");

   if (!$db){
      echo mensaje_error('No se ha podido abrir la base de datos. Inténtelo más tarde',1);
      exit;
   }

   // --- Abrir la base de datos
   $mibase = mysqli_select_db($nombrebase);

   if (!$mibase){
      echo mensaje_error('No existe la base de datos donde se almacena la información. Inténtelo más tarde',1);
      exit;
   }
 }
?>
