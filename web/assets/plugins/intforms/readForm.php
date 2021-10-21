<?php

session_start();

// --- Iniciar la clase de conexión a la base de datos
require_once('./mysql/MySQLHandler.class.php');     
require_once("./mysql/misconexiones.php");

// --- Abrir la base de datos con usuario visitante
$sql = Abrir_base();

// --- Reading the POST data
$formOptions = $_POST['formOptions'];			// --- Variable with the received form options
$formData = $_POST['formData'];					// --- Variable with the received data

// --- Some variables to help
$id = $formOptions['id'];
$dbTable = $formOptions['dbTable'];
$timeField = $formOptions['timeField'];
$idField = $formOptions['idField'];
$create = (!$id || $formOptions['mode'] == 'create') ? 1 : 0;		// --- If no ID specified, form will be in create mode

// --- Inserting the date where the form is fulfilled
if ($create) {

	// --- Inserting the date
	$result = $sql->query('
		INSERT INTO '.$dbTable.' SET '.$timeField.' := now();
	') /*or die (mysqli_error($sql->CONNECTION))*/;
	
	echo $result;
	
	// --- In "create" mode, is necessary to retreive the id
	$id = mysqli_insert_id($sql->CONNECTION);
	
} else {
	
	// --- Inserting the date
	$result = $sql->query('
		UPDATE '.$dbTable.' SET '.$timeField.' := now() WHERE '.$idField.' = '.$id.';
	') or die (mysqli_error($sql->CONNECTION));	
}

// --- Sortering $formData by index 0 (table) to ensure that all the files of the same table remain together
usort($formData, function($a, $b) {
    return $a['dbTable'] <=> $b['dbTable'];
});


// --- Cutting the array into multiple ones to insert together all the fileds of the same table

// --- The first element of the array will automatically be inserted
$data2insert[0] = $formData[0];
// --- $i is used for the global counting in the array and $j, locally, to work with $formData
for ($i = 0, $j = 0; $i < count($formData); $i++) {
	
	// --- Copying elements and increasing $j
	$data2insert[$j++] = $formData[$i];
	
	// --- If the table of the next element is different or we have reached the end, it's time to insert the data in the db
	if ($i == (count($formData) - 1) || $data2insert[$j-1]['dbTable'] != $formData[$i+1]['dbTable']) {
		// --- Insert in the db		
		// --- For no select types, we edit the row in the table with the new data
		if ($formData[$i]['type'] == 'one') {
			
			// --- Creating the string to insert
			$string2insert = 'UPDATE '.$data2insert[$j-1]['dbTable'].' SET ';
			for ($k = 0; $k < $j; $k++) {
				$string2insert .= ($k ? ', ' : '').$data2insert[$k]['id'].' := "'.$data2insert[$k]['content'].'"';
			}
			$string2insert .= ' WHERE '.$idField.' = '.$id.';';
			
			// --- Editing the db
			$result = $sql->query(
				$string2insert
			) or die (mysqli_error($sql->CONNECTION));
		
		}
		// --- For checbox or radio types, we remove all of the existing data and replace it with the new ones
		else {	
			$result = $sql->query('
				DELETE FROM '.$formData[$i]['dbTable'].' WHERE '.$formData[$i]['id'].' = '.$id.'
			') or die (mysqli_error($sql->CONNECTION));
			
			// --- Creating the string to insert
			$string2insert = 'INSERT INTO '.$data2insert[$j-1]['dbTable'].' ('.$idField.', '.$data2insert[$j-1]['id'].') VALUES ';
			for ($k = 0; $k < $j; $k++) {
				$string2insert .= ($k ? ', ' : '').'('.$id.', '.$data2insert[$k]['content'].')';
			}
			$string2insert .= ';';
			
			echo $string2insert.'<br />';
			
			// --- Inserting in the db
			$result = $sql->query(
				$string2insert
			) or die (mysqli_error($sql->CONNECTION));
		}		
		
		// --- Clear $data2insert
		$j = 0;
		$data2insert = array();
	}
}
?>
 