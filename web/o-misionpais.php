
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
					<h3 class="c-center c-font-uppercase c-font-bold">MISIÓN PAÍS </b><br /><br /></b></h3>
                    <p  class="c-font-lowercase c-font-20 col-md-8" >
                        <b>Estamos con Isa, una voluntaria de Misión País. Cuentanos Isa, ¿Qué es Misión País?</b><br />
                            Misión País es un proyecto que llevan a cabo jóvenes universitarios, que buscan llevar a Cristo y a la Virgen a distintos pueblos de España.<br /><br />

                            <b>¿Cuál es el origen de esta ONG y cuándo se fundó?</b><br />
                            Misión País se fundó el Chile hace varios años, por un grupo de la juventud del movimiento católico de Schoenstatt. Poco a poco se fue expandiendo, y cada año crece más. En España, este es el décimo año ya. <br /><br />

                            <b>¿Cuál es vuestra principal misión?</b><br />
                            Nuestra principal misión es llevar la alegría y el amor de Dios a la gente de estos pueblos, ayudarles en todo lo que haga falta, y acompañarlos durante esa semana en la que estamos. Básicamente, ser una juventud que reaviva la fe en los pueblos.<br /><br />

                            <b>¿Qué tipo de actividades ofrecéis y cuáles son los requisitos para participar?</b><br />
                            Ofrecemos a los universitarios la posibilidad de irse durante una semana en enero/febrero a un pueblo de España a hacer misionado. También se realizan actividades de voluntariado como el acompañamiento a personas mayores en residencias, trabajos más físicos como pintar o reformar edificios, ir a los colegios a hablar y jugar con los niños, acercarse a las casas de la gente que está más sola para estar con ellos…  <br />
                            En cuanto a los requisitos, no hace falta ninguno para ir a Misión País, simplemente tener ganas e ilusión, y querer ponerse al servicio de los demás y llevar a cabo la misión.<br /><br />

                            <b>¿Tenéis algún evento anual o campaña de recaudación de fondos para que las personas puedan participar?</b><br />
                            Por suerte, participar en Misión País es muy barato, por lo que no es nuestro principal problema. Pero sí es verdad que se organizan eventos como fiestas para poder recaudar dinero destinado a financiar las misiones. De todas maneras, yo creo que la mejor manera de aportar a la misión es rezar por los frutos de cada una de ellas. <br /><br />

                            <b>¿Cómo pueden las personas interesadas ponerse en contacto con la organización y tener más información?</b><br />
                            En la cuenta de Instagram, que se llama <b>@misionpaisesp</b>, están muy activos. Allí anuncian todas las novedades, las actividades, las inscripciones, las fechas de las misiones y demás. <br /><br />

                            <b>¿Podrías contarnos alguna experiencia personal de alguna de tus misiones?</b><br />
                            ¡Claro! Yo he tenido la suerte de ir dos años a un pueblo en Córdoba que se llama Rute (La idea es ir 3 años seguidos al mismo pueblo).  Lo que más me llama la atención es lo bien que nos acogen, recibiéndonos siempre con los brazos abiertos; y las ganas e ilusión con la que esperan nuestra llegada.<br />
                            En mi experiencia personal, os puedo decir que de Misión País me llevo lo mucho que te ayuda a crecer como persona y a nivel de fe. Para mí es un regalo, una semana en medio del curso para desconectar de la rutina, en la que vas a un pueblo con las ganas de servir pero que, sin duda, acabas recibiendo mucho más de lo que das. Me sorprende cómo, en una semana, que aparentemente es poco, se puede hacer tanto.<br /><br />
                            </p>
					
				</div>
                
			</div>
            <!--- END: ENTREVISTA -->

            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <div class="col-md-1">
                            </div>
            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->

            <!-- BEGIN: FOTOS MISIÓN PAÍS -->
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-10">
                        <div class="row c-center fotos">
                            <img src="assets/base/img/volunfair/newsletter/misionpais/logo" width="100%" title="Logo" alt="Logo" />
                            <img src="assets/base/img/volunfair/newsletter/misionpais/standferia" width="100%" title="Stand Feria" alt="Stand Feria" />
                            <img src="assets/base/img/volunfair/newsletter/misionpais/grupo" width="100%" title="Grupo" alt="Grupo" />
                            <img src="assets/base/img/volunfair/newsletter/misionpais/grupo2" width="100%" title="Grupo 2" alt="Grupo 2" />
                            <img src="assets/base/img/volunfair/newsletter/misionpais/grupo3" width="100%" title="Grupo 3" alt="Grupo 3" />
                        </div>
                        <br />
                        <br />
                    </div>
                </div>
                
            </div>
            <!-- END: FOTOS MISIÓN PAÍS -->
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <br /><br/>
<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>