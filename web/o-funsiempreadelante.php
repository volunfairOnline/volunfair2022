
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
			
        
            
        </script>

        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">

        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2023/encabezado_1.jpg)">
<  
        </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
        

            <!-- BEGIN: ENTREVISTA -->
			<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">FUNDACIÓN SIEMPRE ADELANTE </b><br /></b><br /></h3>
                    <p class="c-content-media-1 c-font-20 c-margin-b-30 col-md-7 c-right" > 
                        <b>¿Podéis hacer una breve descripción de vuestra ONG y su misión?</b><br />
                        Kukoa es una asociación que pone en contacto a jóvenes con ganas de ayudar y a fundaciones, asociaciones… que buscan voluntarios.<br /><br />

                            <b>¿Cuál es la historia de vuestra ONG y cuándo se fundó? </b><br />
                            Kukoa nace en diciembre de 2021, cuando nos juntamos dos amigos para organizar un voluntariado para nuestro grupo de amigos, pero acabamos yendo 60 jóvenes a un comedor social esa Navidad. <br />
                            Por lo tanto, decidimos empezar a organizar voluntariados más a menudo, definimos nuestras cuatro áreas de actuación: niños con discapacidad, niños enfermos, personas mayores y personas sin recursos.<br />
                            Además, se nos fue uniendo gente al equipo hasta llegara las 12 personas que somos ahora, y gente al proyecto, hasta llegar a los 700 voluntarios.<br /><br />

                            <b>¿Cuáles son los principales problemas o necesidades que abordáis?</b><br />
                            <b>Niños con discapacidad:</b> colaboramos en la organización de actividades de ocio como cine, bolera, zoo…<br />
                            <b>Niños enfermos:</b> hacemos visitas a niños enfermos para animarles en esta situación tan difícil<br />
                            <b>Personas mayores:</b> visitamos residencias de ancianos y hospitales de cuidados paliativos para que las personas mayores nos cuentan sobre todo lo que han aprendido durante su vida.<br />
                            <b>Personas sin recursos:</b> este es nuestro área más desarrollada, no solo intentamos cubrir las necesidades más básicas de estas personas, sino aportarles cariño y atención.
                            <br /><br />

                            <b>¿Qué tipo de actividades ofrecéis y cuáles son los requisitos para participar?</b><br /><br />
                            Ofrecemos a los universitarios la posibilidad de irse durante una semana en enero/febrero a un pueblo de España a hacer misionado. También se realizan actividades de voluntariado como el acompañamiento a personas mayores en residencias, trabajos más físicos como pintar o reformar edificios, ir a los colegios a hablar y jugar con los niños, acercarse a las casas de la gente que está más sola para estar con ellos…  <br />
                            En cuanto a los requisitos, no hace falta ninguno para ir a Misión País, simplemente tener ganas e ilusión, y querer ponerse al servicio de los demás y llevar a cabo la misión.<br /><br />

                            <b>¿Tenéis algún evento anual o campaña de recaudación de fondos para que las personas puedan participar?</b><br />
                            Por suerte, participar en Misión País es muy barato, por lo que no es nuestro principal problema. Pero sí es verdad que se organizan eventos como fiestas para poder recaudar dinero destinado a financiar las misiones. De todas maneras, yo creo que la mejor manera de aportar a la misión es rezar por los frutos de cada una de ellas. <br /><br />

                            <b>¿Cómo pueden las personas interesadas ponerse en contacto con la organización y tener más información?</b><br />
                            En la cuenta de Instagram, que se llama @misionpaisesp, están muy activos. Allí anuncian todas las novedades, las actividades, las inscripciones, las fechas de las misiones y demás. <br /><br />

                            <b>¿Podrías contarnos alguna experiencia personal de alguna de tus misiones?</b><br />
                            ¡Claro! Yo he tenido la suerte de ir dos años a un pueblo en Córdoba que se llama Rute (La idea es ir 3 años seguidos al mismo pueblo).  Lo que más me llama la atención es lo bien que nos acogen, recibiéndonos siempre con los brazos abiertos; y las ganas e ilusión con la que esperan nuestra llegada.<br />
                            En mi experiencia personal, os puedo decir que de Misión País me llevo lo mucho que te ayuda a crecer como persona y a nivel de fe. Para mí es un regalo, una semana en medio del curso para desconectar de la rutina, en la que vas a un pueblo con las ganas de servir pero que, sin duda, acabas recibiendo mucho más de lo que das. Me sorprende cómo, en una semana, que aparentemente es poco, se puede hacer tanto.<br /><br />
                            </p>
					
				</div>
                
			</div>
            <!--- END: ENTREVISTA -->

            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <div class="col-md-2">
                            </div>
            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->

            <!-- BEGIN: FOTOS FUNDACION -->
            <div class="row">
                <div class="col-md-2">
                    <div class="col-md-12">
                        <div class="row c-center fotos">
                            <img src="assets/base/img/volunfair/newsletter/funsiempreadelante/logo" width="100%" title="Logo" alt="Logo" />
                            <img src="assets/base/img/volunfair/newsletter/funsiempreadelante/FunSiempreAdelante_1" width="100%" title="1" alt="1" />
                            <img src="assets/base/img/volunfair/newsletter/funsiempreadelante/FunSiempreAdelante_2" width="100%" title="2" alt="2" />
                            <img src="assets/base/img/volunfair/newsletter/funsiempreadelante/FunSiempreAdelante_3" width="100%" title="3" alt="3" />
                            <img src="assets/base/img/volunfair/newsletter/funsiempreadelante/FunSiempreAdelante_4" width="100%" title="4" alt="4" />
                        </div>
                        <br />
                        <br />
                    </div>
                </div>
                
            </div>
            <!-- END: FOTOS FUNDACION -->

            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
                <div class="col-md-5">
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