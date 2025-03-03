<?php
// --- Archivo con las funciones de configuración (º, pie, ...)
include('../scripts/config.php');
// --- Escribimos las cabeceras
escribe_cabecera();
?>
    <style>
        /* Estilos generales */
        .container_noticia {
            display: flex;
            flex-wrap: wrap;
			align-items: center;
            gap: 20px;
            padding: 20px;
        }

        .noticia {
            flex: 1;
            max-width: 80%;
            align-items: center;
            text-align: center;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .noticia:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .noticia a {
			display: block;  /* Hace que el enlace sea un bloque para que se ajuste al contenido */
			text-decoration: none;  /* Elimina el subrayado del enlace */
		}

		.noticia-content {
			display: flex;
			flex-direction: column;  /* Imagen arriba, título abajo */
			align-items: center;
		}

		.noticia-content img {
			max-width: 100%;  /* Para que la imagen no se salga del contenedor */
			margin-top: 10px;
			margin-right: 10px;
			margin-left: 10px;
			height: 10vw; /* La altura será constante para todas las imágenes */
			width: 60vw;
			object-fit: cover; /* Mantiene la proporción recortando la imagen si es necesario */
			display: block; /* Evita el espacio extra debajo de la imagen */
		}

		.noticia-content h3 {
			text-align: center;
		}

		

        /* Diseño responsivo para pantallas pequeñas */
        @media (max-width: 931px) {
			.container_noticia {
                flex-direction: column;
            }
            .noticia-content {
				flex-direction: row;  /* Imagen a la izquierda, título a la derecha */
				justify-content: flex-start;
				align-items: center;
			}

			.noticia-content img {
				width: 50%;  /* Imagen ocupa la mitad del espacio */
				margin-right: 10px;  /* Espacio entre imagen y título */
				margin-top: 0px;
				margin-left: 0px;
			}

			.noticia-content h3 {
				text-align: left;
			}

			
        }
    </style>
		
		
		<!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
		
             <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(assets/base/img/volunfair/mares/mar_006.jpg)">
                 <!--<div class="container">
				 
                    <div class="c-page-title c-pull-left">
                    	  <p class="c-font-uppercase c-font-bold c-font-white c-font-25 c-font-slim">Quiénes Somos</p>
                        <h4 class="c-font-white c-font-thin c-opacity-07"> Conócenos mejor </h4>
                    </div>
                </div>-->
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<!-- BEGIN: PAGE CONTENT -->
			<div class="c-content-box c-size-md c-bg-white">
                <div class="container">
					<div class="c-content-title-1">
								<h1 class="c-center c-font-uppercase c-font-bold">VOLUNFAIR </h1>
								<h2 class="c-center  c-font-bold">Feria universitaria de voluntariado en Madrid</h2>
								<h3 class="c-center c-font-uppercase c-font-bold">Próximos 11, 12 y 13 de febrero de 2025</h3>
									
					</div>
					<div class="c-content-media-1 c-bordered wow animated que-es" >
					<h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30 ">Entrevista a Tita</h3>
					<p>Maria Jesús Ortiz-Casado, conocida como <strong>Tita</strong>, es una mujer con un corazón enorme y una vida dedicada a ayudar a los demás. Desde muy joven sintió la necesidad de servir, lo que la llevó a estudiar enfermería y unirse al Opus Dei. Hace más de 42 años llegó al Congo, un país que no conocía, pero que terminó convirtiéndose en su hogar.</p>
        						<p>Allí ha trabajado sin descanso en hospitales, escuelas y proyectos de formación, superando todo tipo de desafíos. Su historia es un testimonio de amor, valentía y entrega, y un ejemplo para quienes sueñan con cambiar el mundo a través del voluntariado. Hoy ha querido compartir sus experiencias con VOLUNFAIR, para servir de inspiración a muchos más voluntarios.</p>
					<br><br>
					
					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Muchísimas gracias por recibirnos y por querer contarnos un poco tu historia. Seguro que servirá de inspiración a muchos jóvenes que leerán esto. Para empezar, queríamos preguntarte, ¿qué te inspiró inicialmente a dedicarte al voluntariado y por qué elegiste el Congo como destino?</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Pues nada, yo pienso que toda mi vida tuvo desde que era muy jovencita, como un fin, una meta orientada en mi vida de servicio a los demás. Una meta que me propuse verdaderamente desde muy joven y que fue lo que me movió seguramente a hacer estudios de enfermería, que me sirvieron mucho porque me ayudaron a ver el sufrimiento de la gente y lo que se podía hacer para consolar a la gente, para estar ahí, para quererlos, para apoyarles, para que no se encontrarán solos en medio del sufrimiento.
					Esto yo creo que fue definitivo, y que Dios se fue sirviendo de todos estos caminos que nosotros no conocemos, conoce él solo, para irme llevando paso a paso a descubrir mi vocación. A los 20 años pedí la admisión en el Opus Dei con la idea clara de darme a los demás. Y tenía a la total disponibilidad de las autoridades del Opus Dei en aquel momento para ir a donde hiciera falta sin condiciones, poniendo toda mi vida, mis 20 años y todo lo que podía tener por delante a la disposición de lo que de lo que hicieran, ¿no?
					Uno de los países en donde las autoridades eclesiásticas pidieron la ayuda evangelizadora del Opus Dei fue el Congo, por entonces se llamaba Zaire. También estaban interesadas las autoridades eclesiásticas de Zaire en que pusiésemos en marcha un hospital muy necesario, porque en el país en ese momento, en esos años había muy poca atención médica, sobre todo para la gente más necesitada. Los que venían, los blancos que venían en misiones pues eh diplomáticas, etcétera, etcétera. Pero médicos a los que el pueblo no podía llegar, no? Y el Hospital General, pues era bastante, bastante sin higiene... Estaba bastante mal y nos pidieron que empezáramos el hospital, con lo cual creo que mi perfil encajaba, porque yo era enfermera, porque estaba interesada. Nunca había pensado irme a África, pero fue lo que lo que cayó en aquel momento, lo que se necesitaba. Y me preguntaron que si estaba dispuesta a irme a Zaire.
					Osea que dije que sí sin pensármelo dos veces y sabiendo solamente que era África, no sabía ni siquiera por dónde caía, me imaginaba que debía caer más bien por el sur, pero no estaba muy segura. Y nada, así me marché. Así me marché y ahí desde hace 42 años.
					En ese momento fuimos 5 chicas de diferentes países y luego un grupo de hombres del Opus Dei ya habían ido 2 años antes. Entre ellos había también algún médico. Había un poco de situarse en el país Primero, además, teníamos que pedir dinero también a todos los organismos que no quisieran ayudar para poder hacer un hospital, o sea que era, pues sueño, pero que iba a realizarse poco a poco.
					Una de las cosas, creo que tengo bastantes recuerdos, no, de los primeros momentos.</p>
					

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Pues mira, si te parece justo le iba a preguntar por esto que bueno, dice que desde que tenía 20 años, que lleva 42 años en ese entonces quería preguntarle si recuerda y cómo recuerda su primer día como voluntaria en el Congo, sus sentimientos, ¿cómo fue?</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Mhm pues bueno, yo creo que era demasiada emoción, ¿no? Porque claro, era una aventura que verdaderamente una aventura, o sea, no conocíamos absolutamente nada, nada, nada. Y del país, de las costumbres, gente, no conocíamos nada. Yo creo que el primer impacto fue el calor intenso y húmedo al salir del avión, que es como si se metieron con una especie de olla a presión, ¿no? Y luego el jaleo del aeropuerto, los montones de billetes con muy poco valor adquisitivo que circulaban de un lado para otro, pues para pasar la aduana, para pasar de un lado para otro, todo se resolvía con billetes, con montones, con montañas de billetes. 
					Bueno, pues nada, vino a buscarnos el sacerdote que en ese momento hacía cabeza en nuestra institución con un microbús, con un chico congoleño para llevarnos a la casa. Eran las 12:00 H de la noche. El camino estaba en plena oscuridad, todo estaba oscuro, solo unas lucecitas como candiles de algún vendedor que quedaba todavía ambulante por el camino, algunas casitas así, desperdigadas hasta llegar a la ciudad que 2 Km hasta la ciudad de Zaire que tenía más iluminación. Ya habíamos alquilado un piso de un apartamento en la tercera planta y por supuesto, sin ascensor, tuvimos que cargar con todos los equipajes, que no era poco y nada. O sea, que esto fue como la primera impresión. Pero todo caía bien porque íbamos a la aventura, ¿no? O sea, que era una aventura increíble. Y entonces sabíamos que nada que nos íbamos a encontrar con todo tipo de sorpresas, ¿no? Por ejemplo, que no hubiera agua, luz, electricidad. No sabíamos si tendríamos comida o no tendríamos, que se comía allí, no tenía ni idea. Pero todo era una aventura maravillosa para vivir y nos lo pasábamos muy bien. Estar 5 era un equipo estupendo, aunque nos comprendíamos poco porque cada uno habla un poco su idioma y cuando no podíamos comprendernos, pues nada nos enseñábamos canciones y cantando también pues nos íbamos uniendo amistades, ¿no? Y enterrando el círculo no de vista. Y nada, no cuento más anécdotas del principio sería muy largo, hay muchísimas.
					</p>
					

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Genial, bueno, luego entraremos un poco más en eso, entonces. ¿Bueno, pues al final todo este recorrido que ha sido tan largo y que hay tanto de lo que aprender, queríamos preguntarle también qué valores y principios la han guiado a lo largo de todos estos años de servicio?</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Yo creo que el convencimiento de que yo venía al Congo con una misión clara que Dios me había dado, que me había dado a través del prelado del Opus Deis pero que era una misión directa que venía de Dios para ayudar al desarrollo de un país que era muy joven. Transmitir los valores, los valores cristianos que yo me parece que yo tenía, pues bastante anclado, no por familia, por tradición. Unos valores que era también amor al trabajo bien hecho, enseñar a trabajar a la gente, respetar y amar a los demás, los valores de la vida familiar. Había mucho para enseñar y también mucho para aprender de esta gente.</p>
					

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Muy bien, genial. Pues, por otro lado, ya ha entrado un poco más como en la experiencia en el Congo particularmente, queríamos preguntarle cuáles han sido los mayores desafíos a los que se ha enfrentado en una región tan compleja y diversa, también un poco ligado con esto, si podría compartir alguna anécdota o momento que haya marcado un antes y un después de su recorrido.</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Bueno, creo que los mayores desafíos han sido quedarme al lado de los congoleños en tantos momentos difíciles, incluso muy peligrosos. Hemos vivido codo a codo con ellos. Yo he vivido codo con ellos. Grandes saqueos, diferentes situaciones muy peligrosas por guerras por las que el país ha pasado y que hemos vivido pues al lado, juntos. Correr la suerte de ellos. Sufrir, pasar miedo. Eran esos momentos en los que todos los extranjeros huían, que en los que los congoleños que también podían huir porque tenían dinero, posibilidades huían Y el no huir, quedarte con ellos, pues era muy elocuente, o sea, las obras hablaban muchísimo más que las palabras. Yo había ido a dejarme la piel por esta gente y no estaba dispuesto a marcharme.</p>
					

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Qué bonito. Y lo que le decía, alguna anécdota, así como particular que de todo esto que está contando, pues de todos los enfrentamientos y de los saqueos tiene alguna anécdota así particular que haya marcado de forma significativa?</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Pues hay muchas cosas, ¿no? Yo creo que han sido momentos en los que marca un antes y un después de mi vida de voluntaria, no, porque son noches en blanco oyendo tiros constantemente. Noches en blanco porque no sabes si van a entrar los militares miserables que quieren robar, bandidos, gente que se aprovecha también para entrar en las casas en cualquier momento, aprovechando que los militares tienen armas y que pueden intimidar a la gente que hay dentro de la casa. El asedio de la capital durante un mes en el que no tuvimos ni nada, absolutamente nada de electricidad. Y esto pues era penuria de alimentos también porque no se podía conservar absolutamente nada. El agua, como no había electricidad, pues el agua no se puede tomar directamente, no se puede beber directamente y siempre hay que hervirla, que filtrarla porque tiene muchísimas bacterias y provoca muchísimos problemas intestinales. No había manera de conservar nada, o sea, hambre, miedo. Los militares miserables hambrientos también. Otros ladrones que entraban, como decía antes, en nuestra casa entraron, por supuesto también, gracias a Dios a violar no entraron, pero en otras casas violaban también a las mujeres. Y compartir todo esto une mucho, muchísimo, ¿no? Hay como miles de anécdotas sería larguísimo, ¿no? Porque fue esto, el estar con ellos viviendo momentos tan difíciles en los que tienes que pues que “tenir bon”, como dicen los franceses, como estar fuerte, hacer un gran esfuerzo, porque es verdad que sabíamos que teníamos una protección de Dios clara, pero claro, son momentos de mucha tensión. Yo exteriormente la tensión me salió, así como otras personas que les puede salir por ponerse nerviosas, gritar, llorar, a mí la tensión se me queda dentro y luego pues ya el estómago se estropea un poco y está estas cosas. Pero bueno, que la verdad es que tienes que soportar y que por que tienes que animar a las otras personas. 
					Luego hay cosas graciosas, vivía con otra gente, no es que estuviera viviendo sola, ¿no?  Con congoleñas y con gente de otros países, pues la gente a lo mejor, como más inconsciente de lo que puede pasar, de repente sale con una tontería, que mitad de una situación dramática y peligrosa y que verdaderamente es una situación dificilísima, ¿no? Pues sale con una tontería que al final quinta, como toda la atención, ¿no? Y al final terminas riéndote. Yo me acuerdo incluso de celebrar el cumpleaños de la gente en situaciones así que no se podía ni siquiera cantar porque no sabíamos si estábamos vigiladas por fuera, si la casa estaba rodeada, toda oscuras completamente y entonces cantando el cumpleaños feliz, pero en voz baja de la persona. Un día una se le ocurrió: “como no hay luz vamos a intentar planchar con una cazuela, le ponemos el carbón encima de la cazuela y repasamos, pues con la cacerola, como las planchas, como mis tatarabuelas que iban con carbón, pues nosotros con la cacerola. Entonces esas cosas que era una vida diferente y nos íbamos manteniendo unas a otras y era bonito también pasar todo eso así.
					Una cosa graciosa que me viene a la cabeza y que te cuento porque tiene gracia. Es que, en aquellos momentos, claro, la gente como nos dejaron sin luz, ya te digo, estuvimos, pues un mes entero sin luz. La gente que se iba, los extranjeros y amigos que se marchaban y decían, oye, por favor venir a coger las cosas de nuestro congelador. Y entonces una cosa que no habíamos comido jamás en la vida desde que habíamos llegado al Congo, que era langosta. Pues resulta que en esos momentos de penuria terrible había un extranjero que se marchaba muerto de miedo, que huían en los primeros aviones que hubo, porque muchos aviones para todos estos expatriados, no todos estos extranjeros se marchaban. Lo gracioso fue que, en plena guerra, penuria y todo esto nos comimos una langosta como jamás nos habíamos comido. Es una anécdota muy graciosa, ¿no? Nunca se nos hubiera podido pasar por la cabeza.
					</p>

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Pues sí, la verdad es que sí. Entonces pues genial, lo que estaba preguntándole antes que pues a pesar de todas estas cosas que sorprende muchísimo la verdad es que yo creo que la gente va a estar muy alucinada con todas las cosas por las que ha pasado. Como al final de su recorrido ha sido tan largo y puede como contrastar, quería preguntarle si ha notado cambios positivos en estas comunidades. O sea, a pesar de todo. Lo malo, ¿Se ha notado alguna mejoría?</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">O sea, es muy gratificante constatar que la gente es muy receptiva, captan el cariño y el don desinteresado a ellos, lo captan enseguida. Puede ser que por motivos históricos tengan en algunos casos una actitud un poco desconfiada al principio respecto a los blancos, pero cuando se dan cuenta que lo único que te interesa a ti es por lo que estás allí, su bien, ayudar, aportar, se abren increíblemente y son super acogedores. Tienen una gran ilusión en elevar el nivel de su país. Agradecen la ayuda, son alegres, entusiastas, creativos. Esto es muy gratificante, ¿no? Y esto se ve claro, todo esto, pues ayuda a ir adelante. O sea que avanzan porque van como absorbiendo todo lo que se les va enseñando, con mucho agradecimiento. Creo verdaderamente que hemos influido bastante en los valores de la vida familiar y en los valores en las comunidades, saber unirse para trabajar en equipo, llegar más lejos así, trabajando en equipo, escuchar, respetar la opinión de los otros. Todo esto que había que enseñar y que han ido aprendiendo. Y ahora, pues, o sea, hemos ayudado a desarrollo, especialmente de las mujeres, su formación estaba completamente dejada de lado durante muchos años, y ahora tenemos, además del hospital, una escuela de enfermeras, dos colegios, una escuela de Formación Profesional y tanto médicos como enfermeras y profesorado, todos son nativos, o sea que este que es una gran alegría. 
					</p>

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Claro, o sea, al final realmente están cambiando la vida de muchísimas personas y me imagino lo gratificante que tiene que ser. Y bueno, ya hablando un poco sobre el impacto personal que ha tenido esta experiencia de vida, quería preguntarle de qué manera el voluntariado ha transformado su vida personal y emocional y qué habilidades o lecciones ha aprendido durante todo este tiempo.
					a. 
					</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Bueno, por supuesto que 42 años son muchos años, ¿no? He construido toda mi vida en función de esto y son muchos años para que no impacte verdaderamente en mi vida personal, ¿no? O sea que son 42 años y que se puede decir que construido toda mi vida en función de la misión que Dios ha puesto en mis manos y puedo decir de verdad que no estoy defraudada. He aprendido a adaptarme a todo tipo de gente, a querer a todos como son, a comprenderles, a respetarles, a valorar costumbres tan diferentes de mi país de origen que en un principio pueden extrañar y que luego vas valorando también. valoro y admiro la fortaleza tienen ante las dificultades. Este es un pueblo que sufre y tiene muchísima fortaleza ante el dolor, ante la enfermedad. O sea, aquí no se sabe nada de cuidados paliativos, de aliviar el dolor, la gente pasa dolores grandes. Por ejemplo, aquí es difícil encontrar morfina o fármacos que puedan aliviar el dolor, y la gente sufre. Son como valor de fortaleza. También el cuidado de los niños, ancianos, que es tan propio de la cultura africana. El compartir lo poco que tengan con generosidad, o sea, tú puedes ir a una casa y no te vas a marchar, aunque sean pobres, pobres, pobres, sin alguna cosa que te van a dar, aunque sea un coco o una fruta lo que sea, pero te van a dar algo. La escucha paciente, ahora que nadie escucha a nadie, los valores religiosos que tienen muchas cosas, muchas cosas que han impactado mi vida y que han me han enseñado.
					</p>

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Qué bien, genial. Y bueno, también hablando un poco de esto, claro, me imagino que bueno, como ha dicho antes, ha vivido momentos muy duros, entonces que al final también han impactado de forma personal. ¿Cómo ha manejado esos momentos de agotamiento o de dificultad en una labor que es tan exigente?</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Bueno, la primera cosa es que la fuerza no era una fuerza personal, ni mucho menos, esta la da Dios. Y también hay que contar con la ventaja de ser un equipo con otras personas, no estar nunca sola, con otras personas que tienen los mismos ideales, que están a lo mismo. Luego también la responsabilidad de ser ejemplo para los demás, porque normalmente yo era la mayor, estaba siempre rodeado de gente que la más joven que yo y entonces tenía que aguantar el tipo, que estar allí, que animar a las demás, que había alguna que se me iba para abajo, que se desanimaba, alguien que estaba un poco más de capa caída. Tenía la responsabilidad de estar haciendo un surco, de estar abriendo la tierra para sembrar una semilla muy fecunda. Todo eso te mueve, ¿no? Y te ayuda a superar, pues todo lo que es, lo que lo que se te ponga por delante.
					Yo otra cosa también, ¿no? Gracias a Dios soy bastante optimista de naturaleza.
					</p>

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Imagino que eso será fundamental, la fortaleza y el optimismo para para poder soportar todo lo que ha comentado. Por otro lado, nos gustaría saber su visión del futuro. ¿O sea, que qué sueños o esperanzas tiene para las comunidades del Congo y de la vida del voluntariado en general? </strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Bueno, a mí me parece que la gente que quiere ayudar, algún consejo a la gente que quiere ayudar es que no solo se viene a enseñar, o sea, cuando se va a ayudar, lo más importante es amar, querer a la gente, respetarla, aprender mucho de ellos. Y verdaderamente Aconsejo también que la gente vaya al voluntariado con un plan de trabajo concreto. Ayuda a ponerse de acuerdo con los que reciben la ayuda para comprender bien lo que necesitan. O sea, esto ayuda, de estar muy de acuerdo con los que necesitan, si se va a un hospital o si se va a una escuela o si se va a un centro de atención de lo que sea, cuando se va a hacer voluntariado es muy necesario, me parece a mí saber qué es lo que necesitan verdaderamente, ¿cómo se les puede ayudar? Y entonces, pues prepararse en consecuencia, si es posible tener un plan con una comunidad. Es decir, yo voy a estar tanto tiempo haciendo este trabajo de voluntariado dando pues estas vacaciones que tengo, etcétera, etcétera, pero luego vamos a ver cómo puedo yo mover a la gente que tengo alrededor habiendo conocido sobre el terreno las necesidades de ahí de donde he ido a ver cómo puedo seguir colaborando y cómo puedo implicar a más gente a colaborar conmigo para seguir ayudando, pues esta obra. Mucha gente puede implicarse. Detectar en que pueden ayudar de algún modo y eso es fácil cuando se conocen bien las necesidades y para conocerlas hay que estar sobre el terreno, hay que ir al sitio
					Esto con respecto al a consejos, a las personas que van a ayudar. Y luego sobre el futuro me has preguntado también, ¿no?
					</p>

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Sí, el futuro del Congo, ¿qué esperanzas tiene?</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Bueno, es una labor maravillosa, que ahora mismo está en manos de los congoleños todo esto. Es un es un avance que no se puede de con ojos de prisa. O sea, porque se va despacito. O sea, porque no tiene mucha base humana, y que hay que empezar dándoles una buena base humana, pues va, es lenta, es lenta. Porque no conocen, por ejemplo, las virtudes humanas de la convivencia, las conocen poco, ¿no? O sea, la sinceridad, lo que decía antes, no, el trabajo bien hecho no con miedo al castigo, a que no van a pagar, a que te van a reñir. O sea, muchas cosas que son como unos valores humanos en que hay que inculcarlos y todo esto es un trabajo que es lento, ¿no?
					Y que esto no, el cambio no se puede ver de un día a otro y a lo mejor yo no lo voy a ver. El cambio de la gente, el cambio del país, pues van a ser generaciones, a lo mejor dos generaciones. Estamos trabajando mucho con los niños, porque los niños son más capaces y los matrimonios jóvenes tienen la ilusión de formar bien a sus hijos, ¿no? Y de que sus hijos sean personas íntegras. Entonces todos estos valores los estamos inculcando en la gente joven y en los matrimonios jóvenes y en los niños, porque son el futuro del país, claro.
					Y luego hay mucha gente muy buena y muy generosa que yo lo digo también para animar a la gente, que solamente necesita conocer las necesidades y saber encauzarlas a través de entidades, personas seguras de confianza, para darse completamente. O sea que cuando hablas de voluntariado pues te encuentras a jóvenes, pero también a personas maduras, personas mayores, personas jubiladas. Yo conozco muchas que dan todas sus experiencias, sus fortunas, el resto de su existencia, de mucha experiencia. Médicos, sobre todo yo conozco aquí en Congo, para acudir en ayuda de los más necesitados y que son un gran tesoro porque son personas con una gran experiencia que todavía tienen, pues a lo mejor 10-15 años que pueden ejercer muy bien su profesión y enseñar a los más jóvenes y a los médicos de aquí, y que son personas jubiladas que están dando su vida, terminando su vida aquí, dando todo. Sí podrían estar tranquilamente no viviendo en las comodidades de Europa o de América, donde sí hay, y están aquí, Eh? Entonces es muy bonito ver también, la generosidad de la gente. ¿Es verdad que los jóvenes son muy generosos, no? Y de un golpe así de generosidad, son capaces de ir a en Valencia en las inundaciones, ¿no? Pero hay que ver también la cantidad de gente madura que dedica esta esa experiencia que ya tiene al voluntariado y esto es una preciosidad.
					</p>

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Totalmente. De hecho, por eso queríamos también entrevistarla, porque al final también tiene muchísimo valor lo que decía, que pudiendo ya tener una vida tranquila después de jubilarse en España o en Europa con muchas comodidades, pues es una generosidad increíble el ir a dar todo lo que puedas para allá. Y bueno, pues también un poco sobre esto pues de los sueños y las esperanzas. Si tiene algún proyecto o legado en mente para que su labor continúe incluso después de retirarse.</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Bueno, claro que esta labor maravillosa que vine a hacer hace 42 años, está ya en manos de los congoleños, ¿no? Y no dudo que la seguirán llevando adelante. O sea, yo estoy aquí, pero ellos están continuando la labor y lo están haciendo estupendamente. o sea, que están poniendo sus vidas y todo está yendo muy bien. Ellos conocen a tu gente y saben cómo pasar el mensaje y ya han aprendido y están muy agradecidos, es una preciosidad, o sea que ver que ya todo esto está en manos de los congoleños, o sea, que el proyecto maravilloso es que esto tiene que seguir adelante, aunque yo no esté y que va a seguir porque están preparados para poderlo hacer.
					</p>

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Claro que al final han ganado como ese poder seguir hacia adelante con todo lo que les habéis enseñado. Y ya por último, para dar consejos e inspiración, un poco ligado a lo que nos estaba diciendo antes, pues volver a preguntarle que qué consejo le daría a las generaciones más jóvenes que quieren involucrarse en el voluntariado internacional, pero también para las personas que no puedan viajar a estas a estos lugares. ¿Cómo podemos contribuir de forma significativa?</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Mira, yo pienso que en los jóvenes siempre pueden moverse más, porque sí que me parece que es interesante, importante que haya gente que ponga, que pueda poner un pie en donde quiera ayudar, que conozca a la gente, que pueda comprender esa mentalidad que muchas veces es completamente diferente. ¿Yo pienso, he, sabes qué pasa? Que se vive, concretamente en España que es la experiencia que yo tengo de vivir de otro sitio que no sea el Congo. Y claro, cuando vienes para acá tienes que cambiar los esquemas que tienes en España completamente, ¿no? Entonces es importante venir y vivir, por eso yo diría a los jóvenes que se animen a venir, que se animen a venir a ir a ir ahí donde quieran ayudar. Que puedan dar de su tiempo, de sus conocimientos, de lo que puedan, ¿no? Y yo he visto no cuando las inundaciones, como la gente de esos pueblos que estuvieron en con este drama terrible de las inundaciones, como esta gente estaba agradecida al cariño, al cariño de estos jóvenes. Entonces, claro, esto no puede ser solo, pues un golpe así de motivo, un sentimentalismo como así pasajero, o sea que hay que seguir ayudando en donde estés teniendo siempre una comunicación con estas comunidades a las que has ayudado para involucrar lo que decía antes, involucrar a otras personas para saber pues qué es lo que necesitan, ¿no? Por ejemplo, pues necesitan la formación de profesores, bueno, pues vamos a ver cómo podemos proporcionar esa formación.
					Hay que hay que ir, porque claro, o sea, hay muchos videos, muchas peliculitas que van, que vienen artículos, etcétera, etcétera. Y claro, que te pueden motivar y que están muy bien para motivar, ¿no? Pero a mí me parece que hay que hay que ver, oír y estar en el sitio y si es posible, que a mucha gente no le será posible, ¿no? Pero a quién le sea posible que vaya, que vaya al sitio donde se necesita esta ayuda, porque es distinto, completamente que verlo en una película, que leerlo en un libro, que vender un artículo, es distinto y entonces esto te mete muchísimo más en los problemas de la gente, conocer lo que hay, abres los ojos y escuchas a la gente. Y en ese momento te das mucha más cuenta de verdaderamente lo que necesitan. Yo te digo, o sea, por ejemplo, te pongo un ejemplo pequeñito, ¿no? O sea, yo he visto en una, en un orfelinato completamente de niños pobrísimos, niñitas que ya llegaban a los 14-15 años huérfanas que estaban desde pequeñitas en el orfelinato. Venían voluntarios de otros países y les traían una televisión que ni siquiera en nuestras casas existen, una cosa super moderna, y unos regalos que decías, pero es que esto, o sea, que para estas niñas no sirve absolutamente para nada. O sea que esto es lo que me parece que hay que conocer y hablar con las personas que se encargan de ellos y de estas labores, de estas iniciativas hay que hablar con ellos para ver lo que verdaderamente necesitan.
					O sea, que muchas veces que lo que necesitan, a lo mejor, pues eso es de un curso de formación de este tipo, profesores. Hay que preguntar porque las necesidades son muy diferentes, ¿no? ¿O sea, que de qué sirve una cosa que luego aquí pues es que no va a tener ninguna utilidad, ¿no? O sea. Unas máquinas con muchísimas cosas de mucha utilidad, aquí las máquinas tienen que ser de marcha adelante, marcha atrás jajaja, o sea poner en funcionamiento y cortar. O sea, que no puede tener una carta con 1000 cosas para hacer, porque esto es bueno, se va a estropear enseguida, no va a haber nadie que va a arreglarlo y al final va a terminar, pues ahí arrumbado en un rincón sin que nadie lo utilice, ¿comprendes? O sea que, si vamos a ver qué tipo de ayuda, pues vamos a ver qué tipo de ayudas primeramente se necesita, y lo que les arregla y lo que allí saben luego ellos usar sin necesidad de tener que recurrir todo el tiempo al extranjero porque allí pueden arreglarlo. No sé, yo creo que hay que ir a los sitios y hay que escuchar mucho a las personas que están con ellos.
					</p>

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Claro, al final nosotros aquí, teniendo nuestra realidad, podemos pensar que allí necesitan ciertas cosas que como ha contado realmente se necesitan primero muchas otras cosas antes que eso. Y al final no te vas a dar cuenta sin ir, sin informarte.
					Bueno pues ya solo quedan dos preguntas, una de ellas es, ¿qué mensaje le gustaría transmitir a las personas que bueno, que vestimos Volunfair, que estamos formando parte de esto?
					</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Bueno, nada que os animo muchísimo a seguir adelante y el mensaje es que estáis haciendo una labor buenísima porque hay que mover a la gente. Hay que ser motor en esta vida siempre. Entonces ser motor pues es olvidarte de ti mismo, porque si te pones a mirarte a ti mismo, entonces el motor deja de funcionar enseguida y ya no puede ser mover a los demás. Pero sois motor, y os animo muchísimo que sigáis con esto. Es muy necesario, el Mundo os necesita, no El Congo ni África, El Mundo entero os necesita. Os animo una barbaridad, este es el mensaje que puedo dar 
					</p>
					
					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Genial, muchísimas gracias. Bueno, y ya para terminar, lo último es, si pudiera resumir su experiencia en una sola palabra o una frase, ¿cuál sería y por qué?</strong></p>

					<h3>Tita</h3>
					<p style="text-align: justify;">Una palabra es difícil, pero una frase sí me sale. Gracias Dios mío, por haberme dado esta oportunidad única de gastar mi vida alegremente al servicio de los demás.
					Porque si Dios no me hubiera pedido venir aquí, yo siempre digo que yo estoy en el Congo porque sé que Dios me pide que esté en el Congo, porque si no jamás habría elegido este sitio para vivir. Así es que es como una convicción clara, pues una persona puede decir, ay, pues me voy a este sitio que es tan bonito y tal, pues aquí es una ciudad difícil de vivir. Es un país difícil y si no fuera por esta gente que me ha robado el corazón y porque sé que Dios quiere que sea aquí, yo nunca, jamás hubiera que me hubiera quedado aquí, en el primer avión que salía para España me habría vuelto ya.
					</p>

					<h3>Entrevistadora</h3>
					<p style="text-align: justify;"><strong>Genial, qué mensaje tan bonito, a mi por lo menos me emociona escuchar su historia, creo que es todo un ejemplo para el mundo entero y pues bueno, muchísimas gracias por todo lo que nos ha contado. Yo creo que va a servir muchísimo para ser una gran inspiración a todas las personas que también nos sentimos de alguna forma llamados a servir a los demás y yo creo que va a servir muchísimo y de verdad que muchísimas gracias por haber dedicado este ratito a contarnos pues, en definitiva, su experiencia de vida de entrega total.</strong></p>
					</div>
				</div>
				</div>
			</div>
					
		

					<div class="c-content-media-1 wow animated que-es"></div>
						<div class="container">
							<div class="c-content-media-1 c-bordered wow animated fadeInDown clearfix">
								<div class="col-md-12">
									<div class="c-content-title-1">
										<h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30" id="rrss">VOLUNFAIR en Redes</h3>
										<div class="c-line-center c-theme-bg"></div>
									</div>
								</div>
								
										<p>
											¡Toda ayuda es bien recibida! Nos haces un gran favor siguiendo a VOLUNFAIR en 
											nuestras redes sociales y dándolo a conocer a amigos o familia:
											<br /><br />
											<div class="panel-group text-center">
												<div class="panel col-sm-6">
													<a href="https://www.facebook.com/volunfair" target="blank"><i class="icon-social-facebook c-icongrande"></i></a>
														<div class="card-body">
															<a href="https://www.facebook.com/volunfair" target="blank"><h4 class="card-title">Facebook</h5></a>
															Únete en Facebook
														</div>
												</div>
												<div class="panel col-sm-6">
													<a href="https://twitter.com/volunfair" target="blank"><i class="icon-social-twitter c-icongrande"></i></a>
														<div class="card-body">
															<a href="https://twitter.com/volunfair" target="blank"><h4 class="card-title">Twitter</h5></a>
															Síguenos en Twitter 
														</div>
												</div>
												<div class="panel col-sm-6">
													<a href="https://www.instagram.com/volunfair/" target="blank"><i class="fab fa-instagram c-icongrande"></i></a>
														<div class="card-body">
															<a href="https://www.instagram.com/volunfair/" target="blank"><h4 class="card-title">Instagram</h5></a>
															Síguenos en Instagram
														</div>
												</div>
												<div class="panel col-sm-6">
													<a href="https://es.linkedin.com/company/volunfair" target="blank"><i class="fab fa-linkedin c-icongrande"></i></a>
														<div class="card-body">
															<a href="https://es.linkedin.com/company/volunfair" target="blank"><h4 class="card-title">LinkedIn</h5></a>
															Contáctanos en LinkedIn
														</div>
												</div>
											</div>			
										</p>
												
									
							</div>							
						</div>
					</div>
					</div>
					
				</div>
				<br/>										
			
			
<?php
// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();
?>