
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

            <!-- BEGIN: TITULO -->
			 <div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">LA EDICIÓN 2024</h3>
                    <div class="c-line-center c-theme-bg"></div>
                    <p class="c-center" >La novena edición de <b>VOLUNFAIR</b> fue increíble ¡Gracias! <br />El jueves 8 y viernes 9 de febrero conocimos a todas las entidades sociales que nos acompañaron este año.
                    <br /> Además, con unos ponentes de mucho nivel, que compartieron un buen rato con nosotros. ¡Vuelve a escucharles!</p>  
					
				</div>
                
			</div>
            <!--<div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets/base/img/volunfair/Fotos2023/Fondos/magia15.jpeg"> -->
                <!--<div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="animated c-bordered c-center c-content-media-1 flash row wow">
                                    <div class="col-md-12">
                                        <div class="c-content-title-1">
                                            <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">Resultados de la rifa de 2023</h3>
                                        </div>
                                    </div> 
                                    -->
<
                                    <!-- BEGIN: RESULTADOS DE LA RIFA -->
                            
                               <!-- <div class="c-center col-md-12 container row" id="buscarRifa">
                                    Introduce tu número para saber si has tenido suerte:
                                    <br /><br />

                                    <div class="c-center">
                                        <form>
                                            <label>Número:<label> <input type="number" id="numero" min="0" max="999" placeholder="" required="required" />
                                            <!--<label>Serie:<label>--> 
                                            <!--<select id="serie" required="required" >
                                                <option value="un">Único</option>    
                                                <option value="am">Amarillo</option>
                                                <option value="az">Azul</option>-->
                                                
                                            </select>
                                           <!-- <input type="button" value="Buscar" onClick="buscar();" > -->                                     
                                        </form>
                                    </div>
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
            <!-- </div> -->

            <div class="c-bg-white c-content-media-1 c-bordered">
                            <div class="row c-center wow animated fadeInUp">
                                <iframe width="530" height="315" src="https://www.youtube.com/embed/_a5-YCQnTu0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<iframe width="530" height="315" src="https://www.youtube.com/embed/XCDD0jHUA-c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
                            
                        </div>
            <!--- END: TÍTULO -->

            <!-- BEGIN: CUENTA ATRÁS -->
            <!-- 
             <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets/base/img/volunfair/Fotos2024/Fondos/pared_ladrillo.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="c-content-media-1 c-center c-bordered wow animated flash">
                                    <div class="col-md-12">
                                        <div class="c-content-title-1">
                                            <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">VOLUNFAIR 2024 será realidad en ... </h3>
                                        </div>
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
                
        -->
                <!-- 
                    https://denis-creative.com/jstimer/
                    https://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/
                -->
                <!-- END: CUENTA ATRÁS -->

             <!-- BEGIN: RIFA -->
             <!--
                <br /><br /><br />
                
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
                <br /><br /> 
            
                    
            </div>
        -->
            <!-- END: RIFA -->

            <!-- PONENTES ACTUALES-->
            <br /><br />

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase  c-font-bold">Jueves 8</h2>   
                <p class="c-center" >Acto inaugural de VOLUNFAIR 2024 a las <em>13:30</em> en el <em>Salón de Actos</em></p>                      
            </div>


            <!-- BEGIN: Montse y Javier Cascón-->  
            <div class="c-content-box c-size-md c-bg-white">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-image-src="assets/base/img/volunfair/Fotos2024/Fondos/puente2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-right">
                                        <h3 class="c-right c-font-uppercase c-font-bold">Montse (Babies Uganda)</h3>
                                        <h4 class="c-right c-font-uppercase c-font-bold">
                                        <div class="c-right c-line-left "> </div>
                                    </div>
                                    <p class="c-right">
                                    Montse y Maribel dirigen y gestionan la ONG desde España y María lo hace sobre el terreno como coordinadora de proyectos en Uganda.
                                    Tres mujeres unidas con una lucha en común: formar parte del cambio.También cumplen un papel muy importante nuestros voluntarios que,
                                     desde España, nos ayudan a seguir. Especialmente nuestro equipo de bodas solidarias que, desde hace años, gestionan este proyecto con
                                      todo el cariño del mundo.
                                    </p>
                                    <div class="c-left">
                                        <img src="assets\base\img\volunfair\Fotos2024\montse.jpeg" width="100%" title="Montse" alt="Montse"/>
                                        <br /><br />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6" "c-right">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInRight" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-left">
                                        <h3 class="c-left c-font-uppercase c-font-bold">Javier Cascón</h3>
                                        <h4 class="c-left c-font-uppercase c-font-bold">
                                        <div class="c-left c-line-right "> </div>
                                    </div>
                                    <p class="c-left">
                                    En 2017, con 18 años, Javier creó la asociación Amaqtedu junto a Elizabeth de la Oliva. Esta organización desarrolla programas de formación artística para personas sin hogar
                                     con el objetivo de ayudarlos en su reinserción laboral. Han trabajado con más de 500 personas sin hogar durante los últimos 3 años. Con ella han recibido uno de los Premios 
                                     Startup Programme, el Premio de la Comunidad de Madrid a Jóvenes Creadores y otros premios. Además en 2021 publicó el libro "Amen sin tilde" para financiar la compra de una 
                                     casa para personas sin hogar en este 2022.
                                    </p>
                                    <div class="c-right">
                                <img src="assets\base\img\volunfair\Fotos2024\javiercascon.jpg" width="100%" title="Javier Cascón" alt="Javier Cascón" />
                            </div>
                        </div>
                    </div>
                    <br/>                               
                 <br />
             </div>   
             </div>                    
            </div>
            <!-- END: Montse y Javier Cascon -->

            <br> <br /> <br> <br /> <br> <br /> 

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Viernes 9</h2>   
                <p class="c-center" >A las <em>18:30</em> en el <em>Salón de Actos</em> podrás conocer a personas fascinantes</p>                      
            </div>

            <!-- BEGIN: Sinacio y Marta Barroso  -->
            <div class="c-content-box c-size-md">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="-100px" data-image-src="assets/base/img/volunfair/Fotos2024/Fondos/puente2.jpg">
                    <div class="container c-center">
                        <div class="row">
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <!-- BEGIN: Sinacio -->
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <br />
                                    <div>
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-right">
                                                <h3 class="c-right c-font-uppercase c-font-bold"> Sinacio</h3>
                                                <h4 class="c-right c-font-uppercase c-font-bold">
                                                <div class="c-right c-line-left "> </div>
                                            </div>
                                            <div class="col-md-4">
                                        <img src="assets\base\img\volunfair\Fotos2024\sinacio.jpg" width="100%" title="Sinacio" alt="Sinacio" />
                                    </div>
                                            <p class="c-right">                                            
                                            José Ignacio Salmerón Murciano es un humorista, actor, guionista, presentador, productor español, 
                                            pero conocido principalmente por su nombre artístico Sinacio y  por su papel como monologuista y cómico.  
                                            Sus primeros pasos desde bien joven le hicieron trabajar cada verano en lo que podía para poder 
                                            disfrutar de los veranos en Marbella. Allí, ejerció de caddy de Golf, vendedor de helados y multitud de profesiones.
                                            Fue a finales de los 80 cuando montó una agencia de publicidad que le cambió la vida. Para nosotros su humor es la forma
                                            de tender puentes entre personas, por eso viene a compartirlo con nosotros en VOLUNFAIR.                                                                                              
                                            </p>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <!-- END: Sinacio-->

                            <br /><br/><br /><br/><br /><br/>                            

                            <!-- BEGIN: Marta Barroso -->
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <br />
                                    <div>
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-right">
                                                <h3 class="c-right c-font-uppercase c-font-bold"> Marta Barroso</h3>
                                                <h4 class="c-right c-font-uppercase c-font-bold">
                                                <div class="c-right c-line-left "> </div>
                                            </div>
                                            <div class="col-md-4">
                                        <img src="assets\base\img\volunfair\Fotos2024\martabarroso.jpg" width="100%" title="Marta Barroso" alt="Marta Barroso" />
                                    </div>
                                            <p class="c-right">                                            
                                            Marta Barroso es una periodista comprometida con la verdad y la justicia social. Con una amplia experiencia en el campo 
                                            del periodismo, Marta se destaca por su incansable búsqueda de la verdad y su dedicación a informar con integridad y precisión.
                                            Además de su labor periodística, Marta es conocida por su activismo en causas sociales. Ha participado activamente en eventos
                                             benéficos, campañas de concienciación y acciones solidarias, demostrando su compromiso con mejorar la sociedad y apoyar a quienes
                                              más lo necesitan.                                                                                         
                                            </p>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <!-- END: Marta Barroso-->

                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                           </div>
                    </div>
                </div>
                    
                <br /><br/>
            </div>
            <!-- END: Sinacio y Marta Barroso -->
     
            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Y con la colaboración de:</h2>                    
            </div>

            <br />

            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <div class="col-md-5">
            </div>

            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <!-- BEGIN: PABLO  -->
            <div class="row">
                <div class="col-md-2">
                    <div class="col-md-12">
                        <div>
                            <img src="assets/base/img/volunfair/participantes/pablo-espana-falda.jpg" width="100%" title="Pablo España" alt="Pablo España" />
                        </div>
                        <div class="row c-content-media-1 wow animated fadeInRight">
                            <div class="c-center">
                                <h3 class="c-font-uppercase c-font-bold">Pablo España</h3>
                                <div>Speaker de VOLUNFAIR 2024</div>
                            </div>
                        </div>
                        <br />
                    </div>
                </div>
                
            </div>
            <!-- END: PABLO  -->
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