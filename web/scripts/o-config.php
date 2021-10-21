<?php

// --- Escribe el menú principal
function escribe_menu () {
	
	// --- En la siguiente matriz ponemos el nombre del archivo y el nombre que queremos que aparezca en el menú superior.
	// --- NO PONER COMA TRAS LA ÚLTIMA FILA
	$menu = [
		["archivo" => "o-2021", 	  		"nombre" => "Inicio"],
		["archivo" => "o-entidades", 		"nombre" => "Entidades"],
		["archivo" => "o-viene", 		  	"nombre" => "Eventos"],
		["archivo" => "o-rifa",  			"nombre" => "Rifa"],
		["archivo" => "o-patrocinadores", 	"nombre" => "Patrocinadores"],
		["archivo" => "index", 	  	  		"nombre" => "Web"],
		["archivo" => "https://www.airmeet.com/e/b5f3a1b0-64d0-11eb-b018-89afae04ce4f", 	  	"nombre" => "Stands"]

	];
	
	// --- Barra del menú
	echo '<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-theme c-fonts-uppercase c-fonts-bold">'."\n";
		echo '<ul class="nav navbar-nav c-theme-nav">'."\n";
		
			// --- Escribimos cada elemento de la matriz
			foreach ($menu as $item) {
				echo '<li class="c-menu-type-classic">'."\n";
					echo '<a href="'.$item['archivo'].'" class="c-link dropdown-toggle no-blue">'.$item['nombre'].'</a>'."\n";
				echo '</li>'."\n";
			}
		
		echo '</ul>'."\n";
	echo '</nav>'."\n";
}

