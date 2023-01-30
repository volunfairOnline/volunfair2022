<?php

// --- Archivo con las funciones de configuración (cabeceras, pie, ...)
include ('./scripts/config.php');

// --- Escribimos las cabeceras
escribe_cabecera();

?>

        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
             <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
             <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2023/encabezado_1.jpg)">
<                 
                <!--<div class="container">
				 
                    <div class="c-page-title c-pull-left">
                    	  <p class="c-font-uppercase c-font-bold c-font-white c-font-25 c-font-slim">Quiénes Somos</p>
                        <h4 class="c-font-white c-font-thin c-opacity-07"> Conócenos mejor </h4>
                    </div>
                </div>-->
            </div>
            
            
            <!-- BEGIN: PAGE CONTENT -->

            <!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-feedback-1 c-option-1">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">Contacta con nosotros</h3>
                                        <div class="c-line-left"></div>
                                        <p class="c-font-lowercase">Si quieres contactar con nosotros y comentarnos algo, puedes usar el siguiente formulario</p>
                                    </div>
                                    <form method="post" action="#" id="contactform">
                                        <div class="form-group">
                                            <input type="text" id="c_name" name="name" placeholder="Nombre" value="" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <input type="email" id="c_mail" name="email" placeholder="Email" value="" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <input type="tel" id="c_telefono" name="telefono" placeholder="Teléfono de contacto" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group"1>
                                            <textarea rows="8" id="c_msg" placeholder="Mensaje" rows="7" name="message" class="form-control c-theme c-square input-lg"></textarea>
                                        </div>
                                        <input name="send" onclick="cargaSendMail()" type="button" value="Enviar" id="c_enviar"/></input>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                            	  <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">Para hablar con nosotros</h3>
                                        <div class="c-line-left"></div>
                                  <p class="c-font-lowercase">Si eres ONG: 629 76 06 00 (Pablo) <br/>
                                                              Si eres medio de comunicación: 649 72 85 14 (Isa) <br/>
                                                              Para cualquier gestión: 655 53 93 29 (Paula) o 616 20 92 81 (Jorge)</p>
                                </div>
                                <div class="c-content-media-2-slider" data-slider="owl">
                                
                                <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-navigation-dots="true" data-auto-play="4000" data-rtl="false">
                                    <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/stand/foto7.jpg); min-height: 380px;">
                                    </div>

                                    <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/stand/foto9.jpg); min-height: 380px;">
                                    </div>

                                    <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/stand/foto2.jpg); min-height: 380px;">
                                    </div>

                                    <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/stand/foto8.jpg); min-height: 380px;">
                                    </div>

                                    <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/stand/foto5.jpg); min-height: 380px;">
                                    </div>

                                    <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/stand/foto3.jpg); min-height: 380px;">
                                    </div>

                                    <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/stand/foto6.jpg); min-height: 380px;">
                                    </div>

                                    <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/stand/foto1.jpg); min-height: 380px;">
                                    </div>

                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/CONTACT/FEEDBACK-1 -->
            
           <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
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
            
            

            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->

        <!-- PARA PODER ENVIAR EL CORREO -->
        <script src="./scripts/correo.js" type="text/javascript"></script>
        
<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>