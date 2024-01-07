
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
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2024/Fondos/puente_8.jpg)">
<  
        </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
        

            <!-- BEGIN: ENTREVISTA -->
			<div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">KUKOA </b><br /></b><br /></h3>
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

                            <b>¿Qué poblaciones o comunidades específicas se benefician de vuestros proyectos?</b><br />
                            De momento la Comunidad de Madrid, ¡aunque en enero de 2024 empezaremos en Toledo!<br /><br />

                            <b>¿Podéis describirnos un proyecto exitoso reciente y su impacto en la comunidad?</b><br />
                            Nuestro último proyecto grande fue una recogida de mantas y abrigos en la que recaudamos 200 mantas y cerca de 400 abrigos que repartimos a la gente que vive en la calle por Madrid.<br /><br />

                            <b>¿Qué tipo de voluntariados ofrecéis y cuáles son los requisitos para participar?¿Qué pedís a los voluntarios?</b><br />
                            Sobre todo, lo que pedimos a los voluntarios es alegría y ganas, que es lo importante. Que no vengan por cumplir una serie de créditos o lo que sea… Además, no requerimos compromiso semanal o mensual, es decir,
                            la asociación es la que se compromete con que va a haber alguien todas las semanas, pero nos vamos encargando de buscarlos en nuestra red semanalmente.<br /><br />
                            
                            <b>¿Colaboráis con otras organizaciones o entidades locales para llevar a cabo sus proyectos?</b><br />
                            ¡Claro! De eso va la asociación. Trabajamos con fundaciones como: Banco de Alimentos, Fundación Caná, Fundación AVA, Grupo Albertia, Hospital de Cuidados Paliativos Laguna.<br /><br />

                            <b>¿Se puede ayudar a la ONG sin irse como voluntario? ¿Tenéis algún evento anual o campaña de recaudación de fondos en el que las personas puedan participar?</b><br />
                            Una de las principales creencias de la asociación es que cada persona puede dar algo distinto y en especial en relación con su edad. De los jóvenes, lo que buscamos es la entrega de TIEMPO, que es lo que verdaderamente tenemos y podemos dar. Por otro lado, las personas adultas, lo que más cómodamente pueden dar es DINERO, por lo que la financiación la buscamos a través suyo y de manera personal y directa con la dirección de la asociación.<br /><br />

                            <b>¿Cómo pueden las personas interesadas ponerse en contacto con la ONG y obtener más información?</b><br />
                            Especialmente a través de nuestras redes sociales: Instagram (@kukoa.jovenes) 680982268 y mail info@kukoajovenes.org<br /><br />

                            <b>¿Podéis compartir algunas historias o testimonios de personas o comunidades que han sido beneficiadas por vuestro trabajo?</b><br />
                            <b>El primer protagonista es Joaquín, un madrileño de 58 años.</b><br />
                                Cuando tenía 16 años abandonó su casa para alistarse en el ejército, en la Legión, en Málaga. Estuvo destinado en Ceuta, en Líbano y otros lugares hasta que le estalló una mina le cambió la vida. Le echaron del ejército por su nueva adicción: el alcohol y las drogas. Debido a sus lesiones y a no poder trabajar, se había visto metido en este mundillo. Esta nueva vida le llevó a su realidad actual: vive en el albergue de San Isidro y se pasa el día pidiendo y bebiendo por Madrid. Este hombre, es una de las personas a las que repartimos desayunos todos los domingos, menos uno. En el que nos dimos cuenta de que faltaba alguien y preguntamos por él. Faltaba alguien, porque Joaquín no es una persona cualquiera. Joaquín, es un hombre que mientras nosotros le intentamos sacar tema de conversación acompañado de un café, él es el que nos va preguntando cosas: qué tal los amigos, el colegio, la novia…
                                Al preguntar por él, resultó que estaba ingresado en el Hospital Giménez Díaz, porque se le había infectado un líquido de la rodilla, y le iban a amputar la pierna. Decidimos que íbamos a intentar ir a visitarlo. Porque, si os paráis a pensar, Joaquín es una persona, que se enfrentaba a una operación importante SIN NADIE, durante la operación iba a estar SIN NADIE que preguntara por él, y sabía que cuando saliera del quirófano, iba a estar SIN NADIE. Esto, para muchos de nosotros, no nos entra en la cabeza; ya que a la más mínima intervención, desde que te operen para limar la uña del dedo gordo del pie, a la salida está toda tu familia. Cuando digo a toda tu familia, es que te encuentras a los enfermeros peleándose con todas tus tías en la sala de espera. Tras pelearnos con las personas de la recepción para que nos dejaran pasar, porque queríamos ver a un paciente y lo único que sabíamos era que se llamaba Joaquín, nos dejaron pasar. Joaquín nos recibió con una llorera alucinante. A lo que, debo de reconocer, que se unió aquí el presidente. Y a lo que le siguió una de las mejores conversaciones que he tenido en mi vida. Sobre la soledad, la pérdida de personas que creías que iban a estar para siempre, pero que por diversas circunstancias, en este caso el alcohol, se separan de tu vida.
                                Finalmente a Joaquín no le amputaron la pierna, y ha vuelto a su vida tras unos meses en el hospital. Aquel día aprendimos algo muy importante los dos: él, que tiene personas que realmente se preocupan por él, sin importar su situación; yo, que detrás de una persona que aparentemente es un borracho y poco más, hay una historia, una vida, que es alucinante y merece la pena conocer.<br />

                            <b>El segundo protagonista se llama Andrés, de 46 años, que falleció en junio del año pasado.</b>
                                La historia comienza cuando me invitan a hacer una visita al Hospital de Cuidados Paliativos Laguna, para conocerlo e intentar sacar algún proyecto adelante juntos. Es gracias a esta historia, que hemos empezado un proyecto pionero en España, que luego comentaré. Durante esa visita, conocí a varios pacientes que estaban muy enfermos, hasta que entramos en la habitación de otro paciente, que nos recibió con una sonrisa de oreja a oreja. Ese paciente era Andrés, enfermo de ELA, al que desgraciadamente le faltaban unos días de vida. Yo entré en la habitación pensando… “jope… estoy delante de una persona a la que le faltaban unos días de vida… ¿Qué puedo hablar yo, un niño de 17 años, con una persona que está en los últimos momentos de su vida? Pero en vez de intentar alegrarle y distraerle yo a él, me distraía él. Fue alucinante hablar con aquel hombre y poder ver en su rostro, 
                                la ilusión de recordar juntos todas las cosas que había vivido. Su infancia, su familia, sus amigos, su estudio, su trabajo… la alegría de una vida vivida al máximo, que es de lo que va el “juego”. Además, era fanático del Betis, y le conseguimos un vídeo de un jugador animándole. Esta pequeña anécdota, nos animó a sacar con la asociación, el proyecto “cumple-sueños” en ese centro. Yendo a hablar con las personas que están peor e intentar cumplir sus últimos deseos.<br />

                            <b>El último protagonista es Javi, un madrileño de 42 años, que vive en la calle desde hace 3 años.</b>
                                La historia de Javi es muy importante para mí. Yo siempre digo que mi trabajo en Kukoa no es un trabajo normal, como otro cualquiera, en el que se cobra un dinero por tus servicios. Mi “sueldo” es mucho mejor, de hecho, yo siempre digo que soy súper afortunado, porque tengo la suerte de tener el mejor “sueldo” del mundo: cambiar vidas!! Javi está casado y tiene 2 hijos. Trabajaba como director comercial para una gran empresa, pero el alcohol hizo que lo perdiera todo. Su mujer le dejó porque era mala influencia para sus hijos; y al poco tiempo le despidieron también del trabajo. Javi es otra de las personas a las que repartimos desayuno todos los domingos desde hace un año y medio. Hace unos meses, tras hablar con nosotros mientras le repartimos desayuno, nos dio una gran noticia: “Que gracias a vernos todos los domingos, desde hace un año y medio, hiciera frío o calor, todos los domingos,
                                aparecía un grupo de 15 jóvenes a repartir desayuno… pero sobre todo alegría y cariño” “Pues gracias a ello, había decidido empezar un proceso de desintoxicación, con el fin de poder recuperar la custodia de sus hijos y dar un vuelco a su vida”. Este fue el momento en el que todo el trabajo de este año y medio, cobró sentido. Cambiar de vida es alucinante.<br /><br />


                            <b>¿Que habéis conseguido? Y ¿cómo veis a Kukoa en el futuro?</b><br />
                            Hemos conseguido que 700 jóvenes dediquen tiempo a ayudar a los demás y eso es lo más importante.
	                        Tenemos pensado seguir creciendo, ¡crecer a lo bestia! Intentar llegar a nuevos sitios de España e ir mejorando nuestra actividad, quizá intentando digitalizar todo el proceso.<br /><br />
                        </p>
					
				</div>
                
			</div>
            <!--- END: ENTREVISTA -->

            <!-- BEGIN: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->
            <div class="col-md-2">
                            </div>
            <!-- END: COLUMNA EN BLANCO PARA QUE EL RESTO QUEDE CENTRADO -->

            <!-- BEGIN: FOTOS KUKOA -->
            <div class="row">
                <div class="col-md-2">
                    <div class="col-md-10">
                        <div class="row c-center fotos">
                            <img src="assets/base/img/volunfair/newsletter/kukoa/logo" width="100%" title="Logo" alt="Logo" />
                            <img src="assets/base/img/volunfair/newsletter/kukoa/kukoa" width="100%" title="Stand Feria" alt="Stand Feria" />
                            <img src="assets/base/img/volunfair/newsletter/kukoa/kukoa2" width="100%" title="Grupo" alt="Grupo" />
                            <img src="assets/base/img/volunfair/newsletter/kukoa/kukoa3" width="100%" title="Grupo 2" alt="Grupo 2" />
                        </div>
                        <br />
                        <br />
                    </div>
                </div>
                
            </div>
            <!-- END: FOTOS KUKOA -->

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