// --- Cabecera de las páginas
function escribe_cabecera ($es_index = 0) {
	
	echo '<!DOCTYPE html>'."\n";

	echo '<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->'."\n";
	echo '<!--[if !IE]><!-->'."\n";
	echo '<html lang="es">'."\n";
		echo '<!--<![endif]-->'."\n";
		echo '<!-- BEGIN HEAD -->'."\n";

		echo '<head>'."\n";
		
			// --- Configuración
			echo '<meta charset="utf-8" />'."\n";
			echo '<title>VOLUNFAIR | Feria del Voluntariado</title>'."\n";
			echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'."\n";
			echo '<meta content="width=device-width, initial-scale=1.0" name="viewport" />'."\n";
			echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8">'."\n";
			echo '<meta content="Feria del voluntariado organizada por estudiantes de la ETSII de Madrid" name="description" />'."\n";
			echo '<meta content="VOLUNFAIR" name="author" />'."\n";
			
			// --- Estilos obligatorios
			echo '<!-- BEGIN GLOBAL MANDATORY STYLES -->'."\n";
			echo '<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all" rel="stylesheet" type="text/css">'."\n";
			echo '<link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">'."\n";
			echo '<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />'."\n";
			//echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">'."\n";
			echo '<!-- END GLOBAL MANDATORY STYLES -->'."\n";
			
			// --- Plugins
			echo '<!-- BEGIN: BASE PLUGINS  -->'."\n";
			echo '<link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/plugins/wymeditor/skins/default/skin.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<!-- END: BASE PLUGINS -->'."\n";
			echo '<!-- BEGIN THEME STYLES -->'."\n";
			echo '<link href="assets/base/css/plugins.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />'."\n";
			echo '<link href="assets/base/css/custom.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<link href="assets/base/css/contador.css" rel="stylesheet" type="text/css" />'."\n";					// --- Para el contador
			echo '<link href="assets/base/css/timeline.css" rel="stylesheet" type="text/css" />'."\n"; 					// --- Para el timeline de "Ediciones anteriores"
			echo '<link href="assets/base/css/volunfair.css" rel="stylesheet" type="text/css" />'."\n"; 				// --- Estilos propios de VOLUNFAIR (para no destruir nada del tema)
			echo '<link href="assets/base/css/o-general.css" rel="stylesheet" type="text/css" />'."\n"; 				// --- Estilos propios de VOLUNFAIR - Online (para no destruir nada del tema)
			echo '<!-- END THEME STYLES -->'."\n";

			// --- Estilos de página
			echo '<!-- BEGIN: PAGE STYLES -->'."\n";
			echo '<link href="assets/plugins/ilightbox/css/ilightbox.css" rel="stylesheet" type="text/css" />'."\n";
			echo '<!-- END: PAGE STYLES -->'."\n";
			/*if(!$es_index) {*/
				/* Esto aparece en todas las páginas menos en el index */
				echo '<!-- BEGIN: PAGE STYLES -->'."\n";
				echo '<link href="assets/plugins/ilightbox/css/ilightbox.css" rel="stylesheet" type="text/css" />'."\n";
				echo '<!-- END: PAGE STYLES -->'."\n";
			/*}*/
			

			// --- Google Analytics
			echo '<link rel="shortcut icon" href="favicon.ico?v=2" />'."\n";
			
			echo '<!-- Global site tag (gtag.js) - Google Analytics -->'."\n";
			echo '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113152812-1"></script>'."\n";
			echo '<script>'."\n";
				echo 'window.dataLayer = window.dataLayer || [];'."\n";
				echo 'function gtag(){dataLayer.push(arguments);}'."\n";
				echo 'gtag(\'js\', new Date());'."\n";

				echo 'gtag("config", "UA-113152812-1");'."\n";
			echo '</script>'."\n";
			
			// --- JQuery	
			echo '<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>'."\n";
			echo '<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>'."\n";


		echo '</head>'."\n";

		echo '<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen c-layout-header-topbar c-layout-header-topbar-collapse">'."\n";
			echo '<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->'."\n";
			echo '<!-- BEGIN: HEADER -->'."\n";
			echo '<header class="c-layout-header c-layout-header-2 c-layout-header-dark-mobile c-header-transparent-dark" data-minimize-offset="80">'."\n";
				echo '<div class="c-topbar c-topbar-dark">'."\n";
					echo '<div class="container-fluid">'."\n";
						echo '<!-- BEGIN: INLINE NAV -->'."\n";
						echo '<nav class="c-top-menu c-pull-right">'."\n";
							
							// --- Redes Sociales
							echo '<ul class="c-icons c-theme-ul">'."\n";
								echo '<li>'."\n";
								echo '<p><span style="color: #ffffff;">Síguenos en:</span> </p>'."\n";
								echo '</li>'."\n";
								echo '<li>'."\n";
									echo '<a href="https://twitter.com/volunfair" target="blank">'."\n";
										echo '<i class="icon-social-twitter"></i>'."\n";
									echo '</a>'."\n";
								echo '</li>'."\n";
								echo '<li>'."\n";
									echo '<a href="https://www.facebook.com/volunfair" target="blank">'."\n";
										echo '<i class="icon-social-facebook"></i>'."\n";
									echo '</a>'."\n";
								echo '</li>'."\n";
								echo '<li>'."\n";
									echo '<a href="https://www.instagram.com/volunfair/" target="blank">'."\n";
										echo '<i class="fab fa-instagram"></i>'."\n";
									echo '</a>'."\n";
								echo '</li>'."\n";
								echo '<li>'."\n";
									echo '<a href="https://es.linkedin.com/company/volunfair" target="blank">'."\n";
										echo '<i class="fab fa-linkedin"></i>'."\n";
									echo '</a>'."\n";
								echo '</li>'."\n";

							echo '</ul>'."\n";
						  echo '</nav>'."\n";
						echo '<!-- END: INLINE NAV -->'."\n";
					echo '</div>'."\n";
				echo '</div>'."\n";
				echo '<div class="c-navbar">'."\n";
					echo '<div class="container-fluid">'."\n";
						echo '<!-- BEGIN: BRAND -->'."\n";
						echo '<div class="c-navbar-wrapper clearfix">'."\n";
							echo '<div class="c-brand c-pull-left">'."\n";

							/*if($es_index){
								/*solo aparece en el index*/
								/*echo '<div class="sologrande">'."\n";
							}*/
	 
							echo '<a href="index" class="c-logo">'."\n";
								echo '<img src="assets/base/img/volunfair/logocompleto_sinfondo.png" alt="Volunfair" class="c-desktop-logo">'."\n";
								echo '<img src="assets/base/img/volunfair/logocompleto_sinfondo.png" alt="Volunfair" class="c-desktop-logo-inverse">'."\n";
								echo '<img src="assets/base/img/volunfair/logocompleto_sinfondo.png" alt="Volunfair" class="c-mobile-logo"> </a>'."\n";

							if(!$es_index){
								/*solo aparece fuera del index*/
								echo '<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">'."\n";
								echo '<span class="c-line"></span>'."\n";
								echo '<span class="c-line"></span>'."\n";
								echo '<span class="c-line"></span>'."\n";
								echo '</button>'."\n";
								echo '<button class="c-topbar-toggler" type="button">'."\n";
									echo '<i class="fa fa-ellipsis-v"></i>'."\n";
								echo '</button>'."\n";
							}
		  
							echo '</div>'."\n";
							echo '<!-- END: BRAND -->'."\n";
							echo '<!-- BEGIN: QUICK SEARCH -->'."\n";
							echo '<form class="c-quick-search" action="#">'."\n";
							echo '    <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">'."\n";
							echo '    <span class="c-theme-link">&times;</span>'."\n";
							echo '</form>'."\n";
							echo '<!-- END: QUICK SEARCH -->'."\n";
							echo '<!-- BEGIN: HOR NAV -->'."\n";
							echo '<!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->'."\n";
							echo '<!-- BEGIN: MEGA MENU -->'."\n";
							echo '<!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->'."\n";
							
							// --- Menú
							if (!$es_index) {
								escribe_menu();
								echo '<!-- END: MEGA MENU -->'."\n";
								echo '<!-- END: LAYOUT/HEADERS/MEGA-MENU -->'."\n";
								echo '<!-- END: HOR NAV -->'."\n";
							}
						echo '</div>'."\n";

					echo '</div>'."\n";
				echo '</div>'."\n";
			echo '</header>'."\n";
			echo '<!-- END: HEADER -->'."\n";
			echo '<!-- END: LAYOUT/HEADERS/HEADER-1 -->'."\n";
							//}
}	

