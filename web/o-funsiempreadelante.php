
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
                        <b>¿Me puedes dar una descripción de vuestra ONG?</b><br />
                        La fundación siempre adelante fue constituida el 1/7/2004 por la superiora general de las madres concepcionistas misioneras de la enseñanza. Inscrita en el registro de fundaciones asistenciales del ministerio de trabajo y asuntos sociales con el número 28-1325 por orden TAS-3982-2004 5/11/2004.<br /><br />

                        <b>¿Qué tipo de voluntariado hacéis y cuáles son los requisitos para participar?</b><br />
                        Tenemos dos tipos de voluntariado, uno en España donde los voluntarios están en las distintas sedes que hay a lo largo de España de la fundación y no hay ninguna exigencia especial, son personas que se comprometen con un documento pero está abierto para todo el que quiera participar. Y hay otro voluntariado que tenemos son los de verano en países fuera de España. Son en el mes de julio y lanzamos unos proyectos para ir a los países que en ese curso se hayan elegido y en este caso sí que tenemos una serie de condiciones. los voluntarios tienen que tener 18 años cumplidos antes de iniciar el proyecto, capacidad de asumir las directrices de la ong y las religiosas responsables de los proyectos, participación en los encuentros preparatorios en los proyectos de formación que se tienen dos a lo largo del año, autofinanciación del viaje, visado, vacunas, seguro de vida y de accidente, certificado de penales y gastos personales y firmar un acuerdo de colaboración. Durante el proyecto se pide una disponibilidad para convivir en grupo y compartir reflexiones, trabajos, experiencias, actitud de servicio, capacidad de adaptación y flexibilidad. Por ejemplo, en algunos proyectos se exige hacerse con el idioma del lugar y después del proyecto una disponibilidad para colaborar en tareas de sensibilización, presentaciones, testimonios y participar en el encuentro de acogida y evaluación.
                        La ONG tiene una revista que se publica periódicamente donde se da una información detallada de los hechos más importantes que suceden en la ONG <br /><br />

                        <b>¿Cuál es la historia de vuestra ONG y su misión?</b><br />
                        La fundación fue clasificada como fundación de cooperación para el desarrollo de asistencia social y de producción del voluntariado por orden ministerial de fecha 5/11/2004.<br /><br />

                        <b>¿Qué poblaciones o comunidades se benefician de vuestro trabajo?</b><br />
                        Actualmente, en África se benefician Guinea Ecuatorial, república democrática del Congo y Camerún, en asia filipinas, india e indonesia, en el caribe la república dominicana y Venezuela y tenemos alumnos de estudios superiores en república dominicana y también tenemos ayudas en España.<br /><br />

                        <b>¿En vuestros proyectos colaboráis con organizaciones locales o la gente del lugar?</b><br />
                        La colaboración que tenemos es con los centros que la propia congregación tiene en estos lugares y ellos son los que coordinan el tema y buscan las actuaciones que se puedan tener.<br /><br />

                        <b>¿Qué hacen los voluntarios cuando se van de voluntariado en verano?</b><br />
                        Pues la acción de los voluntarios en verano son los proyectos que se a
                        Se llevan a cabo en un lugar de misión concepcionista y están tutelados por religiosas de la congregación que viven en los lugares donde se desarrolla la experiencia misionera. Los voluntarios residen en la casa de las religiosas y la congregación se hace cargo de los gastos de alojamiento y manutención. La participación se realiza ante todo con un compromiso de fe cristiana incluyendo otros elementos de importancia como comunicación de experiencias, integración en la cultura del país, formación, etc. Los campos de cooperación son clase de recuperación de primaria y secundaria, deportes, trabajos manuales, talleres formativos, juegos, animación de celebraciones religiosas, formación de adultos y de profesorado y apoyo a familias necesitadas.<br /><br />

                        <b>¿Se puede ayudar a la ONG sin irse como voluntario?</b><br />
                        Si se puede ayudar participando en colaboraciones en las sedes locales cuando se les solicite y ellos se presentan por estar interesados.<br /><br />

                        <b>¿Cuáles son los principales problemas y necesidades que abordáis en vuestra ONG?</b><br />
                        La razón de nuestra ONG es facilitar que los alumnos de países desfavorecidos reciban una educación de calidad.<br /><br />

                        <b>¿Puedes describirnos un proyecto exitoso reciente y su impacto en la comunidad?</b><br />
                        En el 2022 se hizo un proyecto en el colegio (embrazabil de la república del congo consistente en la excavación de un pozo de agua potable que daría solución tanto a las necesidades del colegio como las de la parroquia. Fue un proyecto que se llevó a cabo en el 2022 y finalizó en diciembre que se hizo de manera exitosa porque como hemos comentado se suministra agua tanto en el interior del colegio como de forma externa para el pueblo que le rodea. El proyecto ha sido apoyado y financiado tanto por el ayuntamiento de la Cendea de Galar un pueblo de Navarra como por la federación de municipios navarros y es uno más de los que la fundación siempre hacemos para colaborar en estas misiones tanto en África y en el resto del mundo.<br /><br />

                        <b>¿Tenéis algún evento de recaudación o actividad de las que las personas puedan participar para ayudar a financiar los proyectos?</b><br />
                        Una buena parte de financiación se consigue a través de las sedes locales que tenemos en los diversos colegios que tiene la congregación. Se puede presentar y colaborar porque en estos sitios se hacen fiestas, determinadas actuaciones y están abiertas para que cualquiera en la zona pueda colaborar y además con nuestro agradecimiento.<br /><br />

                        <b>¿Pueden las personas interesadas contactar con vosotros y así obtener más información?</b><br />
                        Si se pueden poner en contacto a través de la página web o redes sociales como Instagram, Facebook o Youtube.<br /><br />
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
                    <div class="col-md-10">
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