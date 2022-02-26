<?php

// --- Archivo con las funciones de configuración (cabeceras, pie, ...)
include ('./scripts/config.php');

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
            <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center imagen-cabecera" style="background-image: url(assets/base/img/volunfair/Fotos2022/encabezado_4.png)">
>           </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
        
        <!-- BEGIN: TITULO -->
        <div id="c-isotope-anchor-1" class="c-content-box c-size-md c-bg-img-center" >
            <div class="c-content-title-1">
                <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">RIFA</h3>
                <div class="c-line-center c-theme-bg"></div>
                <p class="c-font-center c-font-bold c-font-uppercase c-margin-b-30" >¡Seguro que estás deseando de poder disfrutar de algunos de estos premios!</p>  
                
            </div>
        </div>
        <!--- END: TÍTULO -->

        <!-- BEGIN: PAGE CONTENT --> 
        <!-- BEGIN: CONTENT/TABS/TAB-1 -->
            <!-- BEGIN: RIFA -->
                <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(assets/base/img/volunfair/web/rifa.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="animated c-bordered c-content-media-1 flash row wow rifaTab">
                                    <!--<form id="laliamos" name="laliamos" method="POST" class="form-register" enctype="multipart/form-data">	
                                        <h2 class="titleRifa">Mirar mi número de la rifa:</h2><br>
                                        <label>Introduce tu teléfono: <input type="tel" name="telefono" placeholder="Número de teléfono"></label>
                                        <input type="submit" name="recuperar" value="recuperar" class="buttonRifa"><br><br>
                                    </form>
                                    <?php
                                        if(isset($_POST['recuperar'])){
                                            $telefono =$_POST["telefono"];		
                                            $result =  $sql->CONNECTION->query("SELECT  num_rifa FROM sorteorifa WHERE movil_rifa='$telefono'");
                                            while ($row = $result->fetch_assoc()) {
                                                echo "El número de teléfono: <strong>".$telefono."</strong> tiene asignado el número de la rifa: <strong>".$row['num_rifa']."</strong><br>";
                                            }	
                                        }
                                    ?>             
                                    <br/>  -->             
                                    <p class="textResRifa"> Participar en la rifa es <b>muy sencillo</b>. Cada papeleta cuesta <b>1 euro</b> y puedes adquirirla por estas tres vías:
                                        <ul>
                                            <li>En la feria, <b>forma presencial</b> (efectivo o Bizum)</li>
                                            <li><b>Bizum</b> al número +34 657 81 29 16 (Ana)</li>
                                            <li><b>Transferencia bancaria</b> a nuestro número de cuenta ES85 3025 0003 9414 3335 5605</li>
                                        </ul>
                                        Si compras la rifa telemáticamente, debes especificar en el asunto <b>tu número de teléfono</b> para que te enviemos por WhatsApp y puedas consultar aquí tu papeleta.<br /><br />
                                        ¡Mucha suerte!</p>
                                    <br/><br/>                               
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div> 
        
        <br /><br />            
              
        <div class="c-container">            
            <!-- BEGIN: FORMULARIO -->
            <div class="row">
                <form class="formulario" method="post"
                    <div class="c-content">
                        <!-- BEGIN:MOSTRAR TABLA RIFA -->
                        <div class="col-md-12 c-font-center c-font-bold c-margin-b-30">                            
                            <?php
                                // --- Abrir la base de datos con usuario visitante
                                $sql = Abrir_base();
                                // cambiado por *
                                $result = $sql->Select(" SELECT `id_rifa`, `articulo_rifa`,`descripcion_rifa`, `foto_rifa`, `empresa_rifa` FROM `rifa` ORDER BY `importancia_rifa` DESC");

                                // --- Mostrar por pantalla el listado de posibles destinos
                                if($result === false){
                                    throw new Exception('Error en la consulta');
                                } 
                                else {
                                    echo '<div class="row">'."\n";
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '	<div class="col-md-3 c-content-media-1 c-bordered wow fadeIn animated">'."\n";
                                        // --- Solo ponemos imagen si no está vacía
                                        if($row['foto_rifa']) {echo '		<img width=100% src = "./assets/base/img/volunfair/rifa/'.$row['foto_rifa'].'" />'."\n";}
                                        echo '		<p> <b>'.$row['articulo_rifa'].'</b> de '.$row['empresa_rifa'];
                                        //echo '		<br>'."\n";
                                        //echo '		<b>Descripci&oacute;n</b>: '.htmlspecialchars(stripslashes($row['descripcion_rifa']))."\n";
                                        echo '		</p>'."\n";
                                        echo '	</div>'."\n";
                                    }
                                    echo '</div>'."\n";
                                }
                            ?> 
                        </div>
                        <!-- END: MOSTRAR TABLA RIFA -->
                    </div>
                </form>
            </div>
            <!-- END: FORMULARIO -->
        </div>
        </div>		
        <!-- END: PAGE CONTENT -->
    </div>
    <!-- END: PAGE CONTAINER -->
        
<?php
    // --- Escribimos el pie de página (el archivo de configuración ya está incluido)
    escribe_pie();
?>