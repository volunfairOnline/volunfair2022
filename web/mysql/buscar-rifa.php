<?php
include_once ('../scripts/datos-rifa.php');

$array_busqueda = $_POST['valorBusqueda'];
$numero = $array_busqueda[0];
$color = $array_busqueda[1];
$aBuscar = $color.$numero;

$indPremio = array_search ($aBuscar, $numPremios, true);

$resultado = ''; // Variable para almacenar el mensaje

// Mensaje cuando ha habido premio
if ($indPremio !== false || $aBuscar == $numPremios[0]) {
    $resultado = '¡Enhorabuena! Has obtenido un premio:<br /><b>'."\n";
    $resultado .= $listaPremios[$indPremio].'</b><br />'."\n";
    $resultado .= '<br />'."\n";
    $resultado .= 'Puedes recogerlo hasta el <b>18 de abril</b> en la <b>Capilla</b> de la Escuela Técnica Superior de Ingenieros Industriales<br />'."\n";
    $resultado .= 'Calle José Gutiérrez Abascal nº2<br />'."\n";
    $resultado .= 'Contacta previamente por <a href="../v-colabora#rrss">redes sociales</a> o escríbenos un correo a <a href="mailto:info@volunfair.org">info@volunfair.org</a><br /><br />'."\n";
    $resultado .= '¡Y no te olvides de presumir de ello <a href="../v-colabora#rrss">mencionándonos en redes</a>!<br />'."\n";
} 
// Mensaje cuando no ha habido tanta suerte
else {
    $resultado = 'Lo sentimos... no has obtenido premio, pero puedes decir todo lo que te gustó la feria <a href="../v-colabora#rrss">mencionándonos en redes</a><br />'."\n";
    $resultado .= 'Nos vemos el año que viene... ¡hasta entonces #EstasATiempo!<br />'."\n";
}

echo $resultado;
?>