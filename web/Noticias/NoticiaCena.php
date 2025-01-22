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
			 <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2024/Fondos/puente_8.jpg)">
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
					<h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">Cena de bienvenida equipo 2025</h3>
								<!-- para que el texto rebote añadir "bounceIn"--> 
					
								<p style="text-align: justify;">
								Los miembros de VOLUNFAIR celebraron su cena anual en Domino’s Pizza, convirtiéndola en una noche llena de risas y buen rollo. </p> 
								<p style="text-align: justify;">
								Entre pizzas y refrescos, disfrutaron de diferentes juegos y dinámicas grupales que no solo les hicieron pasar un rato divertido, 
								sino que también les ayudaron a conocerse mejor y reforzar los lazos del equipo. Fue una velada especial que dejó claro que, además de 
								solidarios, sabemos disfrutar juntos como una gran familia.
								</p> 
					</div>
				</div>
			</div>

			<div class="solomediano1">
                    <div class="col-md-12 c-content-box c-size-md c-bordered wow animated">
                                            
                            <div class="c-content-media-2-slider" >
                                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DEzfhiPoNNI/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/DEzfhiPoNNI/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/DEzfhiPoNNI/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida de VOLUNFAIR (@volunfair)</a></p></div></blockquote>
                                        <script async src="//www.instagram.com/embed.js"></script>
                                </div>  
                            
                            <br />
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
									<a href="<?php echo $base_url_main; ?>Noticias/NoticiaValencia.php" class="noticia-link">
										<div class="noticia-content">
											<?php $image_url = $base_url_main . '/assets/base/img/volunfair/foto5.jpg'; ?>
											<img src="<?php echo $image_url; ?>" alt="">
											<h3>Noticia Valencia</h3>
										</div>
								</div>
								<div class="noticia">
									<a href="<?php echo $base_url_main; ?>Noticias/NoticiaVaughan.php" class="noticia-link">
										<div class="noticia-content">
											<?php $image_url = $base_url_main . '/assets/base/img/volunfair/foto5.jpg'; ?>
											<img src="<?php echo $image_url; ?>" alt="">
											<h3>Noticia Vaughan</h3>
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