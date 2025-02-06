<?php

// --- Archivo con las funciones de configuración (cabeceras, pie, ...)
include ('./scripts/config.php');

// --- Escribimos las cabeceras, indicando en este caso que estamos en index.php
escribe_cabecera(1);

// Definimos las noticias
$newsItems = [
    ['title' => 'Noticia Padel', 'img' => $base_url_main . '/assets/base/img/volunfair/Noticias/padel2025.jpg', 'link' => $base_url_main . 'Noticias/NoticiaPadel.php'],
    ['title' => 'DonaXDana', 'img' => $base_url_main . '/assets/base/img/volunfair/Noticias/donaxdana.jpg', 'link' => $base_url_main . 'Noticias/NoticiaValencia.php'],
    //['title' => 'Recogida de alimentos', 'img' => $base_url_main . '/assets/base/img/volunfair/Noticias/recogida2024.jpg', 'link' => $base_url_main . 'Noticias/Recogida2024.php'],
    ['title' => 'Charla con Richard Vaughan', 'img' => $base_url_main . '/assets/base/img/volunfair/Noticias/vaughan.jpg', 'link' => $base_url_main . 'Noticias/NoticiaVaughan.php']
];
// No poner coma , después de la última fila, porque da error


// Seleccionamos la primera noticia
$firstNews = $newsItems[0];

?>


        <!-- BEGIN: PAGE CONTAINER -->
        

        <div class="c-layout-page">
        
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-6 -->

            <!--
<div class="sologrande">
            <section class="c-layout-revo-slider c-layout-revo-slider-6" dir="ltr">
            	
                <div class="tp-banner-container c-theme tp-fullscreen tp-fullscreen-mobile" data-bullets-pos="center">
                    <div class="tp-banner rev_slider" data-version="5.0">
                        <ul>
-->
                        

                            <!--BEGIN: SLIDE #1 -->
                            <!--<li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" src="./assets/base/img/volunfair/fondopaginaprincipal.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                -->
                                <!--BEGIN: ACTION BUTTON -->
                                
                                
                                
                                <!--END -->
                           <!-- </li> -->
                            <!--END -->
                          <!-- 
                        </ul>
                    </div>
                </div>
                
            </section>
               
    </div>           
