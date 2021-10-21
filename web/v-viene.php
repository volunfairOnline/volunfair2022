
<?php

// --- Archivo con las funciones de configuración (cabeceras, pie, ...)
include ('./scripts/config.php');

// --- Escribimos las cabeceras
escribe_cabecera();

?>

        <script>
            // --- Acciones a hacer nada más cargar la página
            $(document).ready(function() {
                $("#resultadoBusqueda").html('');   // --- Dejar vacío el cuadro con el resultado de la búsqueda
                // --- Hacer que el id galFotos sea efectivamente una galería de fotos de tipo owlCarousel
                // --- Documentación en https://owlcarousel2.github.io/OwlCarousel2/docs/api-options.html
                $('#galFotos').owlCarousel({
                    items:2,            // --- Número de fotos por línea
                    lazyLoad: true,     // --- Activar efecto de "aparición" al cargar la página
                    autoplay: true,     // --- Que se muevan solas las fotos
                    loop:true,          // --- Bucle infinito
                    margin:10
                });
            });
			
            // --- Función para activar la consulta de los premios de la rifa
			function buscar() {
                var numero = $("#numero").val();
                //var serie = $("#serie").val(); // Este año no hay serie, son todos de tipo 'un'
				var serie = 'un';
                
                // --- Llama al documento buscar-rifa.php, encargado de buscar si el número ha sido o no premiado y escribe el mensaje correspondiente
                // --- En buscar-rifa.php está definido qué sale cuando no ha tocado nada
				if (numero != "" && serie != "") {
					$.post("./mysql/buscar-rifa.php", {valorBusqueda: [numero, serie]}, function(mensaje) {
						$("#buscarRifa").html(mensaje);
					}); 
				}
            };
            
        </script>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
		
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2021/bosque2.jpg)">
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->

            <!-- BEGIN: TITULO -->
			<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">LA EDICIÓN 2021</h3>
                    <p class="c-center" >Ya está aquí la sexta edición de <b>VOLUNFAIR</b>. ¡La primera en formato digital! ¿Te la vas a perder? <br />Pásate este miércoles y jueves de <b>10:00 a 19:00</b> por el link que pondremos dentro de poco para conocer a todas las entidades sociales que nos acompañan este año.
                    <br /> Este año contamos con unos ponentes de mucho nivel, que están deseando compartir un rato con nosotros. ¡Pásate a escucharles! </p>  
					
				</div>
                
			</div>
            <!--- END: TÍTULO -->

            <!-- BEGIN: CUENTA ATRÁS -->
            <!--    <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets\base\img\volunfair\Fotos2021\bosque.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="c-content-media-1 c-center c-bordered wow animated flash">
                                    <div class="col-md-12">
                                        <div class="c-content-title-1">
                                            <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">VOLUNFAIR 2021 será realidad en ... </h3>
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

            <!-- BEGIN: RIFA -->
            <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets/base/img/volunfair/Fotos2021/bosque.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="animated c-bordered c-center c-content-media-1 flash row wow">
                                    <div class="col-md-12">
                                        <div class="c-content-title-1">
                                            <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">Resultados de la rifa</h3>
                                        </div>
                                    </div>
                                    

                                    <!-- BEGIN: RESULTADOS DE LA RIFA -->
                                    <div class="c-center col-md-12 container row" id="buscarRifa">
                                        Introduce tu número para saber si has tenido suerte:
                                        <br /><br />

                                        <div class="c-center">
                                            <form>
                                                <label>Número:<label> <input type="number" id="numero" min="0" max="599" placeholder="" required="required" />
                                                <!--<label>Serie:<label> 
                                                <select id="serie" required="required" >
                                                    <option value="am">Amarillo</option>
                                                    <option value="az">Azul</option>
                                                </select>-->
                                                <input type="button" value="Buscar" onClick="buscar();" >                                       
                                            </form>
                                        </div>
                                    </div>
                                    <!-- END: RESULTADOS DE LA RIFA -->

                                    <!-- BEGIN: AVISO PREVIO CUANDO NO HAY RIFA -->
                                    <!--
                                    El viernes publicaremos los resultados!<br />
                                    Mucha suerte y recuerda....No hay mar sin gotas

                                    <br /><br />  
                                    -->
                                    <!-- END: AVISO PREVIO CUANDO NO HAY RIFA -->                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END: RIFA -->

            <br /><br /><br /><br />

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase  c-font-bold">Miércoles 10</h2>   
                <p class="c-center" >Acto inaugural de VOLUNFAIR 2021 a las 12:30</p>                      
            </div>

            <!-- BEGIN: Toni Nadal -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-image-src="assets\base\img\volunfair\Fotos2021\bosque.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-right">
                                        <h3 class="c-right c-font-uppercase c-font-bold">Toni Nadal</h3>
                                        <h4 class="c-right c-font-uppercase c-font-bold">
                                            <a href="https://www.instagram.com/toninadal_oficial" target="_blank">@toninadal_oficial</a>
                                        </h4>
                                        <div class="c-right c-line-left "> </div>
                                    </div>
                                    <p class="c-right">
                                        Tratándose de uno de los más importantes referentes en el mundo deportivo, Toni Nadal es un entrenador de tenis
                                        y preparador físico español, ha acompañado durante toda su carrera a su sobrino y pupilo Rafa Nadal, ayudándolo
                                        a convertirse en uno de los máximos nombres del tenis profesional, convirtiéndose así en el entrenador de tenis 
                                        más laureado de la historia. <br />
                                        La filosofía que ha mantenido durante toda su carrera profesional y la que le ha acabado asegurando el éxito ha
                                        sido la de mantener la humildad y el enfoque en el trabajo y mejora de uno mismo. Según sus propias palabras, la
                                        voluntad se puede entrenar, y debe ser ésta la que actúe como motor de nuestro desarrollo. <br />
                                        Actualmente es Director Técnico Deportivo de la Academia Rafa Nadal y ejerce como formador, a fin de seguir fomentando
                                        el trabajo técnico, el desarrollo del caracter y la formación en valores.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 animated wow fadeInRight">
                                <!--<div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/participantes/adol-essence.jpeg); /*min-height: 300px;*/">
                                </div> -->
                                <img src="assets\base\img\volunfair\Fotos2021\toni2.jpg" width="130%" title="Toni Nadal" alt="Toni Nadal"/>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>
            </div>
            <!-- END: Toni Nadal -->

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Jueves 11</h2>   
                <p class="c-center" >A las 12:30, ¡Desgasta tus zapatillas!</p>                      
            </div>

            <!-- BEGIN  -->
            <div class="c-content-box c-size-md">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="-100px" data-image-src="assets\base\img\volunfair\Fotos2021\bosque.jpg">
                    <div class="container c-center">
                        <div class="row">
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <!-- BEGIN: Los Angeles de Kenia -->
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="row c-center wow animated bounceInUp">
                                        <img src="assets\base\img\volunfair\Fotos2021\angeles.jpeg" width="100%" title="losangelesdekenia" alt="losangelesdekenia" />
                                    </div>
                                    <br />
                                    <div class="row wow animated bounceInDown">
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-right">
                                                <h3 class="c-right c-font-uppercase c-font-bold">Los Ángeles de Kenia</h3>
                                                <h4 class="c-right c-font-uppercase c-font-bold">
                                                    <a href="https://www.instagram.com/losangelesdekenia" target="_blank">@losangelesdekenia</a>
                                                </h4>
                                                <div class="c-right c-line-left "> </div>
                                            </div>
                                            <p class="c-right">
                                            Patricia y María son dos jóvenes estudiantes que, con apenas cumplida su segunda década, decidieron abandonar
                                                el confort habitual y lanzarse a lo desconocido sin ninguna otra razón más que la de ayudar al que lo necesita. <br />
                                               Tras su visita decidieron fundar su propia asociación, Ángeles de Kenia, con el objetivo de realizar labores humanitarias
                                               en este país. Han realizado ya cuatro visitas al continente africano, en las que se han realizado labores que tienen como
                                               enfoque principal la ayuda a niños y familia. <br />
                                               Con "Ángeles de Kenia" Pati y María esperan poder multiplicar los efectos que producen sus esfuerzos en el país. Recalcan
                                               la importancia que tienen las ayudas económicas en las tareas de labor social, y buscan la puesta en acción con futuros 
                                               voluntariados.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: KENIA -->
                            <!-- BEGIN: ANACAR -->
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="row c-center wow animated bounceInUp">
                                        <img src="assets\base\img\volunfair\Fotos2021\ponente3.jpeg" width="100%" title="Javier Pérez-Mínguez" alt="Javier Pérez-Mínguez" />
                                    </div>
                                    <br />
                                    <div class="row wow animated bounceInDown">
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-left">
                                                <div class="c-left c-line-right "> </div>
                                                <h3 class="c-left c-font-uppercase c-font-bold">Javier Pérez-Mínguez</h3>
                                                <h4 class="c-left c-font-uppercase c-font-bold">
                                                    <a href="https://www.instagram.com/fund_anacarolinadm/?hl=es" target="_blank">@fund_anacarolinadm</a>
                                                </h4>
                                            </div>
                                            <p class="c-right">
                                                Javier Pérez-Minguez se trata del director de la Fundación Ana Carolina Díez Mahou, una entidad sin ánimo de lucro 
                                                nacida de la misión de mejorar la calidad de vida de niños y familiares con enfermedades neuromusculares genéticas, 
                                                las cuales provocan la invalidez, a causa de una pérdida de fuerza muscular, a más de 60.000 personas en España.<br />
                                                Los objetivos que persigue la fundación son los de ayudar a familiares y ámbito social de los afectados, promover la
                                                inclusión social gracias a proyectos de educación y habilitación, y contribuir a la investigación y tratamiento de estas
                                                enfermedades.<br />
                                                Hasta la fecha, la fundación ha contribuido a mejorar la calidad de vida de más de 200 niños y familias,
                                                forman parte de la Federación Española de Enfermedades Raras y son de los principales promotores del proyecto EURODIPP,
                                                que pretende ayudar en el aprendizaje de niños y jóvenes con distintos grados de discapacidad.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END:ANACAR -->
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            </div>
                    </div>
                </div>
                    
                <br /><br/>
            </div>
            <!-- END: KENIA &  ANACAROLINA -->

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Y con la colaboración de:</h2>                    
            </div>

            <br />

            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <div class="col-md-5">
            </div>

            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <!-- BEGIN: PABLO Y CLARA -->
            <div class="row">
                <div class="col-md-2">
                    <div class="col-md-12">
                        <div class="row c-center fotos wow animated fadeInLetf">
                            <img src="assets/base/img/volunfair/participantes/pablo-espana-falda.jpg" width="100%" title="Pablo España" alt="Pablo España" />
                        </div>
                        <div class="row c-content-media-1 wow animated fadeInRight">
                            <div class="c-center">
                                <h3 class="c-font-uppercase c-font-bold">Pablo España</h3>
                                <div>Speaker de VOLUNFAIR 2020</div>
                            </div>
                        </div>
                        <br />
                    </div>
                </div>
                
            </div>
            <!-- END: PABLO Y CLARA -->
            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <div class="col-md-4">
            </div>

            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->

            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <br /><br/>
<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>