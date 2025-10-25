
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
                <!--<br /><br /><br /><br />
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets\base\img\volunfair\Fotos2024/Fondos\puente_8.png">
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
        

                <div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">LA EDICIÓN 2025</h3>
                    <div class="c-line-center c-theme-bg"></div>
                    <!--<p class="c-center" >El equipo de VOLUNFAIR 2025 tiene el placer de invitarles a la <b>X edición de VOLUNFAIR</b>, que viene pisando fuerte con 3 días de feria. <br /><b>El martes 11, miércoles 12 y jueves 13 </b>de febrero podrá conocer a todas las entidades sociales que nos acompañan este año.
                    <br /> Además, contamos con unos ponentes de mucho nivel, que compartirán un buen rato con nosotros en la <br /> <b>La Escuela Técnica Superior de Ingenieros Industriales de la UPM (C/ José Gutiérrez Abascal)</b>. ¡Que no te lo cuenten!</p>  -->
					<p class="c-center" >La <b>décima edición de VOLUNFAIR</b> fue increíble. ¡Gracias a todos los que compartistéis con nosotros estos días! Si quieres volver a revivir estos momentos los vídeos estarán disponibles próximamente.</p>  
					
				</div>
                
			</div>


                 <!-- PONENTES ACTUALES-->
             
            <br /><br />

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase  c-font-bold">Martes 11</h2>   
                <p class="c-center" >Acto inaugural de VOLUNFAIR 2025 a las <b><em>12:25</em></b> en el <em>Salón de Actos</em></p>                      
            </div>


            <!-- BEGIN: Luis de la Fuente -->  
            
            <div class="c-content-box c-size-md c-bg-white">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-right">
                                        <h3 class="c-right c-font-uppercase c-font-bold">Luis de la Fuente</h3>
                                        <h4 class="c-right c-font-uppercase c-font-bold">
                                        <div class="c-right c-line-left "> </div>
                                    </div>
                                    
                                    <div class="c-left">
                                        <img src="assets\base\img\volunfair\Fotos2025\luisdelafuente.jpg" width="100%" title="Luia de la Fuente" alt="Luis de la Fuente"/>
                                        <br /><br />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6" "c-right">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInRight" style="min-height: 300px;">                                  
                                    <p class="c-left">
                                    <b>Luis de la Fuente</b> es un referente no solo en el mundo del <b>fútbol</b>, sino también en el ámbito social. Como entrenador, ha guiado a equipos de élite, 
                                    transmitiendo valores como el <b>esfuerzo</b>, la <b>disciplina</b> y el <b>trabajo en equipo</b>. Sin embargo, su impacto va más allá del deporte. A través de la <b>asociación Amaqtedu</b>, 
                                    impulsa programas de formación artística para <b>personas sin hogar</b>, ayudándolas en su reinserción laboral y brindándoles nuevas oportunidades. <br>Gracias a esta iniciativa,
                                    ha conseguido transformar la vida de cientos de personas en situación de vulnerabilidad. No te pierdas la charla de Luis, donde hablará sobre liderazgo, superación y 
                                    la importancia de la <b>solidaridad</b>. ¡¡Desde el equipo de VOLUNFAIR le esperamos con gran ilusión y te invitamos para compartirla también contigo!!
                                    </p>
    
                        </div>
                    </div>
                    <br/>                               
                 <br />
             </div>   
             </div>                    
            </div>
            <!-- END: Luis de la Fuente -->

            <br></br><br></br>

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Miércoles 12</h2>   
                <p class="c-center" >A las <em>13:30</em> en el <em>Salón de Actos</em> podrás conocer a dos personas fascinantes</p>                      
            </div>

            <!-- BEGIN: Lóla Sánchez y Mariana de Ugarte  -->
            
            <div class="c-content-box c-size-md">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="-100px" >
                    <div class="container c-center">

                                <div class="row">
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <!-- BEGIN: Lola Sánchez -->
                            
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <br />
                                    <div>
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-right">
                                                <h3 class="c-right c-font-uppercase c-font-bold"> Lola Sánchez</h3>
                                                <h4 class="c-right c-font-uppercase c-font-bold">
                                                <div class="c-right c-line-left "> </div>
                                            </div>
                                            <div class="col-md-4">
                                        <img src="assets\base\img\volunfair\Fotos2025\lolasanchez.jpeg" width="100%" title="Lola Sánchez" alt="Lola Sánchez" />
                                    </div>
                                            <p class="c-right">                                            
                                            <b>Lóla Sánchez</b>, conocida en Instagram como <b>@abrazandoelplanb</b>, es madre de cinco hijos — dos de ellos adoptados con síndrome de Down 
                                            — con un nuevo hijo adoptivo en camino. En su paso por VOLUNFAIR 2025, compartió cómo lo que empezó como un "Plan B" se convirtió en una historia
                                             de amor, fe e inclusión. Con su testimonio auténtico y lleno de esperanza, recordó a todos los asistentes que lo inesperado puede ser el mayor regalo,
                                              y que la diversidad familiar no solo se abraza, sino que transforma.
                                            </p>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <!-- END: Lola Sánchez-->                        

                            <!-- BEGIN: Mariana de Ugarte -->
                            
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <br />
                                    <div>
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-right">
                                                <h3 class="c-right c-font-uppercase c-font-bold"> Mariana de Ugarte</h3>
                                                <h4 class="c-right c-font-uppercase c-font-bold">
                                                <div class="c-right c-line-left "> </div>
                                            </div>
                                            <div class="col-md-4">
                                        <img src="assets\base\img\volunfair\Fotos2025\marianadeugarte.jpg" width="100%" title="Mariana de Ugarte" alt="Mariana de Ugarte" />
                                    </div>
                                            <p class="c-right">                                            
                                            <b>Mariana de Ugarte</b> es una influencer y escritora española que tiene dos hijos —Marianita y Jaime—, ambos con síndrome de Down. Comparte su vida en redes sociales, para normalizar y visibilizar el síndrome de Down a través de su experiencia diaria. Su primer libro, publicado en 2022, se titula 2x21: La felicidad no entiende de cromosomas.
                                            Este libro autobiográfico narra con sencillez y realismo su camino junto a sus dos hijos con síndrome de Down: los retos, las emociones, y sobre todo la alegría y plenitud que han traído a su vida.
                                            Mariana de Ugarte ha sido una de las voces más inspiradoras de VOLUNFAIR 2025, ofreciéndonos una charla llena de honestidad, fuerza y esperanza.                                                                            
                                            </p>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                        
                            
                            <!-- END: Mariana de Ugarte-->

                            <br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
                            <br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>


                            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Jueves 13</h2>   
                <p class="c-center" >A las <em>13:30</em> en el <em>Salón de Actos</em> conoce a nuestros ponentes</p>                      
            </div>


                            <!-- BEGIN:  Carlos Bobillo y Pablo Delgado de la Serna  -->
            
            <div class="c-content-box c-size-md">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="-100px" ">
                    <div class="container c-center">
                            
                                <div class="row">
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <!-- BEGIN: Pablo Delgado de la Serna -->
                            
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <br />
                                    <div>
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-right">
                                                <h3 class="c-right c-font-uppercase c-font-bold"> Carlos Bobillo</h3>
                                                <h4 class="c-right c-font-uppercase c-font-bold">
                                                <div class="c-right c-line-left "> </div>
                                            </div>
                                            <div class="col-md-4" >
                                        <img src="assets\base\img\volunfair\Fotos2025\carlosbobillo.jpg" width="100%" title="Carlos Bobillo" alt="Carlos Bobillo" />
                                    </div>
                                            <p class="c-right">                                            
                                            <b>Carlos Bobillo</b> es el fundador de <b>@ongasu</b>, una organización sin ánimo de lucro que trabaja para mejorar la calidad de vida de <b>personas en situación de vulnerabilidad</b>.
                                            Desde su creación, ha desarrollado programas de asistencia social, educación y salud que han beneficiado a cientos de personas. Gracias a su trabajo, ha recibido múltiples 
                                            reconocimientos y continúa expandiendo su impacto con nuevos proyectos solidarios. Acompáñanos a descubrir como la solidaridad y el compromiso pueden transformar vidas.                                                                                              
                                            </p>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <!-- END: Pablo Delgado de la Serna-->                        

                            <!-- BEGIN: Carlos Bobillo -->
                            
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <br />
                                    <div>
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-right">
                                                <h3 class="c-right c-font-uppercase c-font-bold"> Pablo Delgado de la Serna</h3>
                                                <h4 class="c-right c-font-uppercase c-font-bold">
                                                <div class="c-right c-line-left "> </div>
                                            </div>
                                            <div class="col-md-4">
                                        <img src="assets\base\img\volunfair\Fotos2025\pablodelgado.jpeg" width="100%" title="Pablo Delgado de la Serna" alt="Pablo Delgado de la Serna" />
                                    </div>
                                            <p class="c-right">                                            
                                            <b>Pablo Delgado de la Serna</b>, conocido en redes como <b>@untrasplantado</b>, ha utilizado su experiencia como paciente trasplantado para crear conciencia sobre 
                                            la <b>donación de órganos</b> y la <b>importancia de la salud</b>. Ha trabajado con asociaciones médicas y ha participado en campañas de sensibilización a nivel nacional. 
                                            Su testimonio ha impactado a miles de personas, promoviendo la solidaridad y la importancia de la ciencia médica. ¿Te vas a perder escuchar su testimonio en 
                                            persona?                                                                                         
                                            </p>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                        
                            
                            <!-- END: Carlos Bobillo -->
                            
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
                        <img src="assets/base/img/volunfair/Fotos2025/JaviGonzalez.jpg" width="100%" title="Javier González" alt="Javier González" />
                    </div>
                    <div class="row c-content-media-1 wow animated fadeInRight">
                        <div class="c-center">
                            <h3 class="c-font-uppercase c-font-bold">Javier González</h3>
                            <div>Speaker de VOLUNFAIR 2025</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-2">
                    <div>
                        <img src="assets/base/img/volunfair/Fotos2025/PabloEspana.jpg" width="100%" title="Pablo España" alt="Pablo España" />
                    </div>
                    <div class="row c-content-media-1 wow animated fadeInRight">
                        <div class="c-center">
                            <h3 class="c-font-uppercase c-font-bold">Pablo España</h3>
                            <div>Speaker de VOLUNFAIR 2025</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-2">
                    <div>
                        <img src="assets/base/img/volunfair/Fotos2025/JorgeGS.jpg" width="100%" title="Jorge García" alt="Jorge García" />
                    </div>
                    <div class="row c-content-media-1 wow animated fadeInRight">
                        <div class="c-center">
                            <h3 class="c-font-uppercase c-font-bold">Jorge García Santamaría</h3>
                            <div>Speaker de VOLUNFAIR 2025</div>
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