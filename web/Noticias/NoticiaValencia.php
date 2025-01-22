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
					<div class="c-content-media-1 c-bordered wow animated que-es">
					<h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">Recogida para ayudar a Valencia</h3>
								<!-- para que el texto rebote añadir "bounceIn"--> 
					
								<p style="text-align: justify;">
									Tras la <b>DANA en Valencia</b>, VOLUNFAIR no dudó en ponerse manos a la obra para ayudar a losafectados, organizando una gran
									<b>recogida solidaria en la ETSII</b>.
								</p>
								
								<p style="text-align: justify;">
									Reunimos productos de higiene, limpieza, medicinas y otros básicos esenciales, contando con unaimpresionante respuesta de la comunidad. Conseguimos recoger
									<b>alrededor de 1000 pañales y mascarillas, más de 100 guantes y muchos otros productos de limpieza
									</b>, como lejía y escobas.
								</p>	

								<p style="text-align: justify;">
								Se organizaron con turnos y una coordinación impecable, asegurándose de que todo funcionara demanera eficiente. Gracias a su esfuerzo y energía, lograron movilizar mucha ayuda y demostrar que, enlos momentos difíciles, el
								<b>trabajo en equipo</b> marca la diferencia.
								</p>
								
					</div>
				</div>
			</div>
					
					<div class="c-content-media-1 wow animated que-es">
						
						<div class="container">
							<div class="c-content-media-1 c-bordered wow animated fadeInDown clearfix">
							<h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">Te podría interesar</h3>
							<div class="container_noticia">
								<div class="noticia">
									<a href="<?php echo $base_url_main; ?>Noticias/NoticiaPadel.php" class="noticia-link">
										<div class="noticia-content">
											<?php $image_url = $base_url_main . '/assets/base/img/volunfair/foto5.jpg'; ?>
											<img src="<?php echo $image_url; ?>" alt="">
											<h3>Noticia Padel</h3>
										</div>
									</a>
								</div>
								
								<div class="noticia">
									<a href="<?php echo $base_url_main; ?>Noticias/NoticiaVaughan.php" class="noticia-link">
										<div class="noticia-content">
											<?php $image_url = $base_url_main . '/assets/base/img/volunfair/foto5.jpg'; ?>
											<img src="<?php echo $image_url; ?>" alt="">
											<h3>Noticia Vaughan</h3>
										</div>
								</div>
								<div class="noticia">
									<a href="<?php echo $base_url_main; ?>Noticias/NoticiaCena.php" class="noticia-link">
										<div class="noticia-content">
											<?php $image_url = $base_url_main . '/assets/base/img/volunfair/foto5.jpg'; ?>
											<img src="<?php echo $image_url; ?>" alt="">
											<h3>Noticia Cena</h3>
										</div>
									</a>
								</div>
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