// --- Escribe, con el contenido que le digamos, las fotos de todos los miembros del equipo clasificados por departamento
/*  Parámetros
		 $equipo: matriz con claves que contiene la lista de departamentos y dentro de ella, la lista de miembros de cada departamento
		 con sus datos personales (nombre y nombre de archivo de la foto)
		 $fotosPorFila: número de fotos a poner por fila (tiene que ser múltiplo de 12, sino se redondea al múltiplo inferior)
		 $poner_nombres: indicar con 1 o true si queremos que aparezcan los nombres debajo de la foto
*/
function muestra_equipo($equipo, $fotosPorFila, $poner_nombres) {

	// --- Configuración del tamaño de columna
	// --- Se divide 12 (tamaño máximo) entre el número de fotos por fila y se redondea al múltiplo inferior
	$tam_col = min(12, round(12/$fotosPorFila, 0, PHP_ROUND_HALF_DOWN));

	// --- Cogemos los nombres de los departamentos (títulos de las filas del array grande)
	// --- Lo que hacemos es decir que la matriz $equipo es una matriz con varias submatrices llamadas $departamento
	$departamento = array_keys ($equipo);
	
	// --- Escritura de la estructura
	echo '<!-- BEGIN: CONTENT/TABS/TAB-1 -->'."\n";
	echo '<div class="c-content-box c-size-md c-no-bottom-padding c-overflow-hide">'."\n";
		echo '<div class="c-container">'."\n";
			echo '<div class="row">'."\n";
				echo '<div class="col-md-12">'."\n";
					echo '<div class="c-content-title-1">'."\n";
						echo '<h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30"> CONOCE A NUESTRO EQUIPO</h3>'."\n";
							echo '<div class="c-line-center c-theme-bg"></div>'."\n";
								echo '<p class="c-font-center c-font-bold c-font-uppercase c-margin-b-30">Pulsa en cada grupo para ver a los componentes </p>'."\n";
							echo '</div>'."\n";
					echo '</div>'."\n";
			echo '</div>'."\n";
			echo '<div class="row">'."\n";
				echo '<div class="col-md-12">'."\n";
					echo '<div class="c-content-tab-2 c-theme c-opt-1">'."\n";
						echo '<ul class="nav c-tab-icon-stack c-font-sbold c-font-uppercase">'."\n";

		// --- Botones
		// --- Recorremos todos los departamentos y ponemos el botón con su nombre
		// --- $i empieza en 0 (el array_keys le asigna 0 al departamento de Dirección), pero en los códigos CSS tiene que empezar en 1, de ahí el $i+1
		for($i = 0; $i < count($equipo); $i++) {
			echo '<!-- '.$departamento[$i].' -->'."\n";
			echo '<li>'."\n";
				echo '<a href="#c-tab2-opt1-00'.($i+1).'" data-toggle="tab">'."\n";
					echo '<img src="assets/base/img/volunfair/staff2/boton'.($i+1).'.png" alt="'.$departamento[$i].'" class="c-desktop-logo">'."\n";
				echo '<span class="c-title"> &nbsp; &nbsp; &nbsp;</span>'."\n";
				echo '</a>'."\n";
				echo '<div class="c-arrow"></div>'."\n";
			echo '</li>'."\n";
		}

		// --- Estructura intermedia
						echo '<div class="c-tab-content">'."\n";
							echo '<div class="c-bg-img-center1" style="background-image: url(assets/base/img/volunfair/fondos/fondo1.jpg)">'."\n";
								echo '<div class="container">'."\n";
									echo '<div class="tab-content">'."\n";

		// --- Fotos (y nombre si se activa) de los distintos miembros, departamento a departamento
		for($i = 0; $i < count($equipo); $i++) {

			echo '<!-- '.$departamento[$i].' -->'."\n";
			echo '<div class="tab-pane fade" id="c-tab2-opt1-00'.($i+1).'">'."\n";
				echo '<div class="c-tab-pane fotos">'."\n";
					echo '<br/>'."\n";
					echo '<h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold" style="color: #3f444a;">'.$departamento[$i].'</h4>'."\n";
					echo '<div class="row" style="margin-left: 0px; margin-right: 0px">'."\n";

						// --- Ponermos foto y nombre de cada miembro del departamento
						// --- En el foreach lo que hacemos es llamar $miembro a cada elemento del vector $equipo[$departamento[$i]]
						// --- Con un bucle for cambiaríamos $miembro por $equipo[$departamento[$i]][$j]
						$j=0;
						foreach($equipo[$departamento[$i]] as $miembro) {

							// --- Regulamos el número de fotos por columna
							if ($j % $fotosPorFila == 0) {
								if ($j != 0)
									echo '</div>'."\n";		// --- Sólo se cierra el <div class="row"> cuando ha sido abierto previamente
								echo '<div class="row" style="margin-left: 0px; margin-right: 0px">'."\n";
							}
							echo '<div class="col-md-3">'."\n";
								echo '<img src="assets/base/img/volunfair/staff2/'.$miembro['foto'].'" alt="'.$miembro['nombre'].'" width="100%" >'."\n";
								
								// --- Si hay que poner los nombres, los ponemos
								echo $poner_nombres ? $miembro['nombre'] : ''."\n";

							echo'</div>'."\n";
							$j++;
						}

						// --- Cerramos el último div row
						echo '</div>'."\n";

					echo '</div>'."\n";
				echo '<br/><br/>'."\n";
				echo '</div>'."\n";
			echo '</div>'."\n";

		}

	// --- Cierre de las etiquetas de estructura
	echo '</div>'."\n";
	echo '</div>'."\n";
	echo '</div>'."\n";
	echo '</div>'."\n";
	echo '</div>'."\n";
	echo '</div>'."\n";
	echo '</div>'."\n";
	echo '</div>'."\n";
	echo '</div>'."\n";
	echo '<!-- END: CONTENT/TABS/TAB-1 -->'."\n";
}

