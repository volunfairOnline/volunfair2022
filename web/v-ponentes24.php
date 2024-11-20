
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
                <div class="col-md-2 wow animated bounceIn">
                    <h2 class="c-right c-font-uppercase c-font-bold">
                    <a href="v-ponentes22"><img src="./assets/base/img/volunfair/galeria/FLECHA2.jpg" /><br/>2022</a> 
                        </h2>
                </div>

            </div>

            <!-- BEGIN: TITULO -->
			<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font bold">VOLUNFAIR 2024</h3>
                    <p class="c-center" > La octava edición <b>VOLUNFAIR</b> en febrero de 2024 no se quedó atrás. La Magia inundaba los pasillos de la escuela desde el minuto 1.
                    acompañados de ponentes como Pablo España, Miguel Ángel Blanco y Gaspar González que no dejaron a ninguno indiferente. El broche final de la feria fue un sorprendente espectáculo de magia
                    de la mano del mago Arreytu. Juntos aprendimos que <b>#LaMagiaDeEntregarse</b> es <b>#DéjateSorprender</b>.
                     </p>
					
				</div>
                
			</div>
            <!--- END: TÍTULO -->

            <br /><br />

            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase  c-font-bold">Miércoles 15 de febrero: Charla con Pablo España</h2>   
                <p class="c-center" >Acto inaugural con dos ejemplazos extraordinarios en el mundo ordinario</p>             
            </div>

           <!-- BEGIN: Pablo España-->
           <div class="c-content-box c-size-md c-bg-white">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-image-src="assets/base/img/volunfair/Fotos2023/encabezado_1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                    <div class="c-content-title-3 c-theme-border c-right">
                                        <h3 class="c-right c-font-uppercase c-font-bold">Pablo España</h3>
                                        <div class="c-right c-line-left "> </div>
                                    </div>
                                    <p class="c-right">
                                    Hasta ahora Pablo España nos había acompañado en esta aventura llamada Volunfair como ponente, esta vez le invitamos a charlar al salón de nuestra casa. 
                                    Desde una adolescencia rebelde (como todas) a un padre de familia que nos invita a comprarnos un despertador y nos enseña sus 10 indispensables que ha 
                                    aprendido a lo largo de su vida que le hubiese gustado saber antes.

                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 animated wow fadeInRight">

                                <!--<div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2022/joaquin.jpeg); /*min-height: 300px;*/">
                                </div> -->
                                <img src="assets/base/img/volunfair/anteriores/PabloEspana.jpg" width="100%" title="Pablo España" alt="Pablo España"/>
                                <br /><br />
                            </div>
                        </div>
                    </div>
                    <br/>
                    <!-- <div class="container">
                        <div class="row">
                            <div class="col-md-4 animated wow fadeInLeft">

                                <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/participantes/adol-essence.jpeg); /*min-height: 300px;*/">
                                </div>
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
                    </div> -->
                               
                    <br />
                </div>

                
                                    
            </div>
            <!-- END: Pablo España-->
             
            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Jueves 16 de febrero</h2>   
                <p class="c-center c-font-bold" > Q&A con Miguel Ángel Valero y Gaspar González</p>                      
            </div>

            <!-- BEGIN  -->
            <div class="c-content-box c-size-md">
                <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="-100px" data-image-src="assets/base/img/volunfair/Fotos2023/encabezado_1.jpg">
                    <div class="container c-center">
                        <div class="row">
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <!-- BEGIN: Miguel Ángel -->
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="row c-center wow animated bounceInUp">
                                        <img src="assets/base/img/volunfair/anteriores/2023/MiguelAngel.jpg" width="100%" title="Miguel Ángel Valero" alt="Miguel Ángel Valerp" />
                                    </div>
                                    <br />
                                    <div class="row wow animated bounceInDown">
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-right">
                                                <h3 class="c-right c-font-uppercase c-font-bold"> Miguel Ángel Valero</h3>
                                                <h4 class="c-right c-font-uppercase c-font-bold">
                                                </h4> 
                                                <div class="c-right c-line-left "> </div>
                                            </div>
                                            <p class="c-right">                                            
                                            Igual os suena su cara de algo... ¡así es! Miguel Ángel salto a la fama de muy pequeño con la famosa serie verano azul. Ahora vive una vida
                                            alejada de las series y los focos, compartiendo con nosotros sus experiencias en voluntariados desde su juventud. Cuando era estudiante de Teleco,
                                            se marchó a Panamá de misiones, donde descubrió que el voluntariado no es cambiar el mundo, sino hacer que el otro se sienta querido. Y aunque la 
                                            experiencia la encantó, y repitió, también le sirvió para descubrir que esa misión no necesita grandes desplazamientos.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Miguel Ángel -->
                            <!-- BEGIN: Gaspar González -->
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="row c-center wow animated bounceInUp">
                                        <img src="assets/base/img/volunfair/anteriores/2023/GasparGonzalez.jpg" width="100%" title="Gaspar González" alt="Gaspar González" />
                                    </div>
                                    <br />
                                    <div class="row wow animated bounceInDown">
                                        <div class="c-content-media-1 c-bordered c-background-gray wow animated fadeInLeft" style="min-height: 300px;">                                  
                                            <div class="c-content-title-3 c-theme-border c-left">
                                                <div class="c-left c-line-right "> </div>
                                                <h3 class="c-left c-font-uppercase c-font-bold">Gaspar González</h3>
                                                <h4 class="c-left c-font-uppercase c-font-bold">
                                                </h4>
                                            </div>
                                            <p class="c-right">
                                            «Somos jóvenes normales que queremos cambiar las cosas». Gaspar González Palenzuela es el fundador, junto a unos amigos, de la ONG Asociación Solidaria Universitaria ASU.
                                            Gaspar nos invitó a disfrutar de la experiencia del voluntariado como lo hacen él y tantos jóvenes en España. Jóvenes dispuestos a ayudar en lo que haga falta y ofrecer 
                                            su tiempo y su esfuerzo por los demás.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Gaspar Gonzalez -->
                            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                            <div class="col-md-2">
                            </div>
                            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                           </div>
                    </div>
                </div>
                    
                <br /><br/>
            </div>
            <!-- END: Miguel Angel & Gaspar -->

             <!-- BLOQUE EQUIPO Y JEFES -->
			<div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="col-md-5">
                        <img src="assets\base\img\volunfair\Fotos2023/jefazos.jpeg" alt="Paula y Jorge" title="Paula y Jorge" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInLeft" >
                            Nuestros jefes: Paula García y Jorge García
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="assets/base/img/volunfair/Fotos2023/equipazo.jpeg" alt="Equipo 2023" title="Equipo 2023" class="animated wow swing" width="100%" />
                        <div class="c-content-media-1 c-bordered c-center wow animated fadeInRight" >
                            El equipo VOLUNFAIR 2024
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: BLOQUE EQUIPO Y JEFES -->
            <div class="parallax-window" data-parallax="scroll" data-bleed="15" data-speed="0.2" data-z-index="0" data-yPos="500px" data-image-src="assets/base/img/volunfair/mares/mar13.jpeg">
                <div class="container">
                    <div class="col-md-12 c-content-box c-size-md c-bordered">
                        <div class="c-bg-white c-content-media-1 c-bordered">
                            <div class="col-md-12">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">PONENCIAS</h3>
                                </div>
                            </div>
                            <div class="solomediano1">
                              <div class="row c-center">
                                    <iframe width="500" height="315" src="https://www.youtube.com/embed/R-qtKocqOf8" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <iframe width="500" height="315" src="https://www.youtube.com/embed/ftN57A9l6Ts" frameborder="0" allow="accelerometer;encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="row c-center">
                                    <iframe width="500" height="315" src="https://www.youtube.com/embed/mJtBcbZE6LY" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                </div>
                    </div>                         
                </div>
            </div>    
           

            <br />

            <!-- EQUIPO 2023 -->
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
                                    </div>
                                    <p class="c-font-lowercase">
                                    </p>
                                </div>
                                <div class="c-content-media-2-slider wow animated fadeInRight" >

                                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/CkviZruDtpX/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/CkviZruDtpX/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/CkviZruDtpX/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida de VOLUNFAIR (@volunfair)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                                    </div>  

                                
                            </div>
                            
                            <div class="col-md-6">
                                <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold"> #déjatesorprender</h3>
                                        <div class="c-line-left"></div>
                                        <p class="c-font-lowercase">TORNEO DE PÁDEL <br>
                                        </br>En VOLUNFAIR no solo movemos el corazón... también las piernas! Pudimos disfrutar un día entero haciendo deporte juntos,
                                        animándonos unos a otros, compartiendo aperitivos varios y sacando la mejor versión de pádel que llevamos dentro. Además, 
                                        nos acompañó el nuevo integrante y mascota de VOLUNFAIR: ¡Manolo!</p>
                                    </div>
                                    <p class="c-font-lowercase">
                                    </p>
                                </div>
                                <div class="c-content-media-2-slider wow animated fadeInLeft" data-slider="owl">
                                
                                    <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-navigation-dots="true" data-auto-play="4000" data-rtl="false">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/padel6.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/padel2.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/padel4.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/padel3.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/padel8.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/padel7.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/padel5.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/padel1.jpeg); min-height: 380px;">
                                        </div>
                                    </div>
                                        <br>
                                        </br>
                                    <div class="c-contact">
                                        <div class="c-content-title-1">
                                            <h3 class="c-font-uppercase c-font-bold"> </h3>
                                            <p class="c-font-lowercase">PORRA DEL MUNDIAL QATAR 2022 <br>
                                            </br> Manolo acompañó a España en el mundial de Qatar 2022 hasta el último momento, pero tristemente no pudo celebrar la segunda
                                                estrellita en el escudo español... Aún así, el departamento de Recursos Humanos volvió a liarla dentro del equipazo de VOLUNFAIR 2024
                                                y organizó la mayor porra jamás vista en industriales. </p>
                                        </div>
                                        <p class="c-font-lowercase">
                                        </p>
                                    </div>
                                <div class="c-content-media-2-slider wow animated fadeInLeft" data-slider="owl">
                                
                                    <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-navigation-dots="true" data-auto-play="4000" data-rtl="false">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/porra2.jpg); min-height: 380px;">
                                        </div>

                                      <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/porra3.png); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/porra6.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/porra5.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/porra1.png); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/porra4.png); min-height: 380px;">
                                        </div>
                               
                                    </div>
                                </div>
                    </div>
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
                                        </br> El 13, 14 y 15 de diciembre estuvimos en boca de todos y no hubo persona en industriales que no se percatase de nuestra presencia en la uni.
                                            Recogimos alimentos, material de higiene, cosas para bebés y generosas transeferencias con las que pudimos triplicar nuestra recogida. Aquí 
                                            nos volvimos a dar cuenta de que VOLUNFAIR no solo es una feria de dos días; VOLUNFAIR es la magia de entregarse día tras día.</p>
                                    </div>
                                    <p class="c-font-lowercase">
                                    </p>
                                </div>
                                <div class="c-content-media-2-slider wow animated fadeInRight" data-slider="owl">
                                
                                    <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-navigation-dots="true" data-auto-play="4000" data-rtl="false">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/recogida2.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/recogida3.jpg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/recogida5.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/recogida6.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/recogida4.jpg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/recogida9.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/recogida8.jpeg); min-height: 380px;">
                                        </div>

                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/recogida1.jpeg); min-height: 380px;">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                        </br> 
                                <div class="c-contact">
                                        <div class="c-content-title-1">
                                            <h3 class="c-font-uppercase c-font-bold"> </h3>
                                            <p class="c-font-lowercase ">RIFA NAVIDAD <br>
                                            </br> Como la feria no se financia sola, los jefazos Paula y Jorge tuvieron esta idea: realizar un sorteo que revolucionase la edición.
                                            Y así lo hicimos. Muchísimos particiantes, el equipo unió todavía más y VOLUNFAIR no dejaba de liarla por donde fuese!!</p>
                                        </div>
                                        <p class="c-font-lowercase">
                                        </p>
                                </div>
                                <div class="c-content-media-2-slider wow animated fadeInRight" >
                                
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/volunfair/Fotos2023/equipo/rifa1.jpg); min-height: 380px;">
                                        </div>
                                </div>
                            </div> 
                            <div class="col-md-6">
                               <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold"></h3>
                                        <p class="c-font-lowercase">HIMNO OFICIAL<br>
                                        </br> VOLUNFAIR no solo está formado por unos increíbles voluntarios sino que además contamos con un grupazo musical que tuvo la
                                            gran iniciativa de componer y grabar una canción sobre los valores de VOLUNFAIR, con la colaboración de Iñigo Quintero.
                                        ¿Quieres escucharla? ¡Es un exitazo! </p>
                                    </div>
                                    <p class="c-font-lowercase">
                                    </p>
                                </div>
                                <div class="c-content-media-2-slider wow animated fadeInLeft" >
                                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@volunfair/video/7175896073771224326" data-video-id="7175896073771224326" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@volunfair" href="https://www.tiktok.com/@volunfair?refer=embed">@volunfair</a> Ya os dijimos que se venía una graaan sorpresa🙌🏼🙌🏼 Estábamos deseando enseñaros este proyecto que con tanta ilusión hemos preparado!! Es algo nuevo e innovador lleno de magia!🪄🪄🪄 Con esto os explicamos el verdadero significado de ✨VOLUNFAIR✨ Ante todo queremos dar las gracias al pedazo de equipo que ha hecho este sueño realidad 🤟🏼🎶SOIS UNOS CRACKS🤟🏼🎶 Como podéis ver Manolo está tan entusiasmado como nosotros🤩 Esperamos que os guste tanto que no podáis parar de escucharla hasta febrero!!! 🗓️🗓️🗓️ <a title="volunfair" target="_blank" href="https://www.tiktok.com/tag/volunfair?refer=embed">#volunfair</a>  <a title="voluntariado" target="_blank" href="https://www.tiktok.com/tag/voluntariado?refer=embed">#voluntariado</a>  <a title="nuevacancion" target="_blank" href="https://www.tiktok.com/tag/nuevacancion?refer=embed">#nuevacancion</a> <a target="_blank" title="♬ sonido original - volunfair" href="https://www.tiktok.com/music/sonido-original-7175896120824253190?refer=embed">♬ sonido original - volunfair</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>                                </div>  

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="c-content-title-1">
                <div class="c-line-center c-theme-bg"></div>
                <h2 class="c-center c-font-uppercase c-font-bold">Y con la colaboración de:</h2>                    
            </div>
            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <div class="col-md-5">
            </div>

            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            
            <!-- BEGIN: PABLO ESPAÑA -->
            <div class="row">
                <div class="col-md-2">
                    <div class="col-md-12">
                        <div class="row c-center fotos wow animated fadeInLetf">
                            <img src="assets/base/img/volunfair/participantes/pablo-espana-falda.jpg" width="100%" title="Pablo España" alt="Pablo España" />
                        </div>
                        <div class="row c-content-media-1 wow animated fadeInRight">
                            <div class="c-center">
                                <h3 class="c-font-uppercase c-font-bold">Pablo España</h3>
                                <div>Speaker de VOLUNFAIR 2024</div>
                            </div>
                        </div>
                        <br />
                        <br />
                    </div>
                </div>
                
            </div>
            <!-- END: PABLO ESPAÑA -->
            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
<div class="col-md-5">
            </div>

            <!-- BEGIN: PATROCINIO EBURY -->
            
            <div class="row">
                <div class="col-md-2">
                    <div class="col-md-12">
                        <div class="row c-center fotos wow animated fadeInLetf">
                        <a href="https://ebury.com/" target="_blank">
                            <img src="assets/base/img/volunfair/patrocinadores/logo-ebury.png" width="100%" title="Ebury" alt="Ebury" />
                        </a>
                        </div>
                        <div class="row c-content-media-1 wow animated fadeInRight">
                            <div class="c-center">
                                <h3 class="c-font-uppercase c-font-bold">Ebury</h3>
                                <div>Patrocinador de VOLUNFAIR 2024</div>
                            </div>
                        </div>
                        <br />
                    </div>
                </div>
                
            </div>
            <!-- END: PATROCINIO EBURY -->

            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->

            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <br /><br/>
<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>