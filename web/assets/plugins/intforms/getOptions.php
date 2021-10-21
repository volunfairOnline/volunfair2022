<?php

session_start();

// --- Iniciar la clase de conexión a la base de datos
require_once('./mysql/MySQLHandler.class.php');     
require_once("./mysql/misconexiones.php");

// --- Abrir la base de datos con usuario visitante
$sql = Abrir_base();

// ---  Variable with the received data
$consultaBusqueda = $_POST['optData'];

// --- Retreiveng data from JS. If no key or val are sepcified, default values will be taken
// --- Getting the length of the array
$numParams = count($consultaBusqueda);
// --- Table wich relies keys and values
$table = $consultaBusqueda[0];
// --- Location of the images wich support the data (one per element)
if ($numParams < 4) {
	$img = '';		
} else {
	$img = $consultaBusqueda[3];
}
// --- The name of the elements
if ($numParams < 3) {
	$val = 'val';
} else {
	$val = $consultaBusqueda[2];
}
// --- The primary keys of the elements
if ($numParams < 2) {
	$key = 'id';
} else {
	$key = $consultaBusqueda[1];
}

// --- If there is images to show
if ($img) {
	$imgQuery = ', '.$table.'.'.$val.' as img';
} else {
	$imgQuery = '';
}

// --- Database query: take the name and the id of all of the options
$consulta_sel = $sql->Select('
	select
		'.$table.'.'.$key.' as id,
		'.$table.'.'.$val.' as val
		'.$imgQuery
	.'from
		'.$table.'
	;
');

// --- Copy the result in a matrix of files
$fila_sel = $sql->matrizFilas($consulta_sel);

// --- Counting the number of files and free the query result
$nfilas_sel = $sql->getNFilas($consulta_sel);
mysqli_free_result($consulta_sel);

// --- The results array is returned with duplicated data (rows 0 and 1).
// --- This statement remove them
for ($i = 0; $i<$nfilas_sel; $i++) {
	unset($fila_sel[$i][0]);
	unset($fila_sel[$i][1]);
}

// --- Returning the data in JSON format (JS readable)
echo json_encode($fila_sel);

?>
 