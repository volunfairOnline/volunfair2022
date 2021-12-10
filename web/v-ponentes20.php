
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
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2021/bosque2.jpg)">
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->

            <!-- BEGIN: TITULO -->
			<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">VOLUNFAIR 2020</h3>
					<div class="c-line-center c-theme-bg"></div>
				</div>
			</div>

            <div class="c-content-box c-size-md c-bg-white" style="margin-top: -60px;">
                <div class="container">
                    <div class="c-content-media-1 c-bordered wow bounceIn animated que-es">
                    
                      <p>
                      2020 fue sin duda un año especial, no solo contamos con la presencia de Rocío y Rodrigo, fundadores de Adol-Essence,
                      explicándonos su experiencia y proyecto, sino que María (@misuperheroesincapa) y Natalia (@villagayumbos) nos hicieron el
                      favorazo de asistir como ponentes para contarnos cómo es vivir entregándose y dando lo mejor de tí a los demás.
                      </p>

                      <p>
                      Nuestro equipazo no dejó de crecer, superando los 100 integrantes dispuestos a hacer de esta edición la más grande y memorable
                      hasta la fecha.
                      </p>

                      <p>
                      Sin duda 2020 resultó una de nuestras mejores ediciones hasta la fecha. A continuación te explicamos por qué y quiénes 
                      fueron los actores que hicieron tan importante esta edición:
                      </p>

                    </div>
                </div>
            </div>
            <!--- END: TÍTULO -->


            <br /><br />

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase  c-font-bold">Miércoles 12 de Febrero: Gran Inauguración con Adol-Essence:</h2>               
            </div>

            <!-- BEGIN: ADOL-ESSENCE -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-image-src="assets/base/img/volunfair/mares/mar12.jpeg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-right">
                                        <h3 class="c-right c-font-uppercase c-font-bold">Rocío Talavera y Rodrigo Osborne</h3>
                                        <h4 class="c-right c-font-uppercase c-font-bold">
                                            <a href="https://www.instagram.com/adolessence.voluntarios" target="_blank"><u>Adol-essence</u></a>
                                        </h4>
                                        <div class="c-right c-line-left "> </div>
                                    </div>
                                    <p class="c-right">
                                        Rocío Talavera y Rodrigo Osborne, dos jóvenes sevillanos de 19 años, hicieron realidad su mayor ilusión, consiguiendo así mejorar y facilitar 
                                        la dura realidad que se le presenta a algunos adolescentes. Ante la enfermedad de Rodrigo, se les ocurrió la idea de fundar Adol-essence, 
                                        su pequeña gota para cambiar el mundo. Esta plataforma busca tejer redes de contacto que puedan dar apoyo a adolescentes hospitalizados.
                                        <br />
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 animated wow fadeInRight">
                                <!--<div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/participantes/adol-essence.jpeg); /*min-height: 300px;*/">
                                </div>-->
                                <img src="assets/base/img/volunfair/anteriores/adol-essence.jpeg" width="100%" title="Adol-essence: un proyecto de Rocío Talavera y Rodrigo Osborne" alt="Adol-essence: un proyecto de Rocío Talavera y Rodrigo Osborne"/>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>
            </div>
            <!-- END: ADOL-ESSENCE -->

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Jueves 13 de febrero: "Aportando nuestra gota" con María y Natalia.</h2>   
                <p class="c-center" >Porque el mar sería menos mar si le faltara esa gota.</p>                      
            </div>

            <!-- BEGIN: VILLAGAYUMBOS & MI SUPERHÉROE SIN CAPA -->
            <div class="c-content-box c-size-md">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="-100px" data-image-src="assets/base/img/volunfair/mares/mar13.jpeg">
                    <div class="container c-center">
                        <div class="row">
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->

                <!-- EDIT: VILLAGAYUMBOS -->
                <div class="c-content-box c-size-md c-bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="c-content-media-1 c-bordered wow animated fadeInLeft" style="min-height: 300px; background-color: #e8ebeb;">
                                
                                
                                    <div class="c-content-title-3 c-theme-border c-right">
                                        <h3 class="c-right c-font-uppercase c-font-bold">Natalia Olaso</h3>
                                        <h4 class="c-right c-font-uppercase c-font-bold">
                                                    <a href="https://www.instagram.com/nataolaso/" target="_blank"><u>@villagayumbos</u></a>
                                                </h4>
                                        <div class="c-right c-line-left "> </div>
                                    </div>
                                    <p class="c-right">
                                                ¿Y tú qué harías si un día te despiertas y ves que influyes en la vida de más de 100.000 personas?<br />
                                                Para Natalia esto es su día a día. Es madre de tres niños, sus tres más fieles seguidores y los que dan nombre a su cuenta. 
                                                Natalia nos ha hecho entender el papel de una madre, que a lo mejor son ellos realmente los influencers, porque cualquier mamá será siempre la fan número 
                                                uno de sus hijos, y son ellos los que van a guiar y determinar su vida de las formas más imprevistas.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="c-content-media-2 c-bg-img-center wow animated fadeInRight" style="background-image: url(assets/base/img/volunfair/anteriores/villagayumbos.png); min-height: 300px;">
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
                 <!-- FIN EDIT: VILLAGAYUMBOS -->
                
                 <!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-2-->
                <div class="c-content-box c-size-md c-bg-white">
                    <div class="container">
                        <div class="row">
                    	       <div class="col-md-4">
                    	   	      <div class="c-content-media-2 c-bg-img-center wow animated fadeInLeft" style="background-image: url(assets/base/img/volunfair/anteriores/misuperheroesincapa.jpeg); min-height: 300px;">
                                </div>
                            </div>
                    	
                    	
                            <div class="col-md-8">
                                <div class="c-content-media-1 c-bordered wow animated fadeInRight" style="min-height: 300px; background-color: #e8ebeb;">
                                    <div class="c-content-title-3 c-theme-border ">
                                    <h3 class="c-left c-font-uppercase c-font-bold ">María Montoya</h3>
                                    <h4 class="c-left c-font-uppercase c-font-bold">
                                                    <a href="https://www.instagram.com/misuperheroesincapa/" target="_blank"><u>@misuperheroesincapa</u></a>
                                    </h4>
                                    <div class=" c-line-left "></div>
                                    </div>
                                
                                    <p>
                                    María tenía su trabajo de profesora de colegio, su marido, sus hijos, sus amigas... Y un día, de repente, la vida le regaló
                                    a Nacho, un superhéroe que todos los días lucha por sobrevivir y que hace que cada uno a su alrededor saque lo mejor de sí mismo
                                    y se convierta también en otro superhéroe.<br />
                                    Y es que su hijo tiene síndrome de Ondine, una enfermedad rara que le impide llevar una vida normal y que ha supuesto para María
                                    descubrir que cada día es un bonito obsequio que disfrutar.
                                    </p>
 
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <!-- END: CONTENT/MISC/LATEST-ITEMS-2 -->

              
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            </div>
                    </div>
                </div>
                    
                <br /><br/>
            </div>
            <!-- END: VILLAGAYUMBOS & MI SUPERHÉROE SIN CAPA -->

                    <!-- BEGIN: VÍDEOS AÑO ANTERIOR -->
                    <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets/base/img/volunfair/mares/mar13.jpeg">
                <div class="container">
                    <div class="col-md-12 c-content-box c-size-md c-bordered wow  bounceIn animated">
                        <div class="c-bg-white c-content-media-1 c-bordered">
                            <div class="col-md-12">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">Vídeos</h3>
                                </div>
                            </div>
                            <div class="solomediano1">
                                    <div class="row c-center wow animated bounceIn">
                                        <iframe width="500" height="315" src="https://www.youtube-nocookie.com/embed/WEtWWy8wbgM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <iframe width="500" height="315" src="https://www.youtube-nocookie.com/embed/J3ojTZEZMXg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>                              
                                    <div class="row c-center wow animated bounceIn">
                                        <iframe width="500" height="315" src="https://www.youtube-nocookie.com/embed/ZEp-a___nng" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <iframe width="500" height="315" src="https://www.youtube-nocookie.com/embed/KPnpI58YjMY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                            </div>
                            <div class="solo_peq">
                            <div class="row c-center wow animated bounceIn">
                                        <iframe width="350" height="315" src="https://www.youtube-nocookie.com/embed/WEtWWy8wbgM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <iframe width="350" height="315" src="https://www.youtube-nocookie.com/embed/J3ojTZEZMXg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>                              
                                    <div class="row c-center wow animated bounceIn">
                                        <iframe width="350" height="315" src="https://www.youtube-nocookie.com/embed/ZEp-a___nng" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <iframe width="350" height="315" src="https://www.youtube-nocookie.com/embed/KPnpI58YjMY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                            </div>    
                            <br />  
                            <br />
                            <div class="col-md-12">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">Galería de fotos</h3>
                                </div>
                            </div>
                            <div id="galFotos" style="margin-top: 65px;">
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-22.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-2.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-3.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-4.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-5.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-6.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-7.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-8.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-9.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-10.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-11.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-12.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-13.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-14.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-15.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-16.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-17.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-18.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-19.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-20.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                               
                                <div>
                                    <img src="./assets/base/img/volunfair/anteriores/2020a/2020-Fotos-21.jpg" alt="VOLUNFAIR 2020" tilte="VOLUNFAIR 2020" />
                                </div>
                            
                            
                            </div>                         
                        </div>

                    </div> 
                </div>
            </div>
            <!-- END: VÍDEOS AÑO ANTERIOR -->            

            <br /><br />

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase  c-font-bold">Miércoles 12 de Febrero: Gran Inauguración con Adol-Essence:</h2>               
            </div>

            <!-- BEGIN: ADOL-ESSENCE -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-image-src="assets/base/img/volunfair/mares/mar12.jpeg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-right">
                                        <h3 class="c-right c-font-uppercase c-font-bold">Rocío Talavera y Rodrigo Osborne</h3>
                                        <h4 class="c-right c-font-uppercase c-font-bold">
                                            <a href="https://www.instagram.com/adolessence.voluntarios" target="_blank">Adol-essence</a>
                                        </h4>
                                        <div class="c-right c-line-left "> </div>
                                    </div>
                                    <p class="c-right">
                                    Con tan solo 19 años, el osteosarcoma de Rodrigo les llevó a él, y a Rocío, a darse cuenta de que con optimismo, trabajo en equipo y 
                                    compromiso sí se puede cambiar el mundo. Esta joven pareja sevillana, fundó Adol-Essence, "más que una buena idea, un proyecto necesario" 
                                    que conecta a jóvenes pacientes y voluntarios para ayudarse mutuamente, fomentando el desarrollo de las capacidades de cada uno a la vez 
                                    que se apoya en la enfermedad al hospitalizado. <br />
                                    En Volunfair, compartimos todos los valores que incentivan esta asociación, es por ello que queremos compartir y motivar un voluntariado tan cercano y servicial como el que nos ha enseñado Adol-Essence.
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 animated wow fadeInRight">
                                <!--<div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/participantes/adol-essence.jpeg); /*min-height: 300px;*/">
                                </div>-->
                                <img src="assets/base/img/volunfair/participantes/adol-essence.jpeg" width="100%" title="Adol-essence: un proyecto de Rocío Talavera y Rodrigo Osborne" alt="Adol-essence: un proyecto de Rocío Talavera y Rodrigo Osborne"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="./assets/base/img/volunfair/stand/foto6.jpg" alt="Equipo 2020" title="Equipo 2020" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInRight" >
                            El equipo
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: BLOQUE EQUIPO Y JEFES -->
			
            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Y con la colaboración de:</h2>                    
            </div>

            <br />

            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <div class="col-md-4">
            </div>
            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->

            
            <!-- BEGIN: PABLO Y CLARA -->
            <div class="row">
                <div class="col-md-2">
                    <div class="col-md-12">
                        <div class="row c-center fotos wow animated fadeInLeft">
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
                <div class="col-md-2">
                    <div class="col-md-12">
                        <div class="row c-center fotos wow animated fadeInRight">
                            <img src="assets/base/img/volunfair/participantes/clara-h.jpeg" width="100%" title="Clara H" alt="Clara H" />
                        </div>
                        <div class="row c-content-media-1 wow animated fadeInLeft">
                            <div class="c-center">
                                <h3 class="c-font-uppercase c-font-bold">Clara H</h3>
                                <div>Actuación en directo</div>
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