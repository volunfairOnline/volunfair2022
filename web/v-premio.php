<?php

// --- Archivo con las funciones de configuración (cabeceras, pie, ...)
include ('./scripts/config.php');

// --- Escribimos las cabeceras
escribe_cabecera();

?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
		
             <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2021/bosque2.jpg)">
                 <!--<div class="container">
				 
                    <div class="c-page-title c-pull-left">
                    	  <p class="c-font-uppercase c-font-bold c-font-white c-font-25 c-font-slim">Quiénes Somos</p>
                        <h4 class="c-font-white c-font-thin c-opacity-07"> Conócenos mejor </h4>
                    </div>
                </div>-->
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->

			<!-- BEGIN: PAGE CONTENT -->
			<div class="c-content-box c-size-md c-bg-white">
			
				<div class="container">
				
					<div class="row">
						<div class="col-md-8">
							<!-- BEGIN: EXPLICACIÓN DEL PREMIO -->
							<div class="c-content-media-1 c-bordered wow animated fadeInUp">
								<div class="col-md-12">
									<div class="c-content-title-1">
										<h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">PREMIO VOLUNFAIR AL COMPROMISO SOCIAL</h3>
										<div class="c-line-center c-theme-bg"></div>
									</div>
								</div>
								<p>
									El "Premio VOLUNFAIR al compromiso social" es un galardón
									que entregan los estudiantes a personajes públicos que
									destacan por su ayuda a las personas más necesitadas, por
									su ejemplo o por su implicación en proyectos que hagan
									más humano y solidario el mundo en el que vivimos.
									El premio nace como una consecuencia natural de la
									organización de la feria, cuyo objetivo es la
									concienciación y la expansión del voluntariado
									entre los jóvenes, un colectivo cuyo interés por las
									acciones sociales es pequeño. Cada año VOLUNFAIR acerca
									más de 50 ONGs y asociaciones a los estudiantes
									universitarios por lo que es natural reconocer aquellos
									proyectos o personas cuya acción no es portada en los
									diarios, pero que es tan importante como cualquiera de
									las noticias que las copan. 
								</p>
							
								<p>
									El premio VOLUNFAIR al compromiso social se entrega
									ininterrumpidamente el primer día de la feria como
									colofón al acto de apertura de la mayor
									feria de voluntariado que se realiza en la universidad
									pública española.
								</p>								
									
							</div>
							
						</div>
								
						<!-- Imagen -->
						<div class="col-md-4 wow animated fadeInDown">
							<img src="./assets/base/img/volunfair/premio/premioToniNadal.JPG" width="100%" alt="Toni Nadal recibe el Premio en 2021" />
							<br /><br />
							<img src="./assets/base/img/volunfair/premio/premioVicente&Xabi.jpg" width="100%" alt="Vicente del Bosque recibe el Premio en 2020" />
						</div>

						
					</div>
					<!-- END: EXPLICACIÓN DEL PREMIO -->
										
					<!-- BEGIN: PREMIADOS -->
					<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
						<div class="c-content-title-1">
							<h3 class="c-center c-font-uppercase c-font-bold">Todos los premiados</h3>
							<div class="c-line-center c-theme-bg"></div>
						</div>
					</div>
					
					<?php
						
						// --- Matriz con los premiados (no poner coma tras cada último corchete porque da error)
						// --- Guardar la foto en assets/base/img/volunfair/anteriores/
						$premiados = [
							["fecha" => "2018", 	"nombre" => "Paco Arango",				"foto" => "PacoArango.jpg",			"razon" => ""],
							["fecha" => "2019", 	"nombre" => "Xavi Torres",				"foto" => "XaviTorres.jpg",			"razon" => ""],
							["fecha" => "2019", 	"nombre" => "Vicente del Bosque",		"foto" => "VicenteDelBosque.jpg",	"razon" => ""]
					
						];
						
						// --- Función que escribe los premiados con formato
						escribe_premiados($premiados);
					
					?>
					s
					<!-- END: PREMIADOS -->
				</div>										
			
			</div>
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->

<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>