<?php
	// --- Archivo con las funciones de configuración (º, pie, ...)
	include ('./scripts/o-config.php');
	// --- Escribimos las cabeceras
	escribe_cabecera(1);
?>

<link href="assets/base/css/o-main.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./assets/base/css/o-2021.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="overlay"></div>
		<video id="videoBG" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="videoprinc">
			<source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
		</video>
<div class="c-layout-page">
	
<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
	<!--<div class="container">	
	<div class="c-page-title c-pull-left">
			<p class="c-font-uppercase c-font-bold c-font-white c-font-25 c-font-slim">Quiénes Somos</p>
		<h4 class="c-font-white c-font-thin c-opacity-07"> Conócenos mejor </h4>
	</div>
</div>-->
</div>
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
<!-- BEGIN: PAGE CONTENT -->
<br /><br /><br />
<div class="c-content-box c-size-md c-bg-white princ" style="opacity:0.9">
	<div class="container">
		<div class="text-white">
			<div class="opciones-header row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-items-center justify-content-center">
					<h1 class="c-content-title-1 c-center">VOLUNFAIR 2022<br/><p class="text-o">Esperamos que hayáis podido disfrutar de la feria. <strong>¡Os esperamos el año que viene!</strong></p></h1>				
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 align-items-center justify-content-center">				                          
				<!-- <div id="countdown" class="countdown">
					<div class="countdown-number">
						<span class="days countdown-time"></span>
						<span class="countdown-text">Días</span>
					</div>
					<div class="countdown-number">
						<span class="hours countdown-time"></span>
						<span class="countdown-text">Horas</span>
					</div>
					<div class="countdown-number">
						<span class="minutes countdown-time"></span>
						<span class="countdown-text">Minutos</span>
					</div>
					<div class="countdown-number">
						<span class="seconds countdown-time"></span>
						<span class="countdown-text">Segundos</span>
					</div>
				</div>			                                   
				<br /><br />
			</div>
		</div>	
		<div class="opciones-header row">
		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">			
		</div>
		<div class="-xs-12 col-sm-12 col-md-7 col-lg-7 align-items-center justify-content-center">		
			<p class="color-text2">quedan para que se acabe esta gran aventura, <strong>¡súmate!</strong></p>		
		</div>
		</div>-->	
		
		<div class="c-line-center c-theme-bg"></div>
	</div>
	<div class="w-100 page-content align-items-center justify-content-center contenidos">
		<div id="flip-container">
			<div id="card1" class="card">
				<div class="front row">
					<img class="card-img-top w-50" src="./assets/base/img/volunfair/online-logos/entidades.svg" alt="Entidades">
					<div class="card-body-vf col-12">
						<h3 class="color-text">Entidades</h3>
					</div>
				</div>
				<div class="back row"><p class="textStart">Conoce a las ONGs <br/> presentes en la feria. ¡Inscríbete online a ellas! </p><button onclick="location.href='./v-voluntario'" class="button-start col-10"> Quiero ir </button></div>
			</div>
		</div>
		<div id="flip-container">
			<div id="card1" class="card">
				<div class="front row">
					<img class="card-img-top w-50" src="./assets/base/img/volunfair/online-logos/eventos.svg" alt="Eventos">
					<div class="card-body-vf col-12">
						<h3 class="color-text">Eventos</h3>
					</div>
				</div>
				<div class="back row"><p class="textStart">Únete a las charlas con Toni Nadal, Los Ángeles de Kenia y Javier Pérez-Minguez </p><button onclick="location.href='./o-viene'" class="button-start col-10"> Quiero ir </button></div>
			</div>
		</div>
		<div id="flip-container" class="visibility1">
			<div id="card1" class="card">
				<div class="front row">
					<img class="card-img-top w-50" src="./assets/base/img/volunfair/online-logos/stands.svg" alt="Acceso Stands">
					<div class="card-body-vf col-12">
						<h3 class="color-text">Acceso Stands</h3>
					</div>
				</div>
			<div class="back row"><p class="textStart">Contacta en vivo con las ONGs y pregúntales por aquellas inquietudes que tengas</p><button onclick="location.href='https://www.airmeet.com/e/b5f3a1b0-64d0-11eb-b018-89afae04ce4f'" class="button-start col-10"> Quiero ir </button></div>
		</div>
	</div>
</div>
<div class="w-100 page-content align-items-center justify-content-center m-auto visibility2">
	<div id="flip-container">
		<div id="card1" class="card">
		<div class="front row">
					<img class="card-img-top w-50" src="./assets/base/img/volunfair/online-logos/round-table.svg" alt="Acceso Stands">
					<div class="card-body-vf col-12">
						<h3 class="color-text">Acceso Stands</h3>
					</div>
				</div>
			<div class="back row"><p class="textStart">Contacta en vivo con las ONGs y pregúntales por aquellas inquietudes que tengas</p><button onclick="location.href='https://www.airmeet.com/e/b5f3a1b0-64d0-11eb-b018-89afae04ce4f'" class="button-start col-10"> Quiero ir </button></div>
		</div>
	</div>
	<div id="flip-container">
		<div id="card1" class="card">
		<div class="front row">
				<img class="card-img-top w-50" src="./assets/base/img/volunfair/online-logos/world-wide-web.svg" alt="Web Volunfair">
				<div class="card-body-vf col-12">
					<h3 class="color-text">Web VOLUNFAIR</h3>
				</div>
			</div>
			<div class="back row"><p class="textStart">Visita nuestra web para encontrar toda la información y preguntarnos cualquier duda</p><button onclick="location.href='https://volunfair.com/'" class="button-start col-10"> Quiero ir </button></div>
		</div>
	</div>
</div>
<div class="w-100 page-content align-items-center justify-content-center m-auto">
	<div id="flip-container">
		<div id="card1" class="card">
			<div class="front row">
				<img class="card-img-top w-50" src="./assets/base/img/volunfair/online-logos/ticket.svg" alt="Rifa">
				<div class="card-body-vf col-12">
					<h3 class="color-text">Rifa</h3>
				</div>
			</div>
			<div class="back row"><p class="textStart">Disfruta de alguno de nuestros premios</p><button onclick="location.href='./o-rifa'" class="button-start col-10"> Quiero ir </button></div>
		</div>
	</div>
	<div id="flip-container">
		<div id="card1" class="card">
			<div class="front row">
				<img class="card-img-top w-50" src="./assets/base/img/volunfair/online-logos/patrocinadores.svg" alt="Patrocinadores">
				<div class="card-body-vf col-12">
					<h3 class="color-text">Patrocinadores</h3>
				</div>
			</div>
			<div class="back row"><p class="textStart">Conoce a las empresas que han ayudado a hacer realidad este sueño</p><button onclick="location.href='./o-patrocinadores'" class="button-start col-10"> Quiero ir </button></div>
		</div>
	</div>
	<div id="flip-container" class="visibility1">
		<div id="card1" class="card">
			<div class="front row">
				<img class="card-img-top w-50" src="./assets/base/img/volunfair/online-logos/world-wide-web.svg" alt="Web Volunfair">
				<div class="card-body-vf col-12">
					<h3 class="color-text">Web VOLUNFAIR</h3>
				</div>
			</div>
			<div class="back row"><p class="textStart">Visita nuestra web para encontrar toda la información y preguntarnos cualquier duda</p><button onclick="location.href='https://volunfair.com/'" class="button-start col-10"> Quiero ir </button></div>
		</div>
	</div>	  
</div>
</div>
</div>
<?php
	// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
	escribe_pie();
?>