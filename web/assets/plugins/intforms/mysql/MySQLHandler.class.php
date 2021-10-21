<?php
/* ******************************************************************
 * Clase para el manejo de la base de datos
****************************************************************** */
class MySQLHandler {

  // Change these variables to your own database settings
  var $DATABASE = 'LaLiamos2';
  var $USERNAME = 'PequeLiante';
  var $PASSWORD = 'H@y59ONGs';
  var $SERVER = 'localhost';

  var $DATABASEADM = 'LaLiamos2';
  var $USERNAMEADM = 'GranLiante';
  var $PASSWORDADM = 'S4l4d3l4M4k1nA';
  var $SERVERADM = 'localhost';

  //var $LOGFILE = "/home/jaime/mysql.log"; // full path to debug LOGFILE. Use only in debug mode!
  var $LOGFILE = "C:/misDatos/log/mysql.log"; // full path to debug LOGFILE. Use only in debug mode!
  var $LOGGING = true;           // debug on or off
  var $SHOW_ERRORS = true;       // output errors. true/false
  var $USE_PERMANENT_CONNECTION = false;

  // Do not change the variables below
  var $CONNECTION;
  var $FILE_HANDLER;
  var $ERROR_MSG = '';
  var $ERROR_TYPE = 1;
  var $RETURN_XML;
  var $XSLT;


  function __construct($quien) {
	$conn = $this->init($quien);
	return $conn;
  }
  
