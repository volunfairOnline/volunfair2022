<?php


// --- Archivo con las funciones de configuración (º, pie, ...)
include ('./scripts/o-config.php');

// --- Escribimos las cabeceras
escribe_cabecera();

?>

    <div class="c-layout-page">

        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
        <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background:#515151">
                <!--<div class="container">
                
                <div class="c-page-title c-pull-left">
                        <p class="c-font-uppercase c-font-bold c-font-white c-font-25 c-font-slim">Quiénes Somos</p>
                    <h4 class="c-font-white c-font-thin c-opacity-07"> Conócenos mejor </h4>
                </div>
            </div>-->
        </div>
        <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->        
        
        <!-- BEGIN: PAGE CONTAINER -->
        <!-- MODELO PATROCINADORES NO MUY GRANDES --> 
        <div class="c-content-box c-size-md c-bg-white">     
            <div class="container">
                            
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-center c-font-bold">Patrocinadores</h3>
                    <div class="c-line-center c-theme-bg"></div>
                    <p class="c-font-center c-font-bold c-font-uppercase c-margin-b-30">Ellos han hecho posible VOLUNFAIR 2021</p>
                </div>

                <div class="row col-md-12 align-items-center c-font-center">     
                    <div class="col-md-4">
                        <div class="item">
                            <a href="http://www.etsii.upm.es/" target="_blank">
                                <img src="assets/base/img/volunfair/patrocinadores/logoE.jpg" title ="ETSII Madrid" alt="ETSII Madrid"  width="100%" />
                            </a>
                        </div>
                        <p>
                        La Escuela Técnica Superior de Ingenieros Industriales es una institución pública dedicada a la enseñanza superior, de referencia a nivel nacional e internacional en la formación de ingeniería en España. Fundada en 1845, imparte los Grados en Ingeniería en Tecnologías Industriales, en Ingeniería de Organización y en Ingeniería Química (adaptadas al EEES), el Máster en Ingeniería Industrial, 13 Másteres de Postgrado, y las titulaciones del plan anterior a Bolonia de Ingeniero Industrial e Ingeniero Químico.
                        </p>
                    </div>
        
                    <div class="col-md-4">
                        <div class="item">
                            <a href="https://www.talgo.com/" target="_blank">
                                <img src="assets/base/img/volunfair/patrocinadores/logo-talgo.png" title ="Talgo" alt="Talgo" style="padding-top: 10%; padding-left: 10%;" width="90%" />
                            </a>
                        </div>
                        <br></br>
                        <p>
                        As a company, specialized in design, manufacture and maintenance of the rolling stock, Talgo has the following key success factors: innovation, sustainability, safety, quality, competitiveness and full custom approach to every project.
                        </p>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="item">
                            <a href="https://fundacionaon.es/quienes-somos/" target="_blank">
                                <img src="assets/base/img/volunfair/patrocinadores/logo-fundacion-aon.svg" title ="Fundación AON" alt="Fundación AON" style="padding-top: 10%; padding-left: 10%;" width="90%" />
                            </a>
                        </div>
                        <br></br>
                        <p>
                        La Fundación Aon España es una organización privada de naturaleza fundacional, sin ánimo de lucro, cuyo primer objetivo es contribuir a hacer una sociedad mejor, diseñando y participando en proyectos solidarios con otras entidades del Tercer Sector dentro de estas áreas de actuación: catástrofes, acción social y arte y cultura.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 align-items-center">
                        <div class="col-md-4">
                            <div class="item">
                                <a href="https://www.comunidad.madrid/" target="_blank">
                                    <img src="assets/base/img/volunfair/patrocinadores/logo-cma.png" title ="CMA" alt="CMA" style="padding-top: 10%; padding-left: 10%;" width="60%" />
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="item">
                                <a href="https://www.weareseekers.com/" target="_blank">
                                    <img src="assets/base/img/volunfair/patrocinadores/logo-seekers.png" title ="Seekers" alt="Seekers" style="padding-top: 10%; padding-left: 10%;" width="70%" />
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="item">
                                <a href="https://www.fundaciodamm.cat/es" target="_blank">
                                    <img src="assets/base/img/volunfair/patrocinadores/logo-damm.jpg" title ="Damm" alt="Damm" style="padding-top: 10%; padding-left: 10%;" width="70%" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <br /><br />

        <!-- MODELO PATROCINADORES GRANDES --> 
        <!-- <div class="c-content-box c-size-md c-bg-white">    
            <div class="container">        
                <div class="col-md-1"> </div>
                <div class="col-md-5">
                        <bold><h3 class="c-center">Talgo</h3></bold>
                        <a href="http://www.etsii.upm.es/" target="_blank">
                            <img src="assets/base/img/volunfair/patrocinadores/logoE.jpg" title ="ETSII Madrid" alt="ETSII Madrid"  width="100%" />
                        </a>
                    <p>
                    As a company, specialized in design, manufacture and maintenance of the rolling stock, Talgo has the following key success factors: innovation, sustainability, safety, quality, competitiveness and full custom approach to every project.
                    </p>
                </div>
                <div class="col-md-5">
                        <bold><h3 class=" c-center">Talgo</h3></bold>
                        <a href="https://www.talgo.com/" target="_blank">
                            <img src="assets/base/img/volunfair/patrocinadores/logo-talgo.png" title ="Talgo" alt="Talgo" style="padding-top: 10%; padding-left: 10%;" width="90%" />
                        </a>
                    <p>
                    As a company, specialized in design, manufacture and maintenance of the rolling stock, Talgo has the following key success factors: innovation, sustainability, safety, quality, competitiveness and full custom approach to every project.
                    </p>
                </div>
                <div class="col-md-1">
                <a>
                </a>
                </div>
            </div>
        </div>-->
        
        
        
        <!-- END: PAGE CONTAINER -->
    </div>

<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>