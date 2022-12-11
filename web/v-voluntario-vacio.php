<?php

// --- Archivo con las funciones de configuración (cabeceras, pie, ...)
include ('./scripts/config.php');
//include ('./scripts/o-config.php');

session_start();
// --- Iniciar la clase de conexión a la base de datos
require_once('./mysql/MySQLHandler.class.php');
require_once("./mysql/misconexiones.php");
 
// --- Escribimos las cabeceras
escribe_cabecera();

?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
        
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2023/encabezado_1.jpg)">
>    
            <!--<div class="container">
				 
                    <div class="c-page-title c-pull-left">
                    	  <p class="c-font-uppercase c-font-bold c-font-white c-font-25 c-font-slim">Quiénes Somos</p>
                        <h4 class="c-font-white c-font-thin c-opacity-07"> Conócenos mejor </h4>
                    </div>
                </div>-->
                <!-- en 2019 se puso <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="margin-top: 50px; opacity: 0;">
            </div>-->
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
            
            <!-- BEGIN: PAGE CONTENT -->
          
             <!-- BEGIN: CONTENT/TABS/TAB-1 -->
             
            <div class="c-content-box c-size-md c-no-bottom-padding c-overflow-hide">
                <div class="c-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="c-content-title-1">
                                <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30"> PARTICIPANTES</h3>
                                <div class="c-line-center c-theme-bg"></div>
                                <p class="c-font-center c-font-bold c-font-uppercase c-margin-b-30">¡Dentro de poco tendrás noticias de los trucos por descubrir de nuestras ONGs!<br />
                                Hasta entonces... DÉJATE SORPRENDER</p>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <div class="c-container c-center">
                    <img src="./assets/base/img/volunfair/Fotos2023/equipo/instagram3.png" style="width: 30%;" />
                </div>
                
                <br>
                </br>
                <br>
                </br>
                <br>
                </br>
                <br>
                </br>
                <br>
                </br>
        </script>
<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>
