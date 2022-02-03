<?php
	session_start();
	// --- Iniciar la clase de conexión a la base de datos
	require_once('./mysql/MySQLHandler.class.php');     
	require_once("./mysql/misconexiones.php");  

	// --- Abrir la base de datos con usuario visitante
	$sql = Abrir_base();
?>

<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Ongs</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src = "./assets/plugins/intforms/intForms.js"></script>
	<link rel="stylesheet" href="./assets/base/css/o-registro.css">
	<link rel="shortcut icon" href="favicon.ico?v=2" />
</head>
<body>
    <div class="root">
        <form id="laliamos" name="laliamos" method="POST" class="form-register" enctype="multipart/form-data">
            <div class="form-register__header">
                <ul class="progressbar">
                    <li class="progressbar__option active"></li>
                    <li class="progressbar__option"></li>
                    <li class="progressbar__option"></li>
                    <li class="progressbar__option"></li>
                </ul>
                <h1 class="form-register__title">Inscripción para VOLUNFAIR</h1>
            </div>
            <div class="form-register__body">
                <div class="step active" id="step-1">
                    <div class="step__header">
                        <h2 class="step__title">Información general<small> (Paso 1)</small></h2>
                    </div>
                    <div class="step__body">
						<div class="row">
							<div class="col-md-6 colum">
								<h3 class="input-title">Nombre</h3>
								<div class="form-group">
									<input type="text" id="nombre_ong" name="nombre_ong" placeholder="nombre de ong" value="" class="step__input">
								</div>						
								<h3 class="input-title">Descripción</h3>
								<div class="form-group">
									<input type="textarea" id="descripcion_ong" name="descripcion_ong" placeholder="descripcion de ong" value="" class="step__input"> 
								</div>	
								<h3 class="input-title">Email</h3>
								<div class="form-group">
									<input type="email" id="email_ong" name="email_ong" placeholder="email" value="" class="step__input"> 
								</div>								
							</div>
							<div class="col-md-6 colum">
								<h3 class="input-title">Descripción detallada del proyecto</h3>
								<div class="form-group">
									<textarea id="voluntariado_ong" name="voluntariado_ong" placeholder="Escribe aquí de qué va tu voluntariado..." value="" class="step__input"></textarea> 
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 colum">							
									<h3 class="input-title">Nombre de la imagen</h3>
									<input type="text" name="nombreImagen" placeholder="nombre imagen" value="" class="step__input">								
								</div>
								<div class="col-md-6 colum">
									<h3 class="input-title">Seleccionar imagen</h3>
									<input type="file" name="imagen" id="imagen">	
								</div>									
							</div>							
						</div>										
					</div>
						<div class="step__footer">
							<button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
						</div>
					</div>                
                <div class="step" id="step-2">
                    <div class="step__header">
                        <h2 class="step__title">Información de voluntariado<small> (Paso 2)</small></h2>
                    </div>
                    <div class="step__body">
					<div class="row">
							<div class="col-md-6 colum">
								<h3 class="input-title">Tipo de voluntariado:</h3>
								<div class="form-group m-checkbox step__input">
									 <input type="checkbox" id="proyecto1" name="proyecto[]" value="1"><label for="proyecto1">&nbsp; Personas mayores</label><br>
									 <input type="checkbox" id="proyecto2" name="proyecto[]" value="2"><label for="proyecto2">&nbsp; Personas sin recursos</label><br>
									 <input type="checkbox" id="proyecto3" name="proyecto[]" value="3"><label for="proyecto3">&nbsp; Personas enfermas</label><br>
									 <input type="checkbox" id="proyecto4" name="proyecto[]" value="4"><label for="proyecto4">&nbsp; Cooperación Social</label><br>
									 <input type="checkbox" id="proyecto5" name="proyecto[]" value="5"><label for="proyecto5">&nbsp; Misión religiosa</label><br>
									 <input type="checkbox" id="proyecto6" name="proyecto[]" value="6"><label for="proyecto6">&nbsp; Con niños/as</label><br>
									 <input type="checkbox" id="proyecto7" name="proyecto[]" value="7"><label for="proyecto7">&nbsp; Personas con discapacidad</label><br>
									 <input type="checkbox" id="proyecto8" name="proyecto[]" value="8"><label for="proyecto8">&nbsp; Personas con addiciones</label><br>
									 <input type="checkbox" id="proyecto9" name="proyecto[]" value="9"><label for="proyecto9">&nbsp; Con animales</label><br>
									 <input type="checkbox" id="proyecto10" name="proyecto[]" value="10"><label for="proyecto10">&nbsp; Medioambiente</label><br>
									 <input type="checkbox" id="proyecto11" name="proyecto[]" value="11"><label for="proyecto11">&nbsp; Otros</label><br>			  				
								</div>
							</div>
							<div class="col-md-6 colum">
								<h3 class="input-title">Lugares que ofrecen:</h3>
								<div class="form-group m-checkbox step__input">
								  <input type="checkbox" id="lugar1" name="lugar[]" value="1"><label for="lugar1">&nbsp; España</label><br>
								  <input type="checkbox" id="lugar2" name="lugar[]" value="2"><label for="lugar2">&nbsp; Madrid</label><br>
								  <input type="checkbox" id="lugar3" name="lugar[]" value="3"><label for="lugar3">&nbsp; Fuera de España</label><br>						
								</div>	
								<h3 class="input-title">Perfil de voluntario:</h3>
								<div class="form-group m-checkbox step__input">
								  <input type="checkbox" id="`perfil1" name="perfil[]" value="1"><label for="perfil1">&nbsp; Voluntario para jóvenes universitarios</label><br>
								  <input type="checkbox" id="`perfil2" name="perfil[]" value="2"><label for="perfil2">&nbsp; Voluntariado para hacer en familia</label><br>
								  <input type="checkbox" id="`perfil3" name="perfil[]" value="3"><label for="perfil3">&nbsp; Sin un perfil en concreto de España</label><br>
								  <input type="checkbox" id="`perfil3" name="perfil[]" value="4"><label for="perfil3">&nbsp; Otro</label><br>						
								</div>	
								<h3 class="input-title">Es una entidad:</h3>
								<div class="form-group m-checkbox step__input">
								  <input type="checkbox" id="categoria1" name="categoria[]" value="1"><label for="categoria1">&nbsp; ONG</label><br>
								  <input type="checkbox" id="categoria2" name="categoria[]" value="2"><label for="categoria2">&nbsp; Empresa Social</label><br>
								  <input type="checkbox" id="categoria3" name="categoria[]" value="3"><label for="categoria3">&nbsp; Otro</label><br>						
								</div>	
							</div>
						</div>
					</div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-3">
                    <div class="step__header">
                        <h2 class="step__title">Redes sociales<small> (Paso 3)</small></h2>
                    </div>
                    <div class="step__body">
                        <div class="row">
							<div class="col-md-6 colum">
								<h3 class="input-title">Enlace web</h3>
								<div class="form-group">
									<input type="text" id="web_ong" name="web_ong" placeholder="enlace web" value="" class="step__input">
								</div>						
								<h3 class="input-title">Facebook</h3>
								<div class="form-group">
									<input type="text" id="facebook_ong" name="facebook_ong" placeholder="facebook" value="" class="step__input"> 
								</div>	
								<h3 class="input-title">Twitter</h3>
								<div class="form-group">
									<input type="text" id="twitter_ong" name="twitter_ong" placeholder="twitter" value="" class="step__input"> 
								</div>								
							</div>
							<div class="col-md-6 colum">
								<h3 class="input-title">Instagram</h3>
								<div class="form-group">
									<input type="text" id="instagram_ong" name="instagram_ong" placeholder="instagram" value="" class="step__input"> 
								</div>		
								<h3 class="input-title">Linkedin</h3>
								<div class="form-group">
									<input type="text" id="linkedin_ong" name="linkedin_ong" placeholder="linkedin" value="" class="step__input"> 
								</div>		
								<h3 class="input-title">Video (Enlace Youtube)</h3>
								<div class="form-group">
									<input type="text" id="video_ong" name="video_ong" placeholder="video youtube" value="" class="step__input"> 
								</div>										
							</div>						
						</div>										
					</div>
					<div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="4" data-step="3">Siguiente</button>
                    </div>
                </div>
				<div class="step" id="step-3">
                    <div class="step__header">
                        <h2 class="step__title">Información adicional<small> (Paso 4)</small></h2>
                    </div>
                    <div class="step__body">
                        <div class="row">
							<div class="col-md-6 colum">
								<h3 class="input-title">Color que identifique a la entidad</h3>
								<div class="form-group">
									<input type="color" id="color_ong" name="color_ong" placeholder="color" value="" class="step__input"> 
								</div>			
								<h3 class="input-title">¿Edad recomendada de las personas voluntarias?</h3>
								<div class="form-group">
									<input type="text" id="edad_ong" name="edad_ong" placeholder="25" value="" class="step__input"> 
								</div>							
							</div>
							<div class="col-md-6 colum">
								<h3 class="input-title">¿Lugar al que ir a conoceros?</h3>
								<div class="form-group">
									<input type="text" id="lugar_ong" name="lugar_ong_ong" placeholder="Lugar" value="" class="step__input"> 
								</div>										
							</div>						
						</div>										
					</div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="3" data-step="4">Regresar</button>
                        
						<input type="submit" class="btn step__button" name="registrarse" value="Registrate">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="./assets/base/js/o-registro-ongs.js"></script>
