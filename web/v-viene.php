
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
                //var serie = $("#serie").val();
                serie = 'un';
                
                // --- Llama al documento buscar-rifa.php, encargado de buscar si el número ha sido o no premiado y escribe el mensaje correspondiente
                // --- En buscar-rifa.php está definido qué sale cuando no ha tocado nada
				if (numero != "" /*&& serie != ""*/) {
					$.post("./mysql/buscar-rifa.php", {valorBusqueda: [numero, serie]}, function(mensaje) {
						$("#buscarRifa").html(mensaje);
					}); 
				}
            };
            
        </script>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
		
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2022/encabezado_4.png)">
>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->

            <!-- BEGIN: TITULO -->
			<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">LA EDICIÓN 2023</h3>
                    <div class="c-line-center c-theme-bg"></div>
                    <p class="c-center" >Ya está aquí la octava edición de <b>VOLUNFAIR</b>. ¿Te la vas a perder? <br />El el miércoles 15 y jueves 16 de Febrero de <b>10:00 a 19:00</b> podrás conocer a todas las entidades sociales que nos acompañan este año.
                    <br /> Además, con unos ponentes de mucho nivel, que están deseando compartir un rato con nosotros. ¡Pásate a escucharles! </p>  
					
				</div>
                
			</div>
            <!--- END: TÍTULO -->

            <!-- BEGIN: CUENTA ATRÁS -->
            
            <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets/base/img/volunfair/Fotos2022/Fondos/ninos.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="c-content-media-1 c-center c-bordered wow animated flash">
                                    <div class="col-md-12">
                                        <div class="c-content-title-1">
                                            <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">VOLUNFAIR 2023 será realidad en ... </h3>
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
                </div>
                
                <!-- 
                    https://denis-creative.com/jstimer/
                    https://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/
                -->
            <!-- END: CUENTA ATRÁS -->

            <!-- BEGIN: RIFA -->
            <br /><br /><br />
            <!--
            <div class="row c-content-box c-size" style="margin-top: 0px;">
                <div class="col-md-3 ">
                </div>
                <div class="col-md-3">
                    <div id="flip-container" style="width: 250px;">
                        <div id="card1" class="card">
                            <div class="front row">
                                <img class="card-img-top" src="./assets/base/img/volunfair/online-logos/ticket.svg" alt="Rifa">
                            </div>
                            <div class="back row"><p class="textStart">Disfruta de alguno de nuestros premios</p><button onclick="location.href='./v-rifa'" class="button-start col-10"> ¡Quiero! </button></div>
                        </div>
                    </div>		  
                </div>
                <div class="col-md-3">
                    <div id="flip-container" style="width: 250px;">
                        <div id="card1" class="card">
                            <div class="front row">
                                <img class="card-img-top" src="./assets/base/img/volunfair/online-logos/world-wide-web.svg" alt="Ponencias">
                            </div>
                            <div class="back row"><p class="textStart">Conéctate en directo a las historias de nuestros ponentes</p><button onclick="window.open('https://www.youtube.com/watch?v=AzWOxlWli5g')" class="button-start col-10"> ¡Quiero! </button></div>
                        </div>
                    </div>		  
                </div>
                <div class="col-md-3 ">
                </div>
            </div>
            -->
            <br /><br />

            <!-- BEGIN: RIFA -->
            <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets/base/img/volunfair/Fotos2022/Fondos/atardecer-ciudad.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="animated c-bordered c-center c-content-media-1 flash row wow">
                                <div class="col-md-12">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">Resultados de la rifa de 2022</h3>
                                    </div>
                                </div> 
                                

                                <!-- BEGIN: RESULTADOS DE LA RIFA -->
                                <div class="c-center col-md-12 container row" id="buscarRifa">
                                    Introduce tu número para saber si has tenido suerte:
                                    <br /><br />

                                    <div class="c-center">
                                        <form>
                                            <label>Número:<label> <input type="number" id="numero" min="0" max="999" placeholder="" required="required" />
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
                                
                                <!--El viernes publicaremos los resultados!<br />
                                Mucha suerte y recuerda....No hay mar sin gotas

                                <br /><br />
        
                                
                                <!-- END: AVISO PREVIO CUANDO NO HAY RIFA -->                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        
            <!-- END: RIFA -->

            <!-- PONENTES ACTUALES-->
<!-- decomentar cuando se quiera ponentes actuales
            <br /><br />

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase  c-font-bold">Martes 1</h2>   
                <p class="c-center" >Acto inaugural de VOLUNFAIR 2022 a las <em>12:30</em> en el <em>Salón de Actos</em></p>                      
            </div>
-->

            <!-- BEGIN: Joaquín Echevarría y Álvaro Trigo-->
