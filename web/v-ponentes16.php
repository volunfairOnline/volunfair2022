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
			
			<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">VOLUNFAIR 2016</h3>
					<div class="c-line-center c-theme-bg"></div>
				</div>
            </div>
            
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-media-1 c-bordered wow bounceIn animated que-es">
                    
                        <p>
                            Jamás un sueño nacido en un viaje, en mitad de una autopista, llegó tan lejos. Siete jóvenes y una ilusión: 
                            que todos los jóvenes descubran la alegría de DAR. Así deciden montar en su uni  algo inexistente hasta entonces en Madrid: 
                            una feria de voluntariado. Porque todo el mundo quiere hacer voluntariado, pero nadie sabe 
                            dónde encontrarlo.
                        </p>
                        <p>
                            Fue una locura. No teníamos ni idea de cómo conseguir un patrocinador ni de hacer una campaña de marketing. 
                            Es más, dos semanas antes de la feria pensábamos que las ONGs deberían contentarse con mesas al no haber 
                            dinero para stands. Hubo muchos milagros: vino el dinero y hasta vino  Enhamed Enhamed (GRACIAS CRACK). 
                            Vinieron también miles de jóvenes. Así fue como nació un sueño tan grande que nunca terminará de completarse.
                        </p>
                        <p>
                            Sin experiencia, ni recursos, únicamente con una idea, VOLUNFAIR 
                            fue naciendo en reuniones después de clase, hojas de papel y demasiadas ganas de hacer que 
                            nuestros compañeros pudiesen flipar con lo guay que es hacer voluntariado. 
                        </p>

                    </div>
                </div>
            </div>
			
			<div class="c-content-title-1">
                <h2 class="c-center  c-font-bold">Miércoles 17 de febrero: La experiencia de una vida por los demás</h2>   
                <p class="c-center" >Conjunto de ponencias de diversas personas que han dedicado su vida a los demás: deportistas, estudiantes, misioneros...</p>                      
            </div>

            <!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-1-->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container" >
				
				    <div class="row c-content-media-1 c-bordered">
                        <div class="anteriores">
                            <div class="col-md-3 wow animated bounceIn">
                                <img src ="./assets/base/img/volunfair/anteriores/EnhamedEnhamed.jpg" alt="Enhamed Enhamed" title="Enhamed Enhamed" />
                                <br />
                                Enhamed Enhamed
                                </div>
                            <div class="col-md-3 wow animated bounceIn">
                                <img src ="./assets/base/img/volunfair/anteriores/PepeRuiz.jpg" alt="Pepe Ruiz" title="Pepe Ruiz" />
                                <br />
                                Pepe Ruiz
                            </div>
                            <div class="col-md-3 wow animated bounceIn">
                                <img src ="./assets/base/img/volunfair/anteriores/DanielAlfaro.jpg" alt="Daniel Alfaro" title="Daniel Alfaro" />
                                <br />
                                Daniel Alfaro
                            </div>
                            <div class="col-md-3 wow animated bounceIn">
                                <img src ="./assets/base/img/volunfair/anteriores/ElisaAlbella.jpg" alt="Elisa Albella" title="Elisa Albella" />
                                <br />
                                Elisa Albella
                            </div>
                        </div>
                    </div>
                    <br />
                </div>
            </div>
			
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="col-md-12">
                        <img src="./assets/base/img/volunfair/anteriores/equipo-2016.jpg" alt="Equipo 2016" title="Equipo 2016" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInRight" >
                            El equipo
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/base/img/volunfair/anteriores/Daniel.png" alt="Daniel Alfaro" title="Daniel Alfaro" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInLeft" >
                           Dani Alfaro
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/base/img/volunfair/anteriores/Pilar.png" alt="Pilar Aldama" title="Pilar Aldama" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInLeft" >
                            Pilar Aldama
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/base/img/volunfair/anteriores/PadreJesus.png" alt="Padre Jesús" title="Padre Jesús" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInLeft" >
                            P. Jesús Zurita
                        </div>
                    </div>
                </div>
            </div>

            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->

<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>