// --- Pasa un entero a números romanos
function a_romano($integer, $upcase = true) {
	$table = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 
				   'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9,   
				   'V'=>5, 'IV'=>4, 'I'=>1);
	$return = '';
	while($integer > 0) 
	{
		foreach($table as $rom=>$arb) 
		{
			if($integer >= $arb)
			{
				$integer -= $arb;
				$return .= $rom;
				break;
			}
		}
	}
	return $return;
}

// --- Escribe, con el contenido que le digamos, la lista de ponentes de los años anteriores
function escribe_ponentes ($ponentes) {
	
	// --- Cogemos de cada fila del array grande (ponentes) el título (que se corresponde con el año)
	$years = array_keys ($ponentes);
	
	for ($i=0; $i<count($ponentes); $i++) {
		
		echo '<div class="row c-content-media-1 c-bordered">'."\n";		
		
			// --- Edición y año
			echo '<h4 class="c-font-uppercase c-font-bold">'.a_romano($i + 1).' Edición - '.$years[$i].'</h4>'."\n";
			
			echo '<hr />'."\n";	
			
			// --- Foto y nombre de cada ponente de ese año
			echo '<div class="row anteriores">'."\n";		
				
				foreach ($ponentes[$years[$i]] as $ponente) {
					
					// --- Los posibles efectos de animaciones se encuentran en http://jackonthe.net/css3animateit/examples/
					// --- El wow es para que se anime cada elemento al llegar a él y no todos a la vez
					echo '<div class="col-md-3 wow animated bounceIn">'."\n";	
						echo '<img src ="./assets/base/img/volunfair/anteriores/'.$ponente["foto"].'" alt="'.$ponente["nombre"].'" title="'.$ponente["nombre"].'" />'."\n";
						echo '<br />'."\n";
						echo $ponente["nombre"]."\n";
					echo '</div>'."\n";	
					
				}
			
			echo '</div>'."\n";

		echo '</div>'."\n";	
		
		// --- Salto de línea entre edición y edición
		echo '<br />'."\n";
		
	}	
	
}