<!-- decomentar cuando se quiera ponentes actuales      
            <div class="c-content-box c-size-md c-bg-white">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-image-src="assets/base/img/volunfair/Fotos2022/Fondos/atardecer-ciudad.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-right">
                                        <h3 class="c-right c-font-uppercase c-font-bold">Joaquín Echeverría</h3>
                                        <h4 class="c-right c-font-uppercase c-font-bold">
-->
                                            <!--<a href="https://www.instagram.com/toninadal_oficial" target="_blank">@toninadal_oficial</a>
                                        </h4> -->
<!-- decomentar cuando se quiera ponentes actuales 
                                        <div class="c-right c-line-left "> </div>
                                    </div>
                                    <p class="c-right">
                                    También conocido como "El padre del héroe del monopatín", Joaquín Echevarría tuvo que decir adiós a su valiente hijo Ignacio tras fallecer en un atentado cuando intentaba defender a una mujer.
                                    Él mismo explica que su muerte y las circunstancias en las que se encontraba, le han hecho reflexionar sobre su vida y reforzar su fe: "(...) 
                                    Estoy seguro de que si él, ahora mismo, pudiese razonar no se arrepentiría de lo que hizo". En VOLUNFAIR nos enorgullece tener entre nosotros a superhéroes como Joaquín, que demuestran ser el palo de tal astilla.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 animated wow fadeInRight">
-->

                                <!--<div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/participantes/adol-essence.jpeg); /*min-height: 300px;*/">
                                </div> -->
<!-- decomentar cuando se quiera ponentes actuales
                                <img src="assets\base\img\volunfair\Fotos2022\joaquin.jpeg" width="100%" title="Joaquín Echeverría" alt="Joaquín Echeverría"/>
                                <br /><br />
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 animated wow fadeInLeft">
-->

                                <!--<div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/participantes/adol-essence.jpeg); /*min-height: 300px;*/">
                                </div> -->
<!-- decomentar cuando se quiera ponentes actuales
                                <img src="assets\base\img\volunfair\Fotos2022\alvaro.jpeg" width="100%" title="Álvaro Trigo" alt="Álvaro Trigo" />
                            </div>
                            <div class="col-md-8">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInRight" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-left">
                                        <h3 class="c-left c-font-uppercase c-font-bold">Álvaro Trigo</h3>
                                        <h4 class="c-left c-font-uppercase c-font-bold">
-->
                                            <!--<a href="https://www.instagram.com/toninadal_oficial" target="_blank">@toninadal_oficial</a>
                                        </h4> -->
<!-- decomentar cuando se quiera ponentes actuales
                                        <div class="c-left c-line-right "> </div>
                                    </div>
                                    <p class="c-left">
                                    Un atleta superviviente. Álvaro, natural de Madrid, con 23 años sufrió un accidente en un incendio que le provocó graves quemaduras en el 63% de su cuerpo.
                                    Pero esto no fue suficiente para pararle los pies; tan solo un año después pudo correr la maratón de Sevilla, seis meses más tarde cruzó a nado desde Formentera a Ibiza y en 2021 nadó desde las Islas Cíes hasta Vigo con los pies encadenados.
                                    Y como todo héroe, desde entonces ha elegido ayudar a aquellos que lo necesitan, colaborando con ONGs y fundaciones. Esta es la elección que le ha cambiado la vida por completo.
                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                               
                    <br />
                </div>

                
                                    
            </div>
-->
            <!-- END: Joaquín Echevarría y Álvaro Trigo-->
<!-- decomentar cuando se quiera ponentes actuales
            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Miércoles 2</h2>   
                <p class="c-center" >A las <em>12:30</em> en el <em>Salón de Actos</em> podrás conocer a dos superhéroes fascinantes</p>                      
            </div>
-->

            <!-- BEGIN  -->
<!-- decomentar cuando se quiera ponentes actuales
            <div class="c-content-box c-size-md">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="-100px" data-image-src="assets/base/img/volunfair/Fotos2022/Fondos/atardecer-ciudad.jpg">
                    <div class="container c-center">
                        <div class="row">
-->
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
<!-- decomentar cuando se quiera ponentes actuales
                            <div class="col-md-2">
                            </div>
-->
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <!-- BEGIN: Sara -->
<!-- decomentar cuando se quiera ponentes actuales
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="row c-center wow animated bounceInUp">
                                        <img src="assets\base\img\volunfair\Fotos2022\sara.jpeg" width="100%" title="Sara Andrés" alt="Sara Andrés" />
                                    </div>
                                    <br />
                                    <div class="row wow animated bounceInDown">
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-right">
                                                <h3 class="c-right c-font-uppercase c-font-bold"> Sara Andrés Barrio</h3>
                                                <h4 class="c-right c-font-uppercase c-font-bold">
