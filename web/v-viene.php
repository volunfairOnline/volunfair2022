
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
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2024/Fondos/puente_8.jpg)">

            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->


            <!-- <br /><br /><br /><br />
            <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="animated c-bordered c-center c-content-media-1 flash row wow">
                                    <div class="col-md-12">
                                        <div class="c-content-title-1">
                                            <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">Resultados de la rifa de 2025</h3>
                                        </div>
                                    </div>  -->
                                

                                    <!-- BEGIN: RESULTADOS DE LA RIFA -->
                            
                               <!-- <div class="c-center col-md-12 container row" id="buscarRifa">
                                    Introduce tu número para saber si has tenido suerte:
                                    <br /><br />

                                    <div class="c-center">
                                        <form>
                                            <label>Número:<label> <input type="number" id="numero" min="0" max="3000" placeholder="" required="required" /> -->
                                            <!--<label>Serie:<label>--> 
                                            <!--<select id="serie" required="required" >
                                                <option value="un">Único</option>    
                                                <option value="am">Amarillo</option>
                                                <option value="az">Azul</option>-->
                                                
                                            <!-- </select>
                                           <input type="button" value="Buscar" onClick="buscar();" >                                    
                                        </form>
                                    </div>
                                </div>
                            </div>  -->
                                <!-- END: RESULTADOS DE LA RIFA -->

                                <!-- BEGIN: AVISO PREVIO CUANDO NO HAY RIFA -->
                                
                                <!--El viernes publicaremos los resultados!<br />
                                Mucha suerte y recuerda....No hay mar sin gotas

                                <br /><br />
        
                                
                                <!-- END: AVISO PREVIO CUANDO NO HAY RIFA -->                              
                  <!--           </div>
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->


            
                <!-- BEGIN: CUENTA ATRÁS -->
                <br /><br /><br /><br />
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets\base\img\volunfair\Fotos2024/Fondos\puente_8.png">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="c-content-media-1 c-center c-bordered wow animated flash">
                                    <div class="col-md-12">
                                        <div class="c-content-title-1">
                                            <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">VOLUNFAIR 2026 será realidad en ... </h3>
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
        

                <div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">LA EDICIÓN 2026</h3>
                    <div class="c-line-center c-theme-bg"></div>
                    <p class="c-center" >El equipo de VOLUNFAIR 2026 tiene el placer de invitarles a la <b>XI edición de VOLUNFAIR</b>, que viene pisando fuerte con 2 días de feria. <br /><b>El miércoles 18 y jueves 19 </b>de febrero podrá conocer a todas las entidades sociales que nos acompañan este año.
                    <br /> Además, contamos con unos ponentes de mucho nivel, que compartirán un buen rato con nosotros en la <br /> <b>La Escuela Técnica Superior de Ingenieros Industriales de la UPM (C/ José Gutiérrez Abascal)</b>. ¡Que no te lo cuenten!</p>
					<!-- <p class="c-center" >La <b>décima edición de VOLUNFAIR</b> fue increíble. ¡Gracias a todos los que compartistéis con nosotros estos días! <br>Si quieres volver a revivir estos momentos los vídeos están disponibles en nuestro canal de Youtube @volunfair.</p>  -->
					
				</div>
                
			</div>


                 <!-- PONENTES ACTUALES-->
             
            <br /><br />

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase  c-font-bold">Miércoles 18</h2>   
                <p class="c-center" >Acto inaugural de VOLUNFAIR 2026 a las <b><em>12:00</em></b> en el <em>Salón de Actos</em></p>                      
            </div>

            <!-- BEGIN: Ponentes -->  
            
            <div class="c-content-box c-size-md c-bg-white">
                <div class="parallax-window"
                    data-parallax="scroll"
                    data-bleed="15"
                    data-speed="0.2"
                    data-z-index="0">

                    <!-- ================= JOSÉ MOTA ================= -->
                    <div class="container">
                        <div class="row" style="display:flex; align-items:stretch;">

                            <!-- FOTO -->
                            <div class="col-md-6" style="display:flex;">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft"
                                    style="display:flex; flex-direction:column; width:100%;">

                                    <div class="c-content-title-3 c-theme-border c-right">
                                        <h3 class="c-right c-font-uppercase c-font-bold">José Mota</h3>
                                        <div class="c-right c-line-left"></div>
                                    </div>

                                    <div class="c-left" style="flex:1;">
                                        <img src="assets/base/img/volunfair/Fotos2026/josemota.jpg"
                                            alt="José Mota"
                                            title="José Mota"
                                            style="width:100%; height:100%; object-fit:cover;">

                                        <small class="text-muted" style="display:block; margin-top:5px;">
                                            Foto:
                                            <a href="https://commons.wikimedia.org/wiki/File:Premios_Goya_2018_-_Jos%C3%A9_Mota.jpg" target="_blank">
                                                Wikimedia Commons
                                            </a> ·
                                            <a href="https://creativecommons.org/licenses/by-sa/4.0/deed.es" target="_blank">
                                                CC BY-SA 4.0
                                            </a>
                                        </small>
                                    </div>

                                </div>
                            </div>

                            <!-- TEXTO -->
                            <div class="col-md-6" style="display:flex;">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInRight"
                                    style="display:flex; align-items:center; width:100%;">

                                    <p class="c-left">
                                        <b>José Mota</b> es una de las figuras más queridas del <b>humor</b> y la <b>interpretación</b> en España,
                                        pero su compromiso va mucho más allá de los escenarios. A lo largo de su trayectoria, ha colaborado de forma
                                        solidaria con diversas <b>ONGs</b> y <b>campañas benéficas</b>, poniendo su popularidad al servicio de quienes
                                        más lo necesitan. Entre sus iniciativas más destacadas se encuentra su participación en la gala
                                        <b>Inocente, Inocente</b>, destinada a la recaudación de fondos para la <b>infancia en situación de vulnerabilidad</b>,
                                        así como su apoyo a organizaciones como <b>Cruz Roja</b> y <b>Manos Unidas</b>.<br><br>

                                        Gracias a estas acciones, demuestra que el <b>humor</b> también puede ser una herramienta de
                                        <b>sensibilización social</b>, <b>empatía</b> y <b>transformación social</b>.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                    <br><br>


                    <!-- ================= CARLOS / PICHIFIT ================= -->

                    <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase  c-font-bold">Jueves 19</h2>   
                <p class="c-center" >Acto de clausura de VOLUNFAIR 2026 a las <b><em>18:30</em></b> en el <em>Salón de Actos</em></p>                      
            </div>


                    <div class="container">
                        <div class="row" style="display:flex; align-items:stretch;">

                            <!-- TEXTO -->
                            <div class="col-md-6" style="display:flex;">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft"
                                    style="display:flex; align-items:center; width:100%;">

                                    <p class="c-left">
                                        <b>Pichi (Carlos Martínez)</b>, conocido como <b>@Pichifit</b>, es creador de contenido y divulgador de
                                        <b>hábitos saludables</b> y <b>motivación personal</b>. A través de su historia de <b>superación</b>,
                                        inspira a miles de personas a luchar por una vida más plena y equilibrada.<br><br>

                                        Es <b>patrono de la Fundación Caíco</b>, dedicada a mejorar la calidad de vida de <b>niños con cáncer</b>
                                        y de sus familias mediante apoyo económico, acompañamiento psicológico, programas educativos y la
                                        promoción de la <b>investigación oncológica</b>.<br><br>

                                        Desde 2018, además, es voluntario en <b>Misión País</b>, sirviendo en <b>comunidades rurales</b> y
                                        combinando acción social, formación y vida comunitaria.
                                    </p>

                                </div>
                            </div>

                            <!-- FOTO -->
                            <div class="col-md-6" style="display:flex;">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInRight"
                                    style="display:flex; flex-direction:column; width:100%;">

                                    <div class="c-content-title-3 c-theme-border">
                                        <h3 class="c-font-uppercase c-font-bold">Pichifit</h3>
                                        <div class="c-line-left"></div>
                                    </div>

                                    <div class="c-left" style="flex:1;">
                                        <img src="assets/base/img/volunfair/Fotos2026/Pichifit.png"
                                            alt="Avatar genérico"
                                            title="Avatar genérico"
                                            style="width:100%; height:100%; object-fit:cover;">

                                        <small class="text-muted" style="display:block; margin-top:5px;">
                                            Icono de usuario: 
                                            <a href="https://www.flaticon.com/free-icons/user" target="_blank" title="user icons">
                                                User icons created by Becris - Flaticon
                                            </a>
                                        </small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            <br></br><br></br>
                            
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                           </div>
                    </div>
                </div>
                    
                <br /><br/>
            </div>
            <!-- END: Carlos Bobillo y Pablo Delgado de la Serna -->
                            
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                           </div>
                    </div>
                </div>
                    
                <br /><br/>
            </div>
            <!-- END: Lóla Sánchez y Mariana de Ugarte -->
     
            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Y con la colaboración de:</h2>                    
            </div> 

            <br />
            <!-- BEGIN: MODERADORES  -->
            <div class="row" style="display: flex; justify-content: center; align-items: center; gap: 20px;">

            <div class="col-6 col-sm-4 col-md-2">
                    <div>
                        <img src="assets/base/img/volunfair/Fotos2025/PabloEspana.jpg" width="100%" title="Pablo España" alt="Pablo España" />
                    </div>
                    <div class="row c-content-media-1 wow animated fadeInRight">
                        <div class="c-center">
                            <h3 class="c-font-uppercase c-font-bold">Pablo España</h3>
                            <div>Speaker de VOLUNFAIR 2026</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-2">
                    <div>
                        <img src="assets/base/img/volunfair/Fotos2025/JaviGonzalez.jpg" width="100%" title="Javier González" alt="Javier González" />
                    </div>
                    <div class="row c-content-media-1 wow animated fadeInRight">
                        <div class="c-center">
                            <h3 class="c-font-uppercase c-font-bold">Javier González</h3>
                            <div>Speaker de VOLUNFAIR 2026</div>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- END: MODERADORES  -->

            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <div class="col-md-4">
            </div>

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