<?php

// --- Archivo con las funciones de configuración (cabeceras, pie, ...)
include ('./scripts/config.php');

// --- Escribimos las cabeceras
escribe_cabecera();

?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
		
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(assets/base/img/volunfair/mares/mar_004.jpg)">
                 <!--<div class="container">
				 
                    <div class="c-page-title c-pull-left">
                    	  <p class="c-font-uppercase c-font-bold c-font-white c-font-25 c-font-slim">Quiénes Somos</p>
                        <h4 class="c-font-white c-font-thin c-opacity-07"> Conócenos mejor </h4>
                    </div>
                </div>-->
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
            <div class="c-content-box c-size-md c-bg-white">
			
                
            <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-image-src="assets/base/img/volunfair/MarProximamente.jpg">
				<div class="container">
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="c-content-title-1">
                                <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">INVITADOS</h3>
                                <div class="c-line-center c-theme-bg"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN: CUENTA ATRÁS -->
                            <div class="c-content-media-1 c-center c-bordered wow animated flash">
                                <div class="col-md-12">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">VolunFair 2020 será realidad en ... </h3>
                                    </div>
                                </div>
                                
                                <div id="deadline-message" class="deadline-message">
                                ¡Ya está aquí!
                                </div>
                                <div id="countdown" class="countdown">
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
                                <!-- 
                                    https://denis-creative.com/jstimer/
                                    https://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/
                                -->
                                
                                <br /><br />
                                <div class="col-md-12 c-center">Y antes incluso, sabremos los ponentes<br /><br /></div>

                                <!-- BEGIN: FOTOS PONENTES ANTERIORES -->
                                <div class="row">
                                    <div class="col-md-6 wow animated fadeInLeft">
                                        <img src="assets/base/img/volunfair/PacoArango2018.jpg" alt="Paco Arango en VolunFair 2018" title="Paco Arango en VolunFair 2018" width="100%" />
                                    </div>
                                    <div class="col-md-6 wow animated fadeInRight">
                                        <img src="assets/base/img/volunfair/XaviVicente2019.jpg" alt="Xavi Torres y Vicente Del Bosque en VolunFair 2019" title="Xavi Torres y Vicente Del Bosque en VolunFair 2019" width="100%" />
                                    </div>
                                </div>
                                <!--
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/base/img/volunfair/" alt="" title="" width="100%" />
                                    </div>
                                    <div class="col-md-6">
                                        <img src="assets/base/img/volunfair/" alt="" title="" width="100%" />
                                    </div>
                                </div>-->
                                <!-- END: FOTOS PONENTES ANTERIORES -->
                                    
                            </div>
                        </div>
                    </div>
						
					</div>
                    <!-- END: CUENTA ATRÁS -->
                    
                    <br /><br/>
            
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <br /><br/>
<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>