// --- Escribe, con el contenido que le digamos, la lista de galardonados con el Premio VOLUNFAIR
function escribe_premiados ($galardonado) {
	
	echo '<div class="row c-content-media-1 premiados">'."\n";
	
		// --- Recorre todas las filas de la matriz. En cada fila hay un premiado distinto
		for ($i=0; $i<count($galardonado); $i++) {
			echo '<div class="col-md-4 wow animated bounceIn c-font-center c-font-bold c-font-uppercase">'."\n";
				echo '<img src ="./assets/base/img/volunfair/anteriores/'.$galardonado[$i]["foto"].'" alt="'.$galardonado[$i]["nombre"].'" title="'.$galardonado[$i]["nombre"].'" />'."\n";
				echo '<br />'."\n";
				echo $galardonado[$i]["fecha"]."\n";
				echo '<br />'."\n";
				echo $galardonado[$i]["nombre"]."\n";
			echo '</div>'."\n";
		}
		
	echo '</div>'."\n";
	
}

// --- Pie de las páginas. Añade scripts adicionales en las páginas con galería
function escribe_pie($galeria = '', $es_index = false) {
	
	    echo '<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-2 -->'."\n";
        echo '<a name="footer"></a>'."\n";
        echo '<footer class="c-layout-footer c-layout-footer-1">'."\n";
            echo '<div class="c-postfooter">'."\n";
                echo '<div class="container-fluid">'."\n";
                    echo '<div class="row">'."\n";
                        echo '<div class="col-md-6 col-sm-6">'."\n";
                            echo '<p class="c-copyright c-font-oswald c-font-14"> Copyright &copy; VOLUNFAIR. Creada por: <a href="http://www.volunfair.com" target="blank" style="color: #ffffff;">gente soñadora que quiere dar la vuelta al mundo </a>'."\n";                          	
                            echo '</p>'."\n";
                        echo '</div>'."\n";
                        echo '<div class="col-md-6 col-sm-6">'."\n";
							echo '<ul class="c-socials">'."\n";
								echo '<li>'."\n";
								if($es_index){
									echo '<li>',"\n";
									echo '<p><span style="color: #ffffff;"> Síguenos en:</span> </p>'."\n";
									echo '<li>',"\n";
								}
                                    echo '<a href="https://twitter.com/volunfair" target="blank">'."\n";
                                        echo '<i class="icon-social-twitter"></i>'."\n";
                                    echo '</a>'."\n";
                                echo '</li>'."\n";
                                echo '<li>'."\n";
                                    echo '<a href="https://www.facebook.com/volunfair" target="blank">'."\n";
                                        echo '<i class="icon-social-facebook"></i>'."\n";
                                    echo '</a>'."\n";
                                echo '</li>'."\n";
                                echo '<li>'."\n";
                                    echo '<a href="https://www.instagram.com/volunfair/" target="blank">'."\n";
                                        echo '<i class="fab fa-instagram"></i>'."\n";
                                    echo '</a>'."\n";
								echo '</li>'."\n";
								echo '<li>'."\n";
									echo '<a href="https://es.linkedin.com/company/volunfair" target="blank">'."\n";
										echo '<i class="fab fa-linkedin"></i>'."\n";
									echo '</a>'."\n";
								echo '</li>'."\n";
								echo '<li>'."\n";

                            echo '</ul>'."\n";
                        echo '</div>'."\n";
                    echo '</div>'."\n";
                echo '</div>'."\n";
            echo '</div>'."\n";
        echo '</footer>'."\n";
        echo '<!-- END: LAYOUT/FOOTERS/FOOTER-2 -->'."\n";
        echo '<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->'."\n";
        echo '<div class="c-layout-go2top">'."\n";
            echo '<i class="icon-arrow-up"></i>'."\n";
        echo '</div>'."\n";
        echo '<!-- END: LAYOUT/FOOTERS/GO2TOP -->'."\n";
        echo '<!-- BEGIN: LAYOUT/BASE/BOTTOM -->'."\n";
        echo '<!-- BEGIN: CORE PLUGINS -->'."\n";
        echo '<!--[if lt IE 9]>'."\n";
		echo '<script src="../assets/global/plugins/excanvas.min.js"></script>'."\n"; 
		echo '![endif]-->'."\n";
        echo '<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/plugins/jquery.easing.min.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>'."\n";
        echo '<!-- END: CORE PLUGINS -->'."\n";
		echo '<!-- BEGIN: LAYOUT PLUGINS -->'."\n";
		if($es_index){
			echo '<script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>'."\n";
			echo '<script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>'."\n";
        	echo '<script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>'."\n";
		}
        echo '<script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>'."\n";
		echo '<script src="assets/plugins/parallax/parallax.min.js"></script>'."\n";
        echo '<!-- END: LAYOUT PLUGINS -->'."\n";
		
		// --- Si la página tiene galería de fotos, estos son los scripts/reveal-animate/reveal-animate
		
		if ($galeria == 'Y') {
			echo '<!-- BEGIN: PAGE SCRIPTS (FOR IMAGE GALLERY) -->'."\n";
			echo '<script src="assets/plugins/isotope/isotope.pkgd.min.js" type="text/javascript"></script'."\n";
			echo '<script src="assets/plugins/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>'."\n";
			echo '<script src="assets/plugins/isotope/packery-mode.pkgd.min.js" type="text/javascript"></script>'."\n";
			echo '<script src="assets/plugins/ilightbox/js/jquery.requestAnimationFrame.js" type="text/javascript"></script>'."\n";
			echo '<script src="assets/plugins/ilightbox/js/jquery.mousewheel.js" type="text/javascript"></script>'."\n";
			echo '<script src="assets/plugins/ilightbox/js/ilightbox.packed.js" type="text/javascript"></script>'."\n";
			echo '<script src="assets/base/js/scripts/pages/isotope-gallery.js" type="text/javascript"></script>'."\n";
			echo '<!-- END: PAGE SCRIPTS -->'."\n";
		}
		
        echo '<!-- BEGIN: THEME SCRIPTS -->'."\n";
        echo '<script src="assets/base/js/components.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/base/js/components-shop.js" type="text/javascript"></script>'."\n";
        echo '<script src="assets/base/js/app.js" type="text/javascript"></script>'."\n";
		echo '<!-- END: THEME SCRIPTS -->'."\n";

		// --- Plugins propios
		echo '<script src="assets/base/js/contador.js"></script>'."\n";
		//echo '<script src="assets/base/js/counterStats.js"></script>'."\n";
        
	echo '</body>'."\n";
	if($es_index){
		echo '<!-- BEGIN: PAGE SCRIPTS -->'."\n";
        echo '<script>'."\n";
		echo '$(document).ready(function()'."\n";
			echo '{'."\n";
                echo 'var api;'."\n";
                echo "var slider = $('.c-layout-revo-slider .tp-banner');"."\n";
                echo "var cont = $('.c-layout-revo-slider .tp-banner-container');"."\n";
                echo "var onepageMode = $('.c-mega-menu-onepage-dots').size() > 0 ? true : false;"."\n";
                echo 'if (onepageMode)'."\n";
                echo '{'."\n";
                    echo 'api = slider.show().revolution('."\n";
						echo '{'."\n";
							echo 'sliderType: "standard",'."\n";
							echo 'sliderLayout: "fullscreen",'."\n";
							echo 'responsiveLevels: [2048, 1024, 778, 480],'."\n";
							echo 'gridwidth: [1170, 1024, 778, 480],'."\n";
							echo 'gridheight: [868, 768, 960, 720],'."\n";
							echo 'delay: 15000,'."\n";
							echo 'startwidth: 1170,'."\n";
							echo 'startheight: 1000,'."\n";
							echo 'navigationType: "hide",'."\n";
							echo 'navigationArrows: "solo",'."\n";
							echo 'touchenabled: "on",'."\n";
							echo 'onHoverStop: "on",'."\n";
							echo 'keyboardNavigation: "off",'."\n";
							echo 'navigation:'."\n";
							echo '{'."\n";
								echo 'keyboardNavigation: "off",'."\n";
								echo 'keyboard_direction: "horizontal",'."\n";
								echo 'mouseScrollNavigation: "off",'."\n";
								echo 'onHoverStop: "off",'."\n";
								echo 'bullets:'."\n";
								echo '{'."\n";
									echo ' style: "round",'."\n";
									echo 'enable: true,'."\n";
									echo 'hide_onmobile: false,'."\n";
									echo 'hide_onleave: true,'."\n";
									echo 'hide_delay: 200,'."\n";
									echo 'hide_delay_mobile: 1200,'."\n";
									echo 'hide_under: 0,'."\n";
									echo 'hide_over: 9999,'."\n";
									echo 'direction: "horizontal",'."\n";
									echo 'h_align: "center",'."\n";
									echo 'v_align: "bottom",'."\n";
									echo 'space: 5,'."\n";
									echo 'v_offset: 60,'."\n";
									echo '},'."\n";
									echo '},'."\n";
									echo 'spinner: "spinner2",'."\n";
									echo 'shadow: 0,'."\n";
									echo 'fullWidth: "off",'."\n";
									echo 'forceFullWidth: "off",'."\n";
									echo 'hideThumbsOnMobile: "on",'."\n";
									echo 'hideNavDelayOnMobile: 1500,'."\n";
									echo 'hideBulletsOnMobile: "on",'."\n";
									echo 'hideArrowsOnMobile: "on",'."\n";
									echo 'hideThumbsUnderResolution: 0'."\n";
									echo '});'."\n";
									echo '}'."\n";
									echo 'else'."\n";
									echo '{'."\n";
										echo 'api = slider.show().revolution('."\n";
											echo '{'."\n";
												echo 'sliderType: "standard",'."\n";
												echo 'sliderLayout: "fullscreen",'."\n";
												echo 'responsiveLevels: [2048, 1024, 778, 480],'."\n";
												echo 'gridwidth: [1170, 1024, 778, 480],'."\n";
												echo 'gridheight: [868, 768, 960, 720],'."\n";
												echo 'delay: 15000,'."\n";
												echo 'startwidth: 1170,'."\n";
												echo 'startheight: App.getViewPort().height,'."\n";
												echo ' navigationType: "hide",'."\n";
												echo 'navigationArrows: "solo",'."\n";
												echo 'touchenabled: "on",'."\n";
												echo 'navigation:'."\n";
												echo '{'."\n";
													echo ' keyboardNavigation: "off",'."\n";
													echo 'keyboard_direction: "horizontal",'."\n";
													echo 'mouseScrollNavigation: "off",'."\n";
													echo 'onHoverStop: "on",'."\n";
													echo 'arrows:'."\n";
													echo '{'."\n";
														echo 'style: "circle",'."\n";
														echo 'enable: true,'."\n";
														echo 'hide_onmobile: false,'."\n";
														echo 'hide_onleave: false,'."\n";
														echo "tmp: '',"."\n";
														echo 'left:'."\n";
														echo '{'."\n";
															echo 'h_align: "left",'."\n";
															echo 'v_align: "center",'."\n";
															echo ' h_offset: 30,'."\n";
															echo 'v_offset: 0'."\n";
															echo '},'."\n";
															echo 'right:'."\n";
															echo '{'."\n";
																echo 'h_align: "right",'."\n";
																echo 'v_align: "center",'."\n";
																echo 'h_offset: 30,'."\n";
																echo 'v_offset: 0'."\n";
																echo '}'."\n";
																echo '}'."\n";
																echo '},'."\n";
																echo 'spinner: "spinner2",'."\n";
																echo 'shadow: 0,'."\n";
																echo 'fullWidth: "off",'."\n";
																echo 'forceFullWidth: "off",'."\n";
																echo 'hideThumbsOnMobile: "on",'."\n";
																echo 'hideNavDelayOnMobile: 1500,'."\n";
																echo 'hideBulletsOnMobile: "on",'."\n";
																echo 'hideArrowsOnMobile: "on",'."\n";
																echo 'hideThumbsUnderResolution: 0'."\n";
																echo '});'."\n";
																echo '}'."\n";
																echo '}); //ready'."\n";
																echo '</script>'."\n";
																echo '<!-- END: PAGE SCRIPTS -->'."\n";
																echo '<!-- END: LAYOUT/BASE/BOTTOM -->'."\n";
																echo '</body>'."\n";

																echo '</html>'."\n";
}

echo '</html>'."\n";

}	
?>