-->
                                                   <!-- <a href="https://www.instagram.com/losangelesdekenia" target="_blank">@losangelesdekenia</a>
                                                </h4> -->
<!-- decomentar cuando se quiera ponentes actuales
                                                <div class="c-right c-line-left "> </div>
                                            </div>
                                            <p class="c-right">                                            
                                            Sara tenía toda su vida encaminada... pero un accidente de tráfico a los 25 años, donde perdió sus dos pies, le dio la vuelta a su mundo y a su manera de vivir.
                                            Durante el tiempo en que estuvo ingresada aprendió tres cosas, con las que en VOLUNFAIR nos quitamos el sombrero: ser humilde, ser paciente, y vivir el aquí y el ahora.
                                            Con estas ganas de vivir, se preparó durante meses para competir en los Juegos Paralímpicos de Río de Janeiro en la disciplina de atletismo, meses en los cuales le fue diagnosticado un cáncer de tiroides, y más tarde cáncer de piel.
                                            Sin embargo, esta heroína biónica que vuela más allá de los límites tiene claro su lema de vida: "Prefiero no tener pies y saber a dónde voy, que tenerlos y estar perdida"
                                            
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
-->
                            <!-- END: SARA-->
                            <!-- BEGIN: ANACAR -->
<!-- decomentar cuando se quiera ponentes actuales
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="row c-center wow animated bounceInUp">
                                        <img src="assets\base\img\volunfair\Fotos2022\guille.jpeg" width="100%" title="Guillermo Martínez" alt="Guillermo Martínez" />
                                    </div>
                                    <br />
                                    <div class="row wow animated bounceInDown">
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-left">
                                                <div class="c-left c-line-right "> </div>
                                                <h3 class="c-left c-font-uppercase c-font-bold">Guillermo Martínez</h3>
                                                <h4 class="c-left c-font-uppercase c-font-bold">
-->
                                                   <!-- <a href="https://www.instagram.com/fund_anacarolinadm/?hl=es" target="_blank">@fund_anacarolinadm</a>
                                                </h4> -->
<!-- decomentar cuando se quiera ponentes actuales
                                            </div>
                                            <p class="c-right">
                                            De niño, Guillermo Martínez diseñaba los juguetes que deseaba con el sueño de poder crearlos algún día. 
                                            De adolescente, fabricaba artilugios con cables, tornillos o tuercas de aparatos. De joven, con 27 años creó el primer brazo impreso en 3D para alguien sin codo.
                                            Todo empezó con un viaje a Kenia y una idea creativa y soñadora de llevar juguetes, que se transformó en un proyecto de prótesis para personas sin alguna articulación. 
                                            Finalmente, en 2017 fundó Ayúdame3D, una ONG que hoy reparte gratuitamente estas piezas en más de 55 países. Una gran muestra de que no todos los superhéroes llevan capa, algunos llevan una impresora 3D bajo el brazo
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
-->
                            <!-- END:ANACAR -->
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
<!-- decomentar cuando se quiera ponentes actuales
                            <div class="col-md-2">
                            </div>
-->
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
<!-- decomentar cuando se quiera ponentes actuales
                           </div>
                    </div>
                </div>
                    
                <br /><br/>
            </div>
-->
            <!-- END: KENIA &  ANACAROLINA -->

<!-- decomentar cuando se quiera ponentes actuales            
            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Y con la colaboración de:</h2>                    
            </div>

            <br />

-->    
            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
<!-- decomentar cuando se quiera ponentes actuales
            <div class="col-md-5">
            </div>
-->

            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <!-- BEGIN: PABLO Y CLARA -->
<!-- decomentar cuando se quiera ponentes actuales
            <div class="row">
                <div class="col-md-2">
                    <div class="col-md-12">
                        <div class="row c-center fotos wow animated fadeInLetf">
                            <img src="assets/base/img/volunfair/participantes/pablo-espana-falda.jpg" width="100%" title="Pablo España" alt="Pablo España" />
                        </div>
                        <div class="row c-content-media-1 wow animated fadeInRight">
                            <div class="c-center">
                                <h3 class="c-font-uppercase c-font-bold">Pablo España</h3>
                                <div>Speaker de VOLUNFAIR 2022</div>
                            </div>
                        </div>
                        <br />
                    </div>
                </div>
                
            </div>
-->
            <!-- END: PABLO Y CLARA -->
            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
<!-- decomentar cuando se quiera ponentes actuales
            <div class="col-md-4">
            </div>
-->

            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->

         <!-- END: PONENTES ACTUALES-->
        

            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <br /><br/>

<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>