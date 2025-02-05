
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
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2024/Fondos/puente_8.jpg)">
<  
        </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
            <div style="text-align:left">
            <br>
                    </div>
            <div style="text-align:right">
                <div class="col-md-10 wow animated bounceIn">
                    <h2 class="c-right c-font-uppercase c-font-bold">
                    <a href="v-ponentes23"><img src="./assets/base/img/volunfair/galeria/FLECHA.jpg" /><br/>2023</a> 
                        </h2>
                </div>
            </div>

            <br /><br />
        <!-- BEGIN: TITULO -->
        <div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">VOLUNFAIR 2024</h3>
                    <div class="c-line-center c-theme-bg"></div> 
                    <p class="c-font-lowercase" style="text-align: justify;">En 2023 parecía que nos habíamos pasado el juego, así que, al principio, no supimos cómo empezar la novena edición. 
                        Pero pronto la genialidad del equipazo dio paso a unos meses de preparación de algo no solo muy grande sino también, y quizás, 
                        ante todo, muy divertido. Al grito de <b>#PuenteEnPie</b>., nuestros jefazos, Blanca y Diego, fueron los arquitectos de una obra cuya
                         teja final fue un concierto en el que todo un salón de actos lleno gritó que <b>entregarse a los demás merece la pena</b>. </p>
                    <p class="c-font-lowercase" style="text-align: justify;">VOLUNFAIR 2024 no tuvo las dificultades monetarias de los primeros años, ni la falta de mano de obra cuando más hacía falta. Pero tuvo un 
                        equipo entregado al 100%, dispuesto a parar a la gente por la calle para contarle lo que es VOLUNFAIR e invitarle a cambiar su vida. 
                        Tuvo a <b>Marta Barroso</b> como ponente sorpresa de la edición. Tuvo a varias radios acudiendo en directo y apariciones en un podcast. 
                        Y, por primera vez, tuvo cuatro pancartas gigantes anunciando la feria en el <b>Metro de Madrid</b>, porque lo que tenemos claro, nueve 
                        años después, es que sigue habiendo mucha gente ahí fuera queriendo cambiar su vida y la de los demás pero que no saben cómo hacerlo.</p>
                        <br />
				</div>
                
        </div>
        <!--- END: TÍTULO -->

            <div class="c-bg-white c-content-media-1 c-bordered">
                            <div class="row c-center wow animated fadeInUp">
                                <iframe width="530" height="315" src="https://www.youtube.com/embed/_a5-YCQnTu0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<iframe width="530" height="315" src="https://www.youtube.com/embed/XCDD0jHUA-c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
                            
                        </div>
            <!--- END: TÍTULO -->

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
             
            <!-- BLOQUE EQUIPO Y JEFES -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="col-md-5">
                        <img src="assets\base\img\volunfair\Fotos2024\jefazos.jpg" alt="Blanca y Diego" title="Blanca y Diego" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInLeft" >
                            Nuestros jefes: Blanca Verdes y Diego Álvarez
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="assets\base\img\volunfair\Fotos2024\fotofondo.jpg" alt="Equipo 2024" title="Equipo 2024" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInRight" >
                            El equipo VOLUNFAIR 2024
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: BLOQUE EQUIPO Y JEFES -->

            <!-- EQUIPO ED ANTERIORES -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-feedback-1 c-option-1">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">EQUIPO EDICIÓN 2024</h3>
                                        <div class="c-line-left"></div>
                                        <p class="c-font-lowercase">CENA DE BIENVENIDA <br>
                                        </br>En Octubre dimos comienzo a este emocionante viaje con una cena de bienvenida llena de juegos, risas y una energía increíble. 
                                                    Los miembros de VOLUNFAIR 2024 nos reunimos como una gran familia para dar el pistoletazo de salida a esta maravillosa experiencia.
                                                    Más que una cena fue el comienzo de nuevas amistades, de risas y la consolidacion de un grupo con un fin común: entregarse a los 
                                                    demás y disfrutar poniéndonos "manos a la obra".</p>
                                    </div>
                                    <p class="c-font-lowercase">
                                    </p>
                                </div>
                                <div class="c-content-media-2-slider" >

                                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/CzeNyy2t-Wv/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/CkviZruDtpX/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/CkviZruDtpX/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida de VOLUNFAIR (@volunfair)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                                    </div>  

                                
                            </div>
                            
                            <div class="col-md-6">
                                <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold"> #puentenpie</h3>
                                        <div class="c-line-left"></div>
                                        <p class="c-font-lowercase">TORNEO DE PÁDEL <br>
                                        </br>Sumérgete en la emoción del torneo de pádel de Volunfair! Recientemente, vivimos una jornada espectacular con partidos emocionantes, buen rollo 
                                        y premios que coronaron una experiencia maravillosa. La pista se llenó de risas y emoción, demostrando que en Volunfair, la diversión está en cada set. 
                                        La pasión por el pádel se mezcló con las ganas de seguir creando este  gran grupo y la alegría de disfrutar en cada juego. ¡Estamos listos para seguir 
                                        construyendo momentos inolvidables juntos!</p>
                                    </div>
                                    <p class="c-font-lowercase">
                                    </p>
                                </div>
                                <div class="c-content-media-2-slider" data-slider="owl">
                                
                                    <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-navigation-dots="true" data-auto-play="4000" data-rtl="false">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/padel1.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/padel2.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/padel3.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/padel4.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/padel5.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/padel6.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/padel7.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/padel8.jpeg); min-height: 380px;">
                                        </div>
                                    </div>
                                    <br> </br>
                </div>
            </div>
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-feedback-1 c-option-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold"> </h3>
                                        <p class="c-font-lowercase">RECOGIDA DE ALIMENTOS <br>
                                        </br> Los días 11 y 12 de diciembre nos lanzamos de cabeza a recoger alimentos con el equipo de Volunfair: comida, productos de higiene, 
                                        cosas para los peques. En esos dos días, nos dimos cuenta de que Volunfair no es solo una feria de voluntariados, es el hecho de ponerse <b>manos a la obra</b>
                                         y de darlo todo día tras día. La gente se volcó con nosotros y esto es más que una feria, es el poder de hacer algo grande juntos.</p>
                                    </div>
                                    <p class="c-font-lowercase">
                                    </p>
                                </div>
                                <div class="c-content-media-2-slider wow animated fadeInRight" data-slider="owl">
                                
                                    <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-navigation-dots="true" data-auto-play="4000" data-rtl="false">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/recogida2.jpg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/recogida3.jpg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/recogida5.jpg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/recogida4.jpg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/recogida6.jpg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2024/equipo/recogida1.jpg); min-height: 380px;">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- FIN: EQUIPO ED ANTERIORES -->

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