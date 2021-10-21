<?php


// --- Archivo con las funciones de configuración (º, pie, ...)
include ('./scripts/o-config.php');

// --- Escribimos las cabeceras
escribe_cabecera();

?>
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
				
					<div class="row">
						<div class="col-md-4">
							<!-- BEGIN: CONTRIBUCIONES -->
							<div class="c-content-media-1 c-bordered wow animated fadeInUp">
								<div class="col-md-12">
									<div class="c-content-title-1">
										<h2 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">¡COLABORA CON NOSOTROS!</h2>
										<div class="c-line-center c-theme-bg"></div>
									</div>
								</div>
								
										<p>
											Ayúdanos a hacer realidad un año más este sueño que es VOLUNFAIR  con tu granito de arena al proyecto:
										</p>

										<p>
											<em>Para donaciones y todo tipo de aportación</em> económica puedes ingresar la cantidad que desees en nuestra cuenta
											bancaria:<br />
											<strong>ES85 3025 0003 9414 3335 5605</strong>
										</p>		

										<p>
											Con el espíritu de VOLUNFAIR pretendemos mover a toda la gente que tenga ilusión en ayudar
											al de al lado, acercando el voluntariado a jóvenes y universitarios. Si te ves llamado por esta idea, 
											¡la mejor ayuda que nos puedes dar es pasarte por la feria y preguntar a cualquiera de nuestro equipo!
										</p>	
												
									
							</div>
						</div>
						<div class="col-md-8 wow animated bounceInDown"> 
							<img src="./assets/base/img/volunfair/ayuda/charity.svg" width="75%" alt="¡Colabora con VOLUNFAIR!" class="img-centrada" />
						</div>
								
								<!-- NOTA DE NACHO:Yo pondría aquí una foto de nuestro equipo -->
					</div>

					<br /><br />

					<div class="row">
						<div class="col-md-6 wow animated fadeInRight">
							<br /><br />
							<img src="./assets/base/img/volunfair/ayuda/social-care.svg" width="70%" alt="¡Colabora con VOLUNFAIR!" class="img-centrada" />
						</div>

						<div class="col-md-6">
							<div class="c-content-media-1 c-bordered wow animated fadeInDown">
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
					<!-- END: COLABORACIONES -->
				</div>										
			
			</div>
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->

<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>