  /*function __construct($return_xml = false) {
    $this->RETURN_XML = $return_xml;
  }*/
###########################################
# Function:    init
# Parameters:  N/A
# Return Type: boolean
# Description: initiates the MySQL Handler
###########################################
  function init($quien) {
    $this->logfile_init();

    if ($this->OpenConnection($quien)) {
      return $this->CONNECTION;
    } else {
      return false;
        }
    }

###########################################
# Function:    getXMLHeader
# Parameters:  N/A
# Return Type: string
# Description: returns XML header
###########################################
  function getXMLHeader() {
    $str = '<?xml version="1.0" encoding="ISO-8859-1"?>'."\n";
    if (strlen($this->XSLT) > 0) {
      $str .= '<?xml-stylesheet type="text/xsl" href="'.$this->XSLT.'"?>'."\n";
    }
    $str .= '<MySQLHandler-results>'."\n";
    return $str;
  }

###########################################
# Function:    setXSLT
# Parameters:  filename : string
# Return Type: N/A
# Description: sets the XSLT for the XML
###########################################
  function setXSLT($filename) {
    $this->XSLT = $filename;
  }

###########################################
# Function:    getNFilas
# Parameters:  $data : Consulta SQL
# Return Type: N/A
# Description: get el n� filas de $data
###########################################
  function getNFilas($datos) {
    //return mysqli_num_rows($datos);
	if (isset($datos->num_rows)) {
		$row_cnt=$datos->num_rows;
	} else {
		$row_cnt = 0;
	}
	return $row_cnt;
  }
  
###########################################
# Function:    freeResults
# Parameters:  $data : Consulta SQL
# Return Type: N/A
# Description: libera la consulta
###########################################
  function freeResults($datos) {
    return mysqli_free_result($datos);
  }

###########################################
# Function:    getXMLFooter
# Parameters:  N/A
# Return Type: string
# Description: returns XML footer
###########################################
  function getXMLFooter() {
    $str = '</MySQLHandler-results>'."\n";
    return $str;
  }

###########################################
# Function:    OpenConnection
# Parameters:  N/A
# Return Type: boolean
# Description: connects to the database
###########################################
function OpenConnection($quien = 'PequeLiante')   {

    if ($quien == 'PequeLiante') {
        $servidor = $this->SERVER;
        $usuario = $this->USERNAME;
        $contrasena = $this->PASSWORD;

    } elseif ($quien == 'GranLiante') {

        $servidor = $this->SERVERADM;
        $usuario = $this->USERNAMEADM;
        $contrasena = $this->PASSWORDADM;
    } else {}

    if ($this->USE_PERMANENT_CONNECTION) {
        $conn = mysqli_pconnect($servidor, $usuario, $contrasena, "LaLiamos2") or die(mysqli_error($conn));
		
		$conn->query("SET NAMES 'utf8'");
        $conn->query("set character_set_client='utf8'");
        $conn->query("set character_set_results='utf8'");
        $conn->query("set collation_connection='utf8'");
		
    } else {
		$conn = mysqli_connect($servidor, $usuario, $contrasena, "LaLiamos2") or die(mysqli_error($conn));
		mysqli_set_charset($conn, 'utf8'); // --- Para que funcione con MySQLi, hay que o ponerlo como objeto o así
		
		$conn->query("SET NAMES 'utf8'");
        $conn->query("set character_set_client='utf8'");
        $conn->query("set character_set_results='utf8'");
        $conn->query("set collation_connection='utf8'");
		
	}
	
    if ((!$conn) || (!mysqli_select_db($conn, 'LaLiamos2' ))) { // --- Para que funcione con MySQLi, hay que o ponerlo como objeto o as�
        $this->ERROR_MSG = "\r\n" . "Imposible conectar a la base de datos - " . date('H:i:s');
        $this->ERROR_TYPE = 1;
        $this->debug();
        return false;
    } else {
        $this->CONNECTION = $conn;
        return true;
    }
	
}

###########################################
# Function:    CloseConnection
# Parameters:  N/A
# Return Type: boolean
# Description: closes connection to the database
###########################################
function CloseConnection() {
    if (mysqli_close($this->CONNECTION)) {
      return true;
    } else {
      $this->ERROR_MSG = "\r\n" . "Imposible cerrar la conexi�n a la base de datos - " . date('H:i:s');
      $this->ERROR_TYPE = 1;
      $this->debug();
      return false;
    }
}

###########################################
# Function:    logfile_init
# Parameters:  N/A
# Return Type: N/A
# Description: initiates the logfile
###########################################
    function logfile_init() {/*
        if ($this->LOGGING) {
            $this->FILE_HANDLER = fopen($this->LOGFILE,'a') ;
        }
        if (!$this->FILE_HANDLER) {
            $this->ERROR_MSG = "\r\n" . "Imposible abrir fichero log - " . date('H:i:s');
            $this->ERROR_TYPE = 1;
            $this->debug();
        }*/
    }

###########################################
# Function:    logfile_close
# Parameters:  N/A
# Return Type: N/A
# Description: closes the logfile
###########################################
function logfile_close() {
    if ($this->LOGGING) {
        if ($this->FILE_HANDLER) {
          fclose($this->FILE_HANDLER) ;
      }
    }
}

###########################################
# Function:    mensaje_error
# Parameters:  $mensaje : texto
#              $tipo : entero
#                    : 1 : Error
#                    : 2 : Advertencia
#                    : 3 : Informaci�n
# Return Type: N/A
# Description: Escribe un mensaje de error
###########################################
function mensaje_error($mensaje,$tipo) {

    // --- Si no se da el tipo se supone 1
    $tipo = $this->comprueba_variable($tipo,1);
    $mensaje = $this->comprueba_variable($mensaje,'Error');

    // --- Mensaje de error
    if ($tipo == 1) {
        return "<table width=\"600\" border=\"1\"><tr><td width=\"10%\"><img src=\"../imagenes/stop.gif\" width=\"62\" height=\"52\"></td><td width=\"90%\" bgcolor=\"red\" align=\"center\"><font face=\"arial\" color=\"white\"><b>$mensaje</b></font></td></tr></table>";    

    // --- Mensaje de advertencia
    } elseif($tipo == 2) {
        return "<table width=\"600\" border=\"1\"><tr><td width=\"10%\"><img src=\"../imagenes/advertencia.gif\" width=\"62\" height=\"52\"></td><td><width=\"10%\" bgcolor=\"yellow\" font color=\"black\">$mensaje</font></td></tr></table>";

    // --- Mensaje de informaci�n        
    } else {
        return "<table width=\"600\" border=\"1\" bgcolor=\"#00dd00\"><tr><td><font color=\"black\">$mensaje</font></td></tr></table>";
    }
}

###########################################
# Function:    comprueba_variable
# Parameters:  $mi_variable, variable a comprobar
#              $mi_defecto  valor por defecto
# Return Type: variable
# Description: Comprueba que existe una variable y si no devuelve el por defecto
###########################################
function comprueba_variable($mi_variable,$mi_defecto)
{
    // --- Comprobar que tiene valor y si no devolver el por defecto
    if (isset($mi_variable)) {
        return htmlspecialchars(stripslashes($mi_variable));
    } else {
        return $mi_defecto;
    }
}

###########################################
# Function:    debug
# Parameters:  N/A
# Return Type: N/A
# Description: logs and displays errors
###########################################
  function debug() {

    if ($this->LOGGING) {
        if ($this->FILE_HANDLER) {
            fwrite($this->FILE_HANDLER,$this->ERROR_MSG ." Error tipo: ". $this->ERROR_TYPE);
        } else {
            return false;
        }
    }

    if ($this->SHOW_ERRORS) {
        echo $this->mensaje_error($this->ERROR_MSG, $this->ERROR_TYPE);
    }

  }


###########################################
# Function:    Insert
# Parameters:  sql : string
# Return Type: integer
# Description: executes a INSERT statement and returns the INSERT ID
###########################################
    function Insert($sql) {
    if ((empty($sql)) || (!eregi("^insert",$sql)) || (empty($this->CONNECTION))) {
      $this->ERROR_MSG = "\r\n" . "Sentencia SQL <code>nula</code> o no es un comando INSERT v�lido - " . date('H:i:s');
      $this->debug();
      return false;
    } else {
        $conn = $this->CONNECTION;
        $results = mysqli_query($this->CONNECTION, $sql);
        if (!$results) {
            $this->ERROR_MSG = "\r\n" . mysqli_error($this->CONNECTION)." - " . date('H:i:s');
            $this->ERROR_TYPE = 1;
            $this->debug();
            return false;
        } else {
            $result = mysqli_insert_id();
            return $result;
        }
    }
    }

###########################################
# Function:    Select
# Parameters:  sql : string
# Return Type: array
# Description: executes a SELECT statement and
#              the result
###########################################
    function Select($sql)   {
	
	// Establecer la zona horaria predeterminada a usar. 
	date_default_timezone_set('UTC');
	
	if ((empty($sql)) || (empty($this->CONNECTION))) {
	//if ((empty($sql)) || (!preg_match("/^select/",$sql)) || (empty($this->CONNECTION))) {
      $this->ERROR_MSG = "\r\n" . "Sentencia SQL <code>nula</code> o no es un comando SELECT v�lido - " . date('H:i:s');
	  $this->ERROR_TYPE = 1;
      $this->debug();
      return false;
    } else {
        $conn = $this->CONNECTION;
        $results = mysqli_query($this->CONNECTION, $sql);
        if ((!$results) || (empty($results))) {
            $this->ERROR_MSG = "\r\n" . mysqli_error($this->CONNECTION)." - " . date('H:i:s');
            $this->ERROR_TYPE = 1;
            $this->debug();
            return false;
        } else {
            return $results;
        }
    }
    }

###########################################
# Function:    matrizFilas
# Parameters:  $results : consulta SQL
# Return Type: array
# Description: executes a SELECT statement and returns a
#              multidimensional array containing he results
#              array[row][fieldname/fieldindex]
###########################################
 function matrizFilas($results)   {
    if ((!$results) || (empty($results))) {
        $conn = $this->CONNECTION;
		$this->ERROR_MSG = "\r\n" . mysqli_error($this->CONNECTION)." - " . date('H:i:s'); // --- Para que funcione con MySQLi, hay que o ponerlo como objeto o as�
        $this->ERROR_TYPE = 1;
        $this->debug();
        return false;
    } else {
        $i = 0;
        $data = array();
        if ($this->RETURN_XML) {
            $data = $this->getXMLString($results);
        } else {
            while ($row = mysqli_fetch_array($results)) {
                $data[$i] = $row;
                $i++;
            }
        }
        return $data;
    }
 }


###########################################
# Function:    getXMLString
# Parameters:  results : SQL results set
# Return Type: string
# Description: Creates an XML string from the
#              SQL results set
###########################################
  function getXMLString($results) {
    $header = $this->getXMLHeader();
    $footer = $this->getXMLFooter();
    $i = 0;
    $str ='';
    while ($row = mysqli_fetch_array($results)) {
      $keys = array_keys($row);
      $str .='<row>'."\n";
      for ($j=0; $j<count($row); $j++) {
        if (!is_numeric($keys[$j])) {
          if (is_numeric($row[$keys[$j]]) || is_string($row[$keys[$j]])) {
            $datastr = $row[$keys[$j]];
          } else {
            $datastr = '<![CDATA["'.$row[$keys[$j]].'"]]>';
          }
          $str .="  <".$keys[$j].">".$datastr."</".$keys[$j].">\n";
        }
      }
      $str .="</row>\n";
        $i++;
      #exit;
    }
    return $header.$str.$footer;
  }

###########################################
# Function:    Update
# Parameters:  sql : string
# Return Type: integer
# Description: executes a UPDATE statement
#              and returns number of affected rows
###########################################
    function Update($sql)   {

    if ((empty($sql)) || (!eregi("^update",$sql)) || (empty($this->CONNECTION))) {
      $this->ERROR_MSG = "\r\n" . "Sentencia SQL <code>nula</code> o no es un comando UPDATE v�lido - " . date('H:i:s');
      $this->debug();
      return false;
    } else {
        $conn = $this->CONNECTION;
        $results = mysqli_query($this->CONNECTION, $sql);
        if (!$results) {
            $this->ERROR_MSG = "\r\n" . mysqli_error($this->CONNECTION)." - " . date('H:i:s');
            $this->ERROR_TYPE = 1;
            $this->debug();
            return false;
        } else {
            return mysqli_affected_rows();
        }
    }
    }

###########################################
# Function:    Replace
# Parameters:  sql : string
# Return Type: boolean
# Description: executes a REPLACE statement
###########################################
    function Replace($sql) {
    if ((empty($sql)) || (!eregi("^replace",$sql)) || (empty($this->CONNECTION))) {
      $this->ERROR_MSG = "\r\n" . "Sentencia SQL <code>nula</code> o no es un comando REPLACE v�lido - " . date('H:i:s');
      $this->debug();
      return false;
    } else {
        $conn = $this->CONNECTION;
        $results = mysqli_query($this->CONNECTION, $sql);
        if (!$results) {
            $this->ERROR_MSG = "\r\n" . "Error in SQL Statement : ($sql) - " . date('H:i:s');
            $this->ERROR_TYPE = 1;
            $this->debug();
            return false;
        } else {
                return true;
        }
    }
    }

###########################################
# Function:    Delete
# Parameters:  sql : string
# Return Type: boolean
# Description: executes a DELETE statement
###########################################
    function Delete($sql)   {
    if ((empty($sql)) || (!eregi("^delete",$sql)) || (empty($this->CONNECTION))) {
      $this->ERROR_MSG = "\r\n" . "Sentencia SQL <code>nula</code> o no es un comando DELETE v�lido - " . date('H:i:s');
      $this->debug();
      return false;
    } else {
        $conn = $this->CONNECTION;
        $results = mysqli_query($this->CONNECTION, $sql);
        if (!$results) {
            $this->ERROR_MSG = "\r\n" . mysqli_error($this->CONNECTION)." - " . date('H:i:s');
            $this->ERROR_TYPE = 1;
            $this->debug();
            return false;
        } else {
            return true;
        }
    }
    }

###########################################
# Function:    Query
# Parameters:  sql : string
# Return Type: boolean
# Description: executes any SQL Query statement
###########################################
    function Query($sql)    {
    if ((empty($sql)) || (empty($this->CONNECTION))) {
      $this->ERROR_MSG = "\r\n" . "Sentencia SQL <code>nula</code> - " . date('H:i:s');
      $this->debug();
      return false;
    } else {
        //$conn = $this->CONNECTION;
        $results = mysqli_query($this->CONNECTION, $sql);
        if (!$results) {
            $this->ERROR_MSG = "\r\n" . mysqli_error($this->CONNECTION)." - " . date('H:i:s');
            $this->ERROR_TYPE = 1;
            $this->debug();
            return false;
        } else {
                return true;
        }
    }
    }
}
?>