</body>
</html>

<?php

	if(isset($_POST['registrarse'])){
		$nombre_ong =$_POST["nombre_ong"];
		$email_ong=$_POST["email_ong"];
		$descripcion_ong=$_POST["descripcion_ong"];
		$voluntariado_ong=$_POST["voluntariado_ong"];			
		$web_ong =$_POST["web_ong"];
		$facebook_ong =$_POST["facebook_ong"];
		$twitter_ong =$_POST["twitter_ong"];
		$instagram_ong =$_POST["instagram_ong"];
		$linkedin_ong =$_POST["linkedin_ong"];
		$video_ong =$_POST["video_ong"];		
	
		$insertarongs = "INSERT INTO ongs (nombre_ong, descripcion_ong, voluntariado_ong, email_ong, web_ong, facebook_ong, twitter_ong, instagram_ong, linkedin_ong, video_ong) VALUES('$nombre_ong', '$descripcion_ong', '$voluntariado_ong', '$email_ong', '$web_ong', '$facebook_ong', '$twitter_ong', '$instagram_ong', '$linkedin_ong', '$video_ong')";
	
	$ejecutarInsertar = $sql->query($insertarongs);
	$id_insertado = mysqli_insert_id($sql->CONNECTION);

	echo $id_insertado;
	
	if(!empty($_POST['nombreImagen']))
	{
		$nombreImagen = $_POST['nombreImagen'];		
		if(!empty($_POST['id_img']))
		{			
			$id_maximo=$_POST['id_img'];
			$sql->query("UPDATE imagen SET nombre_img='$nombreImagen' WHERE id_img='$id_maximo'");
			$sql->query("UPDATE ongs SET logo_ong='$id_maximo' WHERE id_ong='$id_insertado'");
			echo '<script type="text/javascript">alert("Se ha actualizado la información con éxito")</script>';
		}else{
			$consImagen=$sql->CONNECTION->query("SELECT id_img FROM imagen WHERE nombre_img='$nombreImagen'");			
			if($row=$consImagen->fetch_array())
			{
				echo '<script type="text/javascript">alert("No se permiten datos duplicados en la base de datos")</script>';
				
			}else{
				$sql->query("INSERT INTO imagen (nombre_img, id_ong) VALUES ('$nombreImagen', '$id_insertado')");				
				$ss=$sql->CONNECTION->query("SELECT MAX(id_img) as id_maximo FROM imagen");
				if($rr=$ss->fetch_array())
				{
					$id_maximo=$rr['id_maximo'];
					$sql->query("UPDATE ongs SET logo_ong='$id_maximo' WHERE id_ong='$id_insertado'");
				}
				echo '<script type="text/javascript">alert("Se ha registrado la información con éxito")</script>';
			}
		}		
		$nameimagen=$_FILES['imagen']['name'];
		$tmpimagen=$_FILES['imagen']['tmp_name'];
		$urlnueva="./assets/base/img/volunfair/ong2/logo_".$id_maximo.".jpg";
		
		if(is_uploaded_file($tmpimagen))
		{
			copy($tmpimagen,$urlnueva);
			echo '<script type="text/javascript">alert("IMAGEN CARGADA CON EXITO")';				
		}else{
			echo '<script type="text/javascript">alert("ERROR AL CARGAR LA IMAGEN")</script>';	
		}
	}  
	$sql->query("UPDATE ongs SET direccion_ong='$location' WHERE id_ong='$id_insertado'");		
		
	
	foreach($_POST['proyecto'] as $id_proyecto)
	{
		$insertarongs2 = "INSERT INTO voluntariado_proyecto (id_ong, id_proyecto) VALUES ('$id_insertado', '$id_proyecto')";
		$sql->query($insertarongs2);
	}	
	
	foreach($_POST['lugar'] as $id_voluntariado)
	{
		$insertarongs3 = "INSERT INTO voluntariado_lugar (id_ong, id_voluntariado) VALUES ('$id_insertado', '$id_voluntariado')";
		$sql->query($insertarongs3);
	}	
	
		if($insertarongs )
			echo '<script type="text/javascript">alert("Se ha guardado correctamente")</script>';	
		else
			echo '<script type="text/javascript">alert("No se ha guardado correctamente")</script>';	
				
		if(!$ejecutarInsertar ){
			echo '<script type="text/javascript">alert("Error En la linea de sql")</script>';
		}
	}
		
?>
