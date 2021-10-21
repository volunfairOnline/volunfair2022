<?php


// --- Archivo con las funciones de configuración (º, pie, ...)
include ('./scripts/o-config.php');

// --- Escribimos las cabeceras
escribe_cabecera();

?>
    <!-- BEGIN: PAGE CONTAINER -->
    <div class="c-content-box c-size-md c-bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <a href="https://www.airbus.com/" target="_blank">
                             <img src="assets/base/img/volunfair/patrocinadores/logo-airbus.png" title ="Airbus" alt="Airbus" style="padding-top: 20%;" width="100%" />
                        </a>
                    </div>
                 </div>            
                            
                <div class="col-md-3">
                    <div class="item">
                        <a href="https://www.hatchadream.com/" target="_blank">
                            <img src="assets/base/img/volunfair/patrocinadores/logo-HAD.png" title ="Hatch a Dream - Ahorra y recauda para tu voluntariado" alt="Hatch a Dream - Ahorra y recauda para tu voluntariado"  width="100%" />
                        </a>
                     </div>
                 </div> 
                 
                 <div class="col-md-3">
                    <div class="item">
                        <a href="http://www.etsii.upm.es/" target="_blank">
                            <img src="assets/base/img/volunfair/patrocinadores/logoE.jpg" title ="ETSII Madrid" alt="ETSII Madrid"  width="100%" />
                        </a>
                     </div>
                </div>
     
                <div class="col-md-3">
                    <div class="item">
                        <a href="https://www.talgo.com/" target="_blank">
                            <img src="assets/base/img/volunfair/patrocinadores/logo-talgo.png" title ="Talgo" alt="Talgo" style="padding-top: 10%; padding-left: 10%;" width="90%" />
                        </a>
                    </div>
                </div>
        </div>
    </div>
    <!-- END: PAGE CONTAINER -->

<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>