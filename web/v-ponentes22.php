
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
                var serie = $("#serie").val();
                
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
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2023/encabezado_1.jpg)">
<  
        </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
            <div style="text-align:left">
            <br>
                <div class="col-md-2 wow animated bounceIn">
                    <h2 class="c-right c-font-uppercase c-font-bold">
                    <a href="v-ponentes21"><img src="./assets/base/img/volunfair/galeria/FLECHA2.jpg" /><br/>2021</a> 
                        </h2>
                </div>

            </div>

            <!-- BEGIN: TITULO -->
			<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">VOLUNFAIR 2022</h3>
                    <p class="c-center" > 2022 entró pisando fuerte con la séptima edición de <b>VOLUNFAIR</b> en marzo. 6 meses de preparación, 4 ponentes con <br>auténticos poderes de servicio,
                    2 superhéroes rondando la universidad con trajes de superman y miles de personas conociendo nuevas ONGs...<br>Y en ese momento nos dimos cuenta de que, de algo tan sencillo y ordinario
                    como es <b>darse a los demás</b>, habíamos conseguido hacer algo<br> <b>muy extraordinario</b>. Porque con #pequeñosGESTOS se hacen #GRANDEScambios
                     </p>
					
				</div>
                
			</div>
            <!--- END: TÍTULO -->

            <br /><br />

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase  c-font-bold">Martes 1 de marzo: Q&A con Joaquín Echeverría y Álvaro Trigo</h2>   
                <p class="c-center" >Acto inaugural con dos ejemplazos extraordinarios en el mundo ordinario</p>             
            </div>

           <!-- BEGIN: Joaquín Echevarría y Álvaro Trigo-->
           <div class="c-content-box c-size-md c-bg-white">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-image-src="assets/base/img/volunfair/Fotos2022/Fondos/atardecer-ciudad.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-right">
                                        <h3 class="c-right c-font-uppercase c-font-bold">Joaquín Echeverría</h3>
                                        <div class="c-right c-line-left "> </div>
                                    </div>
                                    <p class="c-right">
                                    También conocido como "El padre del héroe del monopatín", Joaquín Echeverría tuvo que decir adiós a su valiente hijo Ignacio tras fallecer en un atentado cuando intentaba defender a una mujer.
                                    Él mismo nos explicaba que su muerte y las circunstancias en las que se encontraba, le hicieron reflexionar sobre su vida y reforzar su fe: "(...) 
                                    Estoy seguro de que si él, ahora mismo, pudiese razonar no se arrepentiría de lo que hizo". <br>En VOLUNFAIR nos enorgullece tener entre nosotros a superhéroes como Joaquín, que demuestran ser el palo de tal astilla.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 animated wow fadeInRight">

                                <!--<div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2022/joaquin.jpeg); /*min-height: 300px;*/">
                                </div> -->
                                <img src="assets/base/img/volunfair/anteriores/2022/joaquinm.jpg" width="100%" title="Joaquín Echeverría" alt="Joaquín Echeverría"/>
                                <br /><br />
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 animated wow fadeInLeft">

                                <!--<div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/participantes/adol-essence.jpeg); /*min-height: 300px;*/">
                                </div> -->
                                <img src="assets/base/img/volunfair/anteriores/2022/alvar.jpeg" width="100%" title="Álvaro Trigo" alt="Álvaro Trigo" />
                            </div>
                            <div class="col-md-8">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInRight" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-left">
                                        <h3 class="c-left c-font-uppercase c-font-bold">Álvaro Trigo</h3>
                                        <h4 class="c-left c-font-uppercase c-font-bold">
                                            <a href="https://www.instagram.com/alvarotrigopuig" target="_blank"><u>@alvarotrigopuig</u></a>
                                        </h4>
                                        <div class="c-left c-line-right "> </div>
                                    </div>
                                    <p class="c-left">
                                    Un atleta superviviente. Álvaro, natural de Madrid, con 23 años sufrió un accidente en un incendio que le provocó graves quemaduras en el 63% de su cuerpo.
                                    Pero esto no fue suficiente para pararle los pies; tan solo un año después pudo correr la maratón de Sevilla, seis meses más tarde cruzó a nado desde Formentera a Ibiza y en 2021 nadó desde las Islas Cíes hasta Vigo con los pies encadenados.
                                    <br>Y como todo héroe, desde entonces ha elegido ayudar a aquellos que lo necesitan, colaborando con ONGs y fundaciones. Esta es la elección que le ha cambiado la vida por completo.
                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                               
                    <br />
                </div>

                
                                    
            </div>
            <!-- END: Joaquín Echevarría y Álvaro Trigo-->
             
            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Miércoles 2 de marzo</h2>   
                <p class="c-center" >Durante el día vinieron dos superhéroes fascinantes...</p>                      
            </div>

            <!-- BEGIN  -->
            <div class="c-content-box c-size-md">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="-100px" data-image-src="assets/base/img/volunfair/Fotos2022/Fondos/atardecer-ciudad.jpg">
                    <div class="container c-center">
                        <div class="row">
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <!-- BEGIN: Sara -->
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="row c-center wow animated bounceInUp">
                                        <img src="assets/base/img/volunfair/anteriores/2022/saraandress.jpeg" width="100%" title="Sara Andrés" alt="Sara Andrés" />
                                    </div>
                                    <br />
                                    <div class="row wow animated bounceInDown">
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-right">
                                                <h3 class="c-right c-font-uppercase c-font-bold"> Sara Andrés Barrio</h3>
                                                <h4 class="c-right c-font-uppercase c-font-bold">
                                                 <a href="https://www.instagram.com/saraandressport/" target="_blank"><u>@saraandressport</u></a>
                                                </h4> 
                                                <div class="c-right c-line-left "> </div>
                                            </div>
                                            <p class="c-right">                                            
                                            Sara tenía toda su vida encaminada... pero un accidente de tráfico a los 25 años, donde perdió sus dos pies, le dio la vuelta a su mundo y a su manera de vivir.
                                            Durante el tiempo en que estuvo ingresada aprendió tres cosas, con las que en VOLUNFAIR nos quitamos el sombrero: ser humilde, ser paciente, y vivir el aquí y el ahora.
                                            Con estas ganas de vivir, se preparó durante meses para competir en los Juegos Paralímpicos de Río de Janeiro en la disciplina de atletismo, meses en los cuales le fue diagnosticado un cáncer de tiroides, y más tarde cáncer de piel.
                                            Sin embargo, esta heroína biónica que vuela más allá de los límites tiene claro su lema de vida: "Prefiero no tener pies y saber a dónde voy, que tenerlos y estar perdida".
                                            
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: SARA-->
                            <!-- BEGIN: ANACAR -->
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="row c-center wow animated bounceInUp">
                                        <img src="assets/base/img/volunfair/anteriores/2022/guille.jpeg" width="100%" title="Guillermo Martínez" alt="Guillermo Martínez" />
                                    </div>
                                    <br />
                                    <div class="row wow animated bounceInDown">
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-left">
                                                <div class="c-left c-line-right "> </div>
                                                <h3 class="c-left c-font-uppercase c-font-bold">Guillermo Martínez</h3>
                                                <h4 class="c-left c-font-uppercase c-font-bold">
                                                 <a href="https://www.instagram.com/guillermogaunavivas/" target="_blank"><u>@guillermogaunavivas</u></a>
                                                </h4>
                                            </div>
                                            <p class="c-right">
                                            De niño, Guillermo Martínez diseñaba los juguetes que deseaba con el sueño de poder crearlos algún día. 
                                            De adolescente, fabricaba artilugios con cables, tornillos o tuercas de aparatos. De joven, con 27 años creó el primer brazo impreso en 3D para alguien sin codo.
                                            Todo empezó con un viaje a Kenia y una idea creativa y soñadora de llevar juguetes, que se transformó en un proyecto de prótesis para personas sin alguna articulación. 
                                            Finalmente, en 2017 fundó Ayúdame3D, una ONG que hoy reparte gratuitamente estas piezas en más de 55 países. Una gran muestra de que no todos los superhéroes llevan capa, algunos llevan una impresora 3D bajo el brazo.
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

             <!-- BLOQUE EQUIPO Y JEFES -->
			<div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="col-md-5">
                        <img src="assets/base/img/volunfair/anteriores/2022/jefes2022.jpeg" alt="María López y José María Seral" title="María López y José María Seral" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInLeft" >
                            Nuestros jefes: María López y José María Seral
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="assets/base/img/volunfair/anteriores/2022/equipo2022.jpeg" alt="Equipo 2022" title="Equipo 2022" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInRight" >
                            El equipo VOLUNFAIR 2022
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: BLOQUE EQUIPO Y JEFES -->
            <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets/base/img/volunfair/mares/mar13.jpeg">
                <div class="container">
                    <div class="col-md-12 c-content-box c-size-md c-bordered wow  bounceIn animated">
                        <div class="c-bg-white c-content-media-1 c-bordered">
                            <div class="col-md-12">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">PONENCIAS</h3>
                                </div>
                            </div>
                             
                            <div class="solomediano1">
                              <div class="row c-center wow animated fadeInUp">
                                    <iframe width="500" height="315" src="https://www.youtube.com/embed/AzWOxlWli5g?autoplay=1" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <iframe width="500" height="315" src="https://www.youtube.com/embed/yRVFeqtADEs" frameborder="0" allow="accelerometer;encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                                    <div class="solo_peq">
                                        <div class="row c-center wow animated bounceIn">
                                            <iframe width="350" height="315" src="https://www.youtube.com/embed/AzWOxlWli5g?autoplay=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <iframe width="350" height="315" src="https://www.youtube.com/embed/yRVFeqtADEs" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                         </div>
                                    </div>   
                            </div>
              
                    </div>                         
                </div>
            </div>    
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
                                <div>Speaker de VOLUNFAIR 2022</div>
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