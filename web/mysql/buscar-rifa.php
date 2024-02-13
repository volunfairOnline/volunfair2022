<?php

include_once ('../scripts/datos-rifa.php');

// --- Recuperación de los datos del formulario de v-viene
$array_busqueda = $_POST['valorBusqueda'];
$numero = $array_busqueda[0];
$color = $array_busqueda[1];
$aBuscar = $color.$numero;

// --- Variable vacía para evitar los E_NOTICE
$indPremio = "";

// --- Buscamos en el array
$indPremio = array_search ($aBuscar, $numPremios, true);

// --- Mensaje cuando ha habido premio
if ($indPremio || $aBuscar==$numPremios[0]) {
    echo '¡Enhorabuena! Has obtenido un premio:<br /><b>'."\n";
    echo $listaPremios[$indPremio].'</b><br />'."\n";
    echo '<br />'."\n";
    echo 'Puedes recogerlo hasta el <b>15 de mayo</b> en la <b>Capilla</b> de la Escuela Técnica Superior de Ingenieros Industriales<br />'."\n";
    echo 'Calle José Gutiérrez Abascal nº2<br />'."\n";
    echo 'Contacta previamente por <a href="../v-colabora#rrss">redes sociales</a> o escríbenos un correo a <a href="mailto:gestion@volunfair.org">gestion@volunfair.org</a><br /><br />'."\n";
    echo '¡Y no te olvides de presumir de ello <a href="../v-colabora#rrss">mencionándonos en redes</a>!<br />'."\n";
} 
// --- Mensaje cuando no ha habido tanta suerte
else {
    echo 'Lo sentimos....no has obtenido premio, pero puedes decir todo lo que te gustó la feria <a href="../v-colabora#rrss">mencionándonos en redes</a><br />'."\n";
    echo 'Nos vemos el año que viene... ¡hasta entonces nos ponemos #ManosALaObra!<br />'."\n";
}

// --- PDF con la lista de premios
echo '<a href = "./PremiosRifaVOLUNFAIR2024.pdf" target="_blank">Listado completo de premios</a><br />'."\n";

?>