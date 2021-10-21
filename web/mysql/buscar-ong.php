<?php 
	session_start();
	// --- Iniciar la clase de conexión a la base de datos
	require_once('./MySQLHandler.class.php');     
	require_once("./misconexiones.php");  

	// ---  Variable con los datos recibidos
	$consultaBusqueda = $_POST['valorBusqueda'];

	//Filtro anti-XSS
	$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
	$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
	$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

	//Variable vacía (para evitar los E_NOTICE)
	$mensaje = "";

	// --- Abrir la base de datos con usuario visitante
	$sql = Abrir_base();

	// --- Comprueba si $consultaBusqueda no está vacía
	if (isset($consultaBusqueda)) {

		// --- De  la página obtenemos los datos del formulario escritos ya en formato MySQL
		$consultaBusquedaPais = $consultaBusqueda[0];
		$consultaBusquedaTipo = $consultaBusqueda[1];

		if (empty($consultaBusquedaPais) && empty($consultaBusquedaTipo)) {
			$escribe_and = '';
		} else {
			$escribe_and = 'AND';
		}

		// --- Variable con el texto de la consulta
		$consulta_ong_texto = "SELECT DISTINCT ongs.id_ong, nombre_ong, descripcion_ong, voluntariado_ong, email_ong,logo_ong, facebook_ong, twitter_ong, instagram_ong, linkedin_ong
		FROM `ongs` , `voluntariado_lugar`, `voluntariado_proyecto`
		WHERE ". $consultaBusquedaPais . "" . $consultaBusquedaTipo
		. $escribe_and." voluntariado_lugar.id_ong = ongs.id_ong AND voluntariado_proyecto.id_ong = ongs.id_ong;";

		$consulta_ong = $sql->Select($consulta_ong_texto);

		// --- Copiar la consulta en una matriz de filas
		$fila_ong = $sql->matrizFilas($consulta_ong);

		// --- Contar el numero de filas de la tabla y liberar la consulta
		$nfilas_ong = $sql->getNFilas($consulta_ong);
		mysqli_free_result($consulta_ong);

		// --- Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		if ($nfilas_ong == 0) {
			echo '<div class="row">'."\n";
			echo '	<div class="col-md-12 c-content-media-1 c-bordered wow fadeIn animated">'."\n";
			echo '		<p>No existe ninguna ONG que cumpla los criterios que has seleccionado :( <br />'."\n";
			echo '		Inténtalo de nuevo o ponte en <a href="./v-contactar">contacto</a> con nosotros</p>'."\n";
			echo '	</div>'."\n";
			echo '</div>'."\n";
			
		// --- Si existe, las mostramos todas (el siguiente código HTML muestra cómo aparece una de ellas; como es un bucle, todo se repite)
		} else {
			for ($i = 0; $i < $nfilas_ong; $i++) {
				echo '<div class="row">'."\n";
				echo '	<div class="col-md-12 c-content-media-1 c-bordered wow fadeIn animated">'."\n";
				echo '		<img src = "./assets/base/img/volunfair/ong2/logo_'.$fila_ong[$i]['logo_ong'].'.jpg"width="80" title="'.htmlspecialchars(stripslashes($fila_ong[$i]['nombre_ong'])).'" />'."\n";
				echo '		<p> <b>ONG</b>: '.$fila_ong[$i]['nombre_ong']."\n";
				echo '		<br>'."\n";
				//echo '		<b>Descripci&oacute;n</b>: '.htmlspecialchars(stripslashes($fila_ong[$i]['descripcion_ong']))."\n";
				//echo '		<br>'."\n";
				echo '		<b>Voluntariado</b>: '.$fila_ong[$i]['voluntariado_ong']."\n";
				echo '		<br>'."\n";
				echo '		<b>Puedes contactar</b> a trav&eacute;s de :'."\n";
							// --- Redes sociales
							$rsface = $fila_ong[$i]['facebook_ong'];
							$rstwit = $fila_ong[$i]['twitter_ong'];
							$rsinsta = $fila_ong[$i]['instagram_ong'];
							$rslinked = $fila_ong[$i]['linkedin_ong'];
							if($rsface!=NULL){
								echo '<a href="'.$rsface.'" target="blank">
								<i class="icon-social-facebook"></i>
								</a>'."\n";
							}
							if($rstwit!=NULL){
								echo '<a href="'.$rstwit.'" target="blank">
								<i class="icon-social-twitter"></i>
								</a>'."\n";
							}
							if($rsinsta!=NULL){
								echo '<a href="'.$rsinsta.'" target="blank">
								<i class="fab fa-instagram"></i>
								</a>'."\n";
							}
							if($rslinked!=NULL){
								echo '<a href="'.$rslinked.'" target="blank">
								<i class="fab fa-linkedin"></i>
								</a>'."\n";
							}
				echo '		</p>'."\n";
				echo '	</div>'."\n";
				echo '</div>'."\n";
				echo '<br />'."\n";
			}
		}
	}
	
 ?>