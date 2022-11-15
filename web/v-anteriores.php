<?php

// --- Archivo con las funciones de configuración (cabeceras, pie, ...)
include ('./scripts/config.php');

// --- Escribimos las cabeceras
escribe_cabecera();

?>

        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2022/encabezado_4.png)">
>    
            <!--<div class="container">
				 
                    <div class="c-page-title c-pull-left">
                    	  <p class="c-font-uppercase c-font-bold c-font-white c-font-25 c-font-slim">Quiénes Somos</p>
                        <h4 class="c-font-white c-font-thin c-opacity-07"> Conócenos mejor </h4>
                    </div>
                </div>-->
                <!-- en 2019 se puso <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="margin-top: 50px; opacity: 0;">
            </div>-->
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			
            <!-- BEGIN: PAGE CONTENT -->
			
			<!-- AÑOS ANTERIORES -->
			
			<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">Ediciones Anteriores</h3>
					<div class="c-line-center c-theme-bg"></div>
				</div>
			</div>
			
			<div class="container" >
				
				<?php
				
				// --- Matriz con los años (no poner coma tras cada último corchete porque da error)
				// --- Guardar la foto en assets/base/img/volunfair/anteriores/
				/*$quien_vino = [
				
					"2016" => [
							["nombre" => "Enhamed Enhamed", 	"foto" => "EnhamedEnhamed.jpg"],
							["nombre" => "Pepe Ruiz", 			"foto" => "PepeRuiz.jpg"],
							["nombre" => "Daniel Alfaro", 		"foto" => "DanielAlfaro.jpg"],
							["nombre" => "Elisa Albella", 		"foto" => "ElisaAlbella.jpg"]
						],
						
					"2017" => [
							["nombre" => "Jacobo Parages", 		"foto" => "JacoboParages.jpg"],
							["nombre" => "Javi Nieves", 		"foto" => "JaviNieves.jpg"],
							["nombre" => "Álvaro Pérez-Pla",	"foto" => "AlvaroPerezPla.jpg"],
							["nombre" => "Rolando", 			"foto" => "Rolando.jpg"],
							["nombre" => "Belén Llana", 		"foto" => "BelenLlana.jpg"]
						],
						
					"2018" => [
							["nombre" => "Paco Arango", 		"foto" => "PacoArango.jpg"],
							["nombre" => "Nico Merino", 		"foto" => "NicoMerino.jpg"],
							["nombre" => "Pablo Urbano",		"foto" => "PabloUrbano.jpg"],
							["nombre" => "Alberto Cabanes", 	"foto" => "AlbertoCabanes.jpg"],
							["nombre" => "Pablo España", 		"foto" => "PabloEspana.jpg"]
						],
					"2019" => [
							["nombre" => "Xavi Torres",		 				"foto" => "XaviTorres.jpg"],
							["nombre" => "Vicente del Bosque", 				"foto" => "VicenteDelBosque.jpg"],
							["nombre" => "Gema Hassen-Bey",					"foto" => "GemaHassenBey.jpg"],
							["nombre" => "José Enrique Fdez del Campo", 	"foto" => "JoseEnriqueFdez.jpg"],
							["nombre" => "Pablo España", 					"foto" => "PabloEspana.jpg"]
						]						
					];
				*/	
				// --- Función que escribe los ponentes con formato
				//escribe_ponentes($quien_vino);
				
				?>
				
			</div>

            <section id="timeline">
                
                <div class="tl-item3" onclick="location.href='v-ponentes16';">
                    
                    <div class="tl-bg" style="background-image: url(./assets/base/img/volunfair/anteriores/avionaco2.jpg")"></div>
                    
                    <div class="tl-year">
                        <p class="f2 heading--sanSerif"><a href="v-ponentes16.php">2016</a></p>
                    </div>

                    <div class="tl-content">
                        Primera edición de VOLUNFAIR <br />
                        <strong>Jefes:</strong> Pilar Aldama y Daniel Alfaro
                    </div>
                </div>

                <div class="tl-item3" onclick="location.href='v-ponentes17';">
                    
                    <div class="tl-bg" style="background-image: url(./assets/base/img/volunfair/anteriores/rowing3.jpg)"></div>
                    
                    <div class="tl-year">
                    <p class="f2 heading--sanSerif"><a href="v-ponentes17.php">2017</a></p>
                    </div>

                    <div class="tl-content">
                        <strong>Lema:</strong> "No te quedes parado, haz voluntariado" <br />
                        <strong>Jefes:</strong> Loreto Albiñana y José María Orejana
                    </div>

                </div>

                <div class="tl-item3" onclick="location.href='v-ponentes18';">
                    
                    <div class="tl-bg" style="background-image: url(./assets/base/img/volunfair/anteriores/cuadrofumao3.jpg)"></div>
                    
                    <div class="tl-year">
                    <p class="f2 heading--sanSerif"><a href="v-ponentes18.php">2018</a></p>
                    </div>

                    <div class="tl-content">
                        <strong>Lema:</strong> "Emprende el cambio" <br />
                        <strong>Jefes:</strong> Bea Aviñó y Andrés Otero
                    </div>

                </div>
            </section>

                <section id="timeline">

                <div class="tl-item3" onclick="location.href='v-ponentes19';">
                    
                <div class="tl-bg" style="background-image: url(./assets/base/img/volunfair/anteriores/estrellas.jpg)"></div>
                    
                    <div class="tl-year">
                    <p class="f2 heading--sanSerif"><a href="v-ponentes19.php">2019</a></p>
                    </div>

                    <div class="tl-content">
                        <strong>Lema:</strong> "¿Sigues queriendo ser astronauta? #QueNadieTeLoImpida" <br />
                        <strong>Jefes:</strong> María Zavala y José Santa Úrsula
                    </div>

                </div>

                <div class="tl-item3" onclick="location.href='v-ponentes20';">
                    
                    <div class="tl-bg" style="background-image: url(./assets/base/img/volunfair/anteriores/mar13.jpeg)"></div>
                    
                    <div class="tl-year">
                    <p class="f2 heading--sanSerif"><a href="v-ponentes20.php">2020</a></p>
                    </div>

                    <div class="tl-content">
                        <strong>Lema:</strong> "No hay mar sin gotas" <br />
                        <strong>Jefes:</strong> Maca Álvarez y Eduardo Amador
                    </div>

                </div>

                <div class="tl-item3" onclick="location.href='v-ponentes21';">
                    
                    <div class="tl-bg" style="background-image: url(./assets/base/img/volunfair/anteriores/acera.jpg)"></div>
                    
                    <div class="tl-year">
                    <p class="f2 heading--sanSerif"><a href="v-ponentes21.php">2021</a></p>
                    </div>

                    <div class="tl-content">
                        <strong>Lema:</strong> "Desgasta tus zapatillas" <br />
                        <strong>Jefes:</strong> Ignacio García-Guerra y María Lanzuela
                    </div>

                </div>

                <div class="tl-item3" onclick="location.href='v-ponentes22';">
                    
                    <div class="tl-bg" style="background-image: url(./assets/base/img/volunfair/anteriores/ninos22.jpg)"></div>
                    
                    <div class="tl-year">
                    <p class="f2 heading--sanSerif"><a href="v-ponentes21.php">2022</a></p>
                    </div>

                    <div class="tl-content">
                        <strong>Lema:</strong> "En lo Ordinario está lo Extraordinario" <br />
                        <strong>Jefes:</strong> Chema Seral y María López
                    </div>

                </div>


            </section>



            <!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-6-1 -->
            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="container">
                    <div class="c-content-blog-post-card-1-slider" data-slider="owl">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Testimonio de los participantes</h3>
                            <div class="c-line-center c-theme-bg"></div>
                            
                        </div>
                        
                        <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="3" data-slide-speed="8000" data-rtl="false">
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Es muy gratificante dar algo que nunca más vas a volver a tener, tu tiempo, sin recibir nada a cambio. O eso pensamos... <br/><br/><br/><br/>
                                    	</div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Ana</h4>
                                            <p class="c-position c-font-bold">Estudiante de Industriales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content">VOLUNFAIR es el deseo de despertar en los jóvenes el deseo de ayudar, de darse a otros incondicionalmente.  <br/><br/><br/><br/>
                                    	</div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Ignacio</h4>
                                            <p class="c-position c-font-bold">Estudiante de Organización Industrial</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Es muy rápido y fácil encontrar el voluntariado que buscas, tienes más de sesenta stands y en el centro de Madrid. Es una labor muy bonita. <br/><br/><br/><br/>
                                    	</div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Belén</h4>
                                            <p class="c-position c-font-bold">Estudiante de Magisterio y Psicología</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Siempre he sentido que mi vida era algo más que estudiar y estar en tu forma de confort. Por ello fui a VOLUNFAIR y ahí encontré el voluntariado que me cambió la vida <br/><br/><br/>
                                    	</div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Jaime</h4>
                                            <p class="c-position c-font-bold">Estudiante de Historia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content">Impresiona ver a tanta gente que saca cualquier hueco en su agenda para darse a los demás incondicionalmente y montar esta feria para facilitar el voluntariado a los demás.  <br/><br/><br/>
                                    	</div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Gonzalo</h4>
                                            <p class="c-position c-font-bold">Estudiante de Económicas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default ">
                                    <div class="c-content"> Me llamó la atención que la gente se diese tanto. Cuando les cuentas algo de voluntariado en seguida quieren participar, quieren ayudar… Y eso me impactó bastante. <br/><br/><br/>
                                    	</div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Bea</h4>
                                            <p class="c-position c-font-bold">Estudiante de Industriales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Tras haber visto lo que es VOLUNFAIR aquí y el efecto que causa participar en algo más grande que tú repetiría seguro. VOLUNFAIR es una oportunidad de poner a disposición cualquier tipo de ayuda que puedas dar.<br/><br/> </div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Pablo</h4>
                                            <p class="c-position c-font-bold">Estudiante de Minas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Es verdad que hay muchas ONGs en España pero no es tan fácil dar con ellas. Muchos amigos que han estado buscando voluntariado no sabían por dónde empezar. Esta es la oportunidad de encontrarlo fácil, a nuestro alcance y en la propia universidad.</div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Ana</h4>
                                            <p class="c-position c-font-bold">Estudiante de Filosofía</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Para mi VOLUNFAIR fue la oportunidad de conocer el voluntariado internacional. Estamos acostumbrados a ver voluntariados puntuales en Madrid pero no estamos habituados a irnos a África u otros sitios. Fue una impresión muy cercana.</div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Álvaro</h4>
                                            <p class="c-position c-font-bold">Estudiante de Ingeniería de la energía</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Pienso que no todo es estudiar, que viene bien tener la cabeza en otras cosas y ésta es la oportunidad perfecta para desahogarte un poco y ver cosas interesantes.<br/><br/><br/></div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Enrique</h4>
                                            <p class="c-position c-font-bold">Estudiante de Industriales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> He estado en muchas ferias universitarias y se puede decir que VOLUNFAIR es algo único. No sólo por la idea de una feria de voluntariado sino por todo el bien que se empieza a encauzar durante esos días.<br/><br/></div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Blanca</h4>
                                            <p class="c-position c-font-bold">Estudiante de Derecho</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> VOLUNFAIR es un evento curioso. En la sociedad del “hashtag solidario” aparece una oportunidad de que la ayuda no se quede en 140 caracteres.<br/><br/><br/><br/></div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Javier</h4>
                                            <p class="c-position c-font-bold">Estudiante de Periodismo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Fue increíble tener a tanta gente en nuestra escuela por una causa buena y el hecho de poder llamar la atención a nuestros compañeros sobre estas causas que merecen tanto la pena.<br/><br/><br/></div>
                                    <div class="c-person">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Adrián</h4>
                                            <p class="c-position c-font-bold">Estudiante de Industriales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-6-1 -->
            
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->

<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>