-->

            <!--  Fondos al redimensionar la página -->
                <div class="solomediano1">
                 <img alt="" src=".\assets\base\img\volunfair\Fotos2025\cartel2025.jpg" width="100%">
                </div>
            
            
                <div class="solo_peq">
                 <img alt="" src=".\assets\base\img\volunfair\Fotos2025\cartel2025.jpg" width="100%">
                </div>
			
            <div class="">
                
          </div>

            <!-- BEGIN: CUENTA ATRÁS -->
             <!--
            <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets\base\img\volunfair\Fotos2021\bosque.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="c-content-media-1 c-center c-bordered wow animated flash">
                                    <div class="col-md-12">
                                        <div class="c-content-title-1">
                                            <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">VOLUNFAIR 2025 será realidad en ... </h3>
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
                                    
                                    <br /><br />                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- 
                    https://denis-creative.com/jstimer/
                    https://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/
                -->
            <!-- END: CUENTA ATRÁS -->


            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-title-1">
                        <h1 class="c-center c-font-uppercase c-font-bold">VOLUNFAIR </h1>
                        <h2 class="c-center  c-font-bold">Feria universitaria de voluntariado en Madrid</h2>
                        <h3 class="c-center c-font-uppercase c-font-bold">Próximos 11, 12 y 13 de febrero de 2025</h3>
                            
                    </div>

                    <div class="c-content-media-1 c-bordered wow animated que-es">
                        <!-- para que el texto rebote añadir "bounceIn"--> 
            
                        <p>
                            Nos hemos dado cuenta de que hay muchos universitarios, comprometidos con la realidad social en la que viven, que buscan hacer más por ella pero no encuentran el <b>¿Cómo?</b> O el <b>¿Dónde?</b> <br></br>
                            En <b>VOLUNFAIR</b> conseguimos dar respuesta a estas dos preguntas creando anualmente un espacio al que acuden <b>más de 75 ONG's y entidades sociales</b> permitiendo a los jóvenes ponerse en contacto con ellas. <br></br>
                    
                            Creemos que no siempre es necesario hacer grandes cosas, ni cosas súper lejos. Lo importante es hacer. Actualmente es más necesaria que nunca nuestra ayuda.
                            Por ello no nos quedamos quietos, pasivos. Nos levantamos. Actuamos. Porque no hay mejor momento que <b>AHORA</b> para empezar a caminar. <br></br>

                            <b>Vamos, ¡manos a la obra!</b><br></br>
                            
                            Entonces… <b>¿Qué es VOLUNFAIR?</b> <br></br>
                            <tab> </tab> Es una feria de <b>voluntariado universitario</b> que se celebra, durante tres jornadas completas a mediados de febrero.<br></br>
                            
                            <br></br>

                            PRÓXIMAMENTE… <br></br> 
                            <b>#PuentEnPie  #ConstruyendoJuntos <br>

                        

                        </p> 

                    </div>

                    <br/>
                     
                    <!-- 
                    <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">PONENCIAS</h3>

                    <div class="row c-center wow animated fadeInUp">
                        <iframe width="1060" height="630" src="https://www.youtube.com/embed/AzWOxlWli5g?autoplay=1" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br />
                        <iframe width="1060" height="630" src="https://www.youtube.com/embed/yRVFeqtADEs" frameborder="0" allow="accelerometer;encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>    

                    <div class="c-content-title-1 c-center">
                       <h3 class="c-font-uppercase c-font-bold">Horario</h3>
                       <div class="c-line-center c-theme-bg"></div>
                    </div>

                    <div class="row horario">
                        <div class="col-md-6">
                            <div class="c-content-media-1 c-bordered wow animated fadeInLeft" style="min-height: 520px;">
                            	 <div class="c-right">
                                <p><b>Martes</b></p>
                                <p></p>
                                <p>
                                	<u>9:15 </u> <br/>Recibimiento del primer grupo de ONGs <br/><br/>
                                	<u>10:00</u> <br/> Apertura de los stands - Actividad ininterrumpida <br/><br/>
                                	<u>12:30-14:15 </u> <br/>Charla con Joaquín Echeverría y Alvaro Trigo<br /><em>(Salón de Actos)</em><br/><br/>
                                	<u>19:00 </u> <br/>Cierre de los stands
                                	</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c-content-media-1 c-bordered wow animated fadeInRight" style="min-height: 520px;">
                                <p><b>Miércoles</b></p>
                                <p></p>
                                <p>
                                	<u>09:15 </u> <br/>Recibimiento del segundo grupo de ONGs <br/><br/>
                                	<u>10:00</u> <br/>Apertura de los stands - Actividad ininterrumpida <br/><br/>
                                	<u>12:30-14:15 </u> <br/>Charla con Sara Andrés Barrio y Guillermo Martínez<em><br/>(Salón de Actos)</em><br/><br/>
                                	<u>19:00 </u> <br/>Cierre de los stands
                                	</p>
 
                            </div>
                        </div>
                    </div>
					
					<br />
					<br />
                        -->
					<!-- PLANO STANDS 
                    
                        <p></p> 
                		<p></p>
                		 <div class="c-content-title-1">
                       <h3 class="c-font-uppercase c-center c-font-bold">Plano de la feria</h3>
                       <div class="c-line-center c-theme-bg"></div>
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="animated fadeInLeft c-center" style="min-height: 380px;">
                             <img alt="" src="assets/base/img/volunfair/inicio/Plano_2022.png" width="80%">
                            </div>
                        </div> -->
						<!--
                        <div class="col-md-4">
                            <div class="c-content-media-2-slider wow animated fadeInRight" data-slider="owl">
                            	<img alt="" src="assets/base/img/volunfair/Plano-sala-maquina.jpg" width="100%">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="animated fadeInLeft" style="min-height: 380px;">
                             <img alt="" src="assets/base/img/volunfair/lista1.png" width="100%">
                            </div>
                        </div>
                     </div>-->
				
                	<!-- FINAL PLANO STANDS -->

                   
                    <!--<div class="col-md-12 c-content-box c-size-md c-bordered wow bounceIn animated">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">
                                ACCEDE A VOLUNFAIR 2021
                            </h3>
                            <h2 class="c-center  c-font-bold">Feria universitaria de voluntariado en Madrid</h2>
                        <h3 class="c-center c-font-uppercase c-font-bold">9 y 10 de febrero de 2022</h3>
                            <h2 class="c-center  c-font-bold">Ambos días de 10:00 a 19:00 será la feria online de entidades sociales. </h2>
                        <h2 class="c-center  c-font-bold"> ¡Haz click en las imágenes para acceder a la feria y ponencias!</h2>
                        <div class="row">
                                    <a href="./v-viene">
                                        <button type="button" class="btn btn-secondary btn-lg btn-block"> INFORMACIÓN EDICIÓN 2021 ></button>
                                    </a>
                            </div>
                            <div class="c-line-center c-theme-bg"></div>
                            </div>

                      <div class="c-bg-white c-content-media-1 c-bordered">
                        <div class="item">
                        <div class="row c-center wow animated fadeInUp">
                            	<a href="https://www.volunfair.com/o-2021" target="_blank">
                                    <img src="assets\base\img\volunfair\Fotos2021\Zapas1.png" title ="Feria Online" alt="Feria Online"  width="45%" />
                                </a>

                            	<a href="http://audiovisuales.upm.es/directo/" target="_blank">
                                    <img src="assets\base\img\volunfair\Fotos2021\Zapas2.png" title ="Ponencias" alt="Ponencias"  width="45%" />
                                </a>
                            </div>
                            </div>
                            <br />
                            
                        </div>

                    </div> -->

                    
            <!-- BEGIN: CONTENT/SLIDERS/NOTICIAS -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">ÚLTIMAS NOTICIAS</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>

                        <div class="new-carousel-container">
                            <div class="carousel">
                                <?php foreach ($newsItems as $index => $news): ?>
                                    <div class="item2 <?= $index === 0 ? 'active' : '' ?>">
                                        <a href="<?= $news['link'] ?>">
                                            <img src="<?= $news['img'] ?>" alt="Imagen de <?= htmlspecialchars($news['title']) ?>" />
                                            <p class="caption"><?= htmlspecialchars($news['title']) ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <button class="btn prev">Anterior</button>
                            <button class="btn next">Siguiente</button>
                            <div class="dots"></div>
                        </div>

                        <!-- JavaScript -->
                        <!-- Aquí va el código JavaScript -->
                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                            let carousel = document.querySelector(".carousel");
                            let items = carousel.querySelectorAll(".item2");
                            let dotsContainer = document.querySelector(".dots");

                            // Insertar los puntos (dots) en el DOM
                            items.forEach((_, index) => {
                                let dot = document.createElement("span");
                                dot.classList.add("dot");
                                if (index === 0) dot.classList.add("active");
                                dot.dataset.index = index;
                                dotsContainer.appendChild(dot);
                            });

                            let dots = document.querySelectorAll(".dot");

                            // Función para mostrar un item específico
                            function showItem(index) {
                                items.forEach((item, idx) => {
                                item.classList.remove("active");
                                dots[idx].classList.remove("active");
                                if (idx === index) {
                                    item.classList.add("active");
                                    dots[idx].classList.add("active");
                                }
                                });
                            }

                            // Eventos para los botones de navegación
                            document.querySelector(".prev").addEventListener("click", () => {
                                let index = [...items].findIndex((item) =>
                                item.classList.contains("active")
                                );
                                showItem((index - 1 + items.length) % items.length);
                            });

                            document.querySelector(".next").addEventListener("click", () => {
                                let index = [...items].findIndex((item) =>
                                item.classList.contains("active")
                                );
                                showItem((index + 1) % items.length);
                            });

                            // Eventos para los puntos (dots)
                            dots.forEach((dot) => {
                                dot.addEventListener("click", () => {
                                let index = parseInt(dot.dataset.index);
                                showItem(index);
                                });
                            });

                            // Avance automático cada 5 segundos
                            let currentIndex = 0;
                            setInterval(() => {
                                currentIndex = (currentIndex + 1) % items.length;
                                showItem(currentIndex);
                            }, 5000); // 5000ms = 5 segundos
                            });
                        </script>            

            </div>
            </div>
            <!-- END: CONTENT/SLIDERS/NOTICIAS -->

            
                    <!-- Vídeos qué es volunfair ordenador-->
                    <div class="solomediano1">
                    <div class="col-md-12 c-content-box c-size-md c-bordered wow animated">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">
                                ES MÁS QUE UN VIDEO ... ES VOLUNFAIR 
                            
                            </h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>

                        <div class="c-bg-white c-content-media-1 c-bordered">
                            <!-- <div class="row c-center wow animated fadeInUp">
                                <iframe width="530" height="315" src="https://www.youtube.com/embed/_a5-YCQnTu0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<iframe width="530" height="315" src="https://www.youtube.com/embed/XCDD0jHUA-c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>-->
                            <div class="row c-center wow animated fadeInUp">
                                <iframe 
                                    class="responsive-iframe" 
                                    width="650" 
                                    height="350" 
                                    src="https://www.youtube.com/embed/fLBQWNt3CLM?si=fLBQWNt3CLM" 
                                    title="YouTube video player" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                                </iframe>                            </div>
                            <div class="row c-center wow animated fadeInUp">
                          
                                <iframe 
                                    class="responsive-iframe" 
                                    width="650" 
                                    height="350" 
                                    src="https://www.youtube.com/embed/bXle2TWJOTI?si=GD8ObyQW6GjK6KaP" 
                                    title="YouTube video player" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen>
                                </iframe>                                 </div>
                          
                            <br />
                            
                        </div>

                    </div> 
                    </div> 

                    <!-- Vídeos qué es volunfair movil-->
                    <div class="solo_peq">
                    <div class="col-md-12 c-content-box c-size-md c-bordered wow animated">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">
                                ES MÁS QUE UN VIDEO ... ES VOLUNFAIR 
                            </h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>

                        <div class="c-bg-white c-content-media-1 c-bordered">
                            <div class="row c-center wow animated fadeInUp">
                                <iframe width="100%" height="350" src="https://www.youtube.com/embed/fLBQWNt3CLM?si=7uDG1eS9KkWL5HFt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="row c-center wow animated fadeInUp">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/bXle2TWJOTI?si=GD8ObyQW6GjK6KaP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <br />                  
                        </div>

                    </div> 
                    </div> 
                    <!-- Fin Vídeos Año anterior -->

                    <!-- Premios y Reconocimientos -->
                    <div class="col-md-12 c-content-box c-size-md c-bordered wow  animated">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">
                                Premios y Reconocimientos
                            </h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>

                        <!--Fundación Telefónica -->
                        <div class="c-bg-white c-content-media-1 c-bordered">
                            <div class="row">
                                <div class="col-md-12 c-size-md c-bg-white wow animated">
                                    <a href="https://www.fundaciontelefonica.com/noticias/2a-edicion-de-los-premiosvoluntariado/" target="blank">
                                    <h4 class="c-center c-font-bold">
                                        Premios Fundación Telefónica al Voluntariado 2019
                                        <i class="fas fa-external-link-square-alt"></i>
                                    </h4>
                                    <div class="c-center">Año 2019 - Categoría Comunicación</div>
                                    </a>
                                    <br />
                                </div>
                            </div>
                            <div class="row">
                                <a href="https://www.fundaciontelefonica.com/noticias/2a-edicion-de-los-premiosvoluntariado/" target="blank">
                                    <div class="col-md-6 wow animated fadeInBottom">
                                        <img src="./assets/base/img/volunfair/inicio/premio-telefonica.jpg" width=100%" class="img-centrada" alt="Premios Fundación Telefónica al Voluntariado 2019" title="Premios Fundación Telefónica al Voluntariado 2019" />
                                    </div>
                                </a>
                                <a href="https://www.fundaciontelefonica.com/noticias/2a-edicion-de-los-premiosvoluntariado/" target="blank">
                                    <div class="col-md-6 wow animated fadeInBottom">
                                        <img src="./assets/base/img/volunfair/inicio/premio-telefonica1.jpg" width=100%" class="img-centrada" alt="Premios Fundación Telefónica al Voluntariado 2019" title="Premios Fundación Telefónica al Voluntariado 2019" style="padding-top: 1.75em;" />
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                        <!--Fin Fundación Telefónica -->

                    </div> 
                    <!-- Fin Premios y Reconocimientos -->

                    
                    <br />
                    <br />
 

                    <p></p>
                		<p></p>
                        <!--
                	  <div class="row">
                        <div class="col-md-6">
                            <div class="c-content-media-1 c-bordered wow animated fadeInLeft" style="min-height: 380px;">
                                
                                
                                <div class="c-content-title-1">
                                   <h3 class="c-font-uppercase c-font-bold">Dónde estamos</h3>
                                   <div class="c-line-left c-theme-bg"></div>
                                 </div>
                                <p><b>Escuela Técnica Superior de Ingenieros Industriales  <br/>de la Universidad Politécnica de Madrid</b></p>
                                <p></p>
                                <p>
                                	<u>Dirección:</u> <br/>
                                	C/ José Gutiérrez Abascal, 2 28006 Madrid <br/><br/>
                                  <u>Metro:</u> <br/>
                                  Gregorio Marañón (L7, L10) Nuevos Ministerios (L8, L10, L6) República Argentina (L6)<br/><br/>
                                  <u>Autobús:</u> <br/>	Líneas 7, 12, 14, 27, 40, 45, 147, 150, 250 y Circular 

                                	
                                	
                                	
                                	
                                	</p>
 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c-content-media-2-slider wow animated fadeInRight" data-slider="owl">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.570610728257!2d-3.6920308846974783!3d40.44050597936237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228ee58976437%3A0xe0887483b829f649!2sEscuela+T%C3%A9cnica+Superior+de+Ingenieros+Industriales+UPM!5e0!3m2!1ses!2ses!4v1482254700732" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                	

                </div>
            </div>



            <!-- BEGIN: CONTENT/SLIDERS/CLIENT-LOGOS-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-client-logos-slider-1" data-slider="owl">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Colaboran</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                       
                        <!-- End-->
                        <!-- Begin: Owlcarousel -->
                       
                        <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="5" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="1" data-auto-play="false" data-rtl="false" data-slide-speed="5000"
                        data-auto-play-hover-pause="false">
                            <div class="item">
                                   <a href="https://www.ferrovial.com/es-es/" target="_blank">
                                       <img src="assets/base/img/volunfair/patrocinadores/FerrovialLogo.jpg" title ="Ferrovial" alt="Ferrovial"  width="100%" />
                                   </a>
                            </div>
                            <div class="item">
                                   <a href="https://portal.coiim.es/" target="_blank">
                                       <img src="assets/base/img/volunfair/patrocinadores/Ingenieros_IndustrialesLogo1" title ="COIIM" alt="COIIM"  width="100%" />
                                   </a>
                            </div>
                            <div class="item">
                                   <a href="https://www.aguilera-ingenieros.com/" target="_blank">
                                       <img src="assets/base/img/volunfair/patrocinadores/aguilera_ingenieros_logo.jpg" title ="AguileraIngenieros" alt="AguileraIngenieros"  width="100%" />
                                   </a>
                            </div>
                            <div class="item">
                                   <a href="https://www.lexmark.com/es_es.html" target="_blank">
                                       <img src="assets/base/img/volunfair/patrocinadores/LexmarkLogo" title ="Lexmark" alt="Lexmark"  width="100%" />
                                   </a>
                            </div>
                            <div class="item">
                                <a href="https://www.upm.es/" target="_blank">
                                    <img src="assets/base/img/volunfair/patrocinadores/UPMLogo.jpg" title ="UPM" alt="UPM"  width="100%" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://www.etsii.upm.es/" target="_blank">
                                    <img src="assets/base/img/volunfair/patrocinadores/logoE.jpg" title ="ETSII Madrid" alt="ETSII Madrid"  width="100%" />
                                </a>
                            </div>
                            <div class="item">
                            	<a href="http://www.caritasmadrid.org/categorias/caritas-universitaria" target="_blank">
                                    <img src="assets/base/img/volunfair/patrocinadores/logoA.jpg" title ="Cáritas Madrid Universitaria" alt="Cáritas Madrid Universitaria"  style="padding-top: 10%; width="100%" />
                                </a>
                            </div>
                            <div class="item">
                            	  <a href="https://www.aseguradossolidarios.com/" target="_blank">
                                    <img src="assets/base/img/volunfair/patrocinadores/logo-asegurados-solidarios-nuevo.png" title ="Asegurados Solidarios" alt="Asegurados Soldiarios" width="100%" />
                                </a>
                            </div>
                            <div class="item">
                            	  <a href="https://www.weareseekers.com/" target="_blank">
                                    <img src="assets/base/img/volunfair/patrocinadores/logo-tribu.png"title ="Tribu Seekers" alt="Tribu Seekers" style="padding-top: 20%; padding-left: 10%;"  width="140%" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://www.dominospizza.es/" target="_blank">
                                    <img src="assets/base/img/volunfair/patrocinadores/Dominos_Logo.png" title ="Dominos" alt="Dominos"  width="100%" />
                                </a>
                            </div>
                            			
                        </div>
                        
                        <!-- End-->
                    </div>
                    <!-- End-->
                </div>
            </div>
            <!-- END: CONTENT/SLIDERS/CLIENT-LOGOS-1 -->
            </div>
            </div>
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie(1);

?>
