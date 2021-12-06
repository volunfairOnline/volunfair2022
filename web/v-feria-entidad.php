<?php

// --- Archivo con las funciones de configuración (cabeceras, pie, ...)
include ('./scripts/o-config.php');

session_start();
// --- Iniciar la clase de conexión a la base de datos
require_once('./mysql/MySQLHandler.class.php');     
require_once("./mysql/misconexiones.php"); 

// --- Abrir la base de datos con usuario visitante
$sql = Abrir_base();

//consulta de los paramétros para crear la pagina web de la ong

$id_recibido_ong = $_GET["id"];

//cambiar los nombre en función de la base de datos
$consulta_pagina_texto= "
SELECT
    nombre_ong as nombre,
    descripcion_ong as descripcion,
    voluntariado_ong as voluntariado,
    color_ong as color,
    logo_ong as logo,
    fondo_ong as imagen,
    web_ong as web,
    email_ong as email,
    facebook_ong as face,
    twitter_ong as twit,
    instagram_ong as insta,
    linkedin_ong as linked,
    video_ong as video,
    direccion_ong as direcc
FROM `ongs`
WHERE id_ong =" . $id_recibido_ong .";";

$consulta_pagina = $sql->Select($consulta_pagina_texto);

// --- Copiar la consulta en una matriz de filas
$fila_pagina = $sql->matrizFilas($consulta_pagina);

// --- Contar el numero de filas de la tabla y liberar la consulta
$nfilas_pagina = $sql->getNFilas($consulta_pagina);
mysqli_free_result($consulta_pagina);

// --- Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
if ($nfilas_pagina == 0) {
    $nombre="Caritas";
    $voluntariado="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu lacus metus. In arcu nisi, elementum sed finibus sit amet, malesuada non turpis. Sed non dolor tellus. Quisque ante lorem, faucibus in tellus eget, accumsan aliquet orci. Duis tristique bibendum ante et pharetra. Aliquam velit risus, convallis quis turpis ut, elementum sagittis diam. Phasellus quam odio, malesuada ut pretium vitae, lacinia et diam. Maecenas quis hendrerit orci, id ultrices elit. Suspendisse laoreet consequat sollicitudin. Nam diam urna, accumsan eu fringilla sed, tempus non magna.

    Sed laoreet iaculis mauris, vestibulum sodales sapien dapibus nec. Nulla ac accumsan purus, at fermentum magna. Fusce eu orci mattis urna maximus tristique. Phasellus eget elementum turpis. Etiam porta nisl at aliquam pretium. Duis neque nibh, fermentum sit amet aliquam eu, lacinia et quam. Nulla mauris orci, maximus at nulla at, finibus placerat elit. Morbi a finibus est, vitae molestie libero. Donec sit amet nulla maximus, lacinia odio nec, porta mi. Ut felis sem, pellentesque eu nibh in, dapibus semper eros. Fusce maximus ante gravida molestie feugiat. Fusce non felis nisl.
    
    Nullam eleifend tristique purus. Praesent porttitor pretium lectus, ac semper lacus varius vel. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eu tincidunt nunc. Aliquam ut consequat metus, et convallis libero. Nunc commodo dignissim massa. Morbi eget blandit sapien, vitae mollis nisl. Fusce imperdiet, velit tempor ornare tincidunt, mi odio posuere magna, at vulputate risus diam id ante. Morbi vehicula tellus et auctor aliquet.
    
    Donec rutrum lectus vitae nisi vehicula, at semper massa tincidunt. Phasellus tincidunt, neque a commodo tempor, enim ipsum iaculis nulla, vel elementum velit nunc quis lorem. Nullam nec elit eget mi mollis ullamcorper sit amet a nisl. Donec semper tincidunt metus vel lobortis. Nulla dapibus condimentum aliquam. Suspendisse id turpis in felis hendrerit consectetur in in quam. Vestibulum ornare sed risus ut dictum. Ut lacinia a tellus eget vestibulum. Nulla et aliquet orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam a elit risus. Nullam vel tellus eu lectus dignissim feugiat. Quisque posuere, justo sagittis blandit venenatis, ligula ante porttitor quam, eget bibendum mauris orci eu erat.";
    $color="#F01539";
    $logo="caritas.jpg";
    $imagen="PiesPortada.png";
    $web="https://www.volunfair.com/";
    $rsface="https://www.facebook.com/VolunFair/";
    $rstwit="https://twitter.com/volunfair";
    $rsinsta="https://www.instagram.com/volunfair/?hl=es";
    $rslinked="https://www.linkedin.com/company/volunfair/?originalSubdomain=es";
    $video="H_f5CpQbIV8";

// --- Si existe, mostramos sus datos
} else {
    $nombre=$fila_pagina[0]['nombre'];
    $descripcion=$fila_pagina[0]['voluntariado'];
    $voluntariado=$fila_pagina[0]['voluntariado'];
    $color=$fila_pagina[0]['color'] ?? '#515151';           // --- Si no hay color en la base de datos, se asigna #515151 por defecto
    $logo='logo_'.$fila_pagina[0]['logo'].'.jpg';
    $imagen=$fila_pagina[0]['imagen'];
    $web=$fila_pagina[0]['web'];
    $rsface=$fila_pagina[0]['face'];
    $rstwit=$fila_pagina[0]['twit'];
    $rsinsta=$fila_pagina[0]['insta'];
    $rslinked=$fila_pagina[0]['linked'];
    $video=$fila_pagina[0]['video'];
}

// --- Chapuza para las imágenes: se coge una aleatoria de esta matriz
$matrizImagenes = [
    'carpetaanteriores/flechazo.jpg',
    'carpetaanteriores/juntos.jpg',
    'carpetaanteriores/casacada.jpg',
    'carpetaanteriores/ballet.jpg',
    'carpetaanteriores/puente.jpg',
    'bosque.jpg',
    '09-40-54-seis-pares-zapatillas-viejas-desgastadas-superficie-madera-lila_116441-1606 (2).jpg',
    '09-42-54-antiguos-entrenadores-deportivos_266732-13215 (2).jpg',
    '09-49-59-zapatillas-grises-mesa-madera-negra_44073-97.jpg',
    'Zapas2.jpg'
];
$imagen = 'Fotos2021/'.$matrizImagenes[random_int(0, sizeof($matrizImagenes))];

// --- Escribimos las cabeceras
escribe_cabecera();

?>
        
    <!-- BEGIN: PAGE CONTAINER -->
        <?php
            echo '<div class="c-layout-page" style="background-color:#FFFFFF">'."\n";
        ?>
        
        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background:<?php echo $color; ?>">
            </div>
        <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->

        <!-- BEGIN PAGE CONTENT -->

            <!-- Logo ong -->
                <?php
                    echo '<div class="row">'."\n";
                        echo '  <div class="align-items-center">'."\n";
                            echo '	<div class="c-font-center col-md-3 c-content-media-1 ">'."\n";
                            echo '  <a title="Web '.$nombre.'" href="'.$web.'" target="_blank"><img width=75% src ="./assets/base/img/volunfair/ong2/'.$logo.'" /></a>'."\n";
                            echo '	</div>'."\n";
                            echo '	<div class="col-md-9">'."\n"; //No me termina de convencer el color c-bg-white
                                echo ' <h1 class="c-font-70 c-font-uppercase c-font-bold c-font-center">'.$nombre.'</h1>'."\n";
                            echo '	</div>'."\n";
                        echo'   </div>'."\n";
                    echo '	</div>'."\n";             
            echo '	</div>'."\n";
                ?>
            <!-- End:logo ong -->

            <!-- Imagen y descripción -->
                <?php
                if ($imagen!=NULL){
                    echo ' <div class="parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="./assets/base/img/volunfair/'.$imagen.'">'."\n";
                    echo '<div class="c-content-box c-size-md ">'."\n";
                        echo ' <div class="container">'."\n";
                            echo ' <div class="row">'."\n";
                                echo ' <div class="col-md-12">'."\n";
                                    echo ' <div class="c-content-media-1 c-bordered wow animated fadeInRight" style="min-height: 380px;">'."\n";
                                        echo ' <div class="c-content-title-1">'."\n";
                                            echo ' <h3 class="c-font-uppercase c-font-bold">Actividades</h3>'."\n";
                                            echo ' <div class="c-line-left c-theme-bg"></div>'."\n";
                                        echo ' </div>'."\n";
                                                
                                        echo ' <p>'."\n";
                                            echo ''.$voluntariado.' '."\n";
                                        echo ' </p>'."\n";
                
                                    echo ' </div>'."\n";
                                echo ' </div>'."\n";
                                        
                            echo ' </div>'."\n";
                        echo ' </div>'."\n";
                    echo ' </div>'."\n";
                    echo ' </div>'."\n";         
                } else {
                    echo '<div class="c-content-box c-size-md ">'."\n";
                        echo ' <div class="container">'."\n";
                            echo ' <div class="row">'."\n";
                                echo ' <div class="col-md-12">'."\n";
                                    echo ' <div class="c-content-media-1 c-bordered wow animated fadeInRight" style="min-height: 380px;">'."\n";
                                        echo ' <div class="c-content-title-1">'."\n";
                                            echo ' <h3 class="c-font-uppercase c-font-bold">Actividades</h3>'."\n";
                                            echo ' <div class="c-line-left c-theme-bg"></div>'."\n";
                                        echo ' </div>'."\n";
                                                
                                        echo ' <p>'."\n";
                                            echo ''.$voluntariado.' '."\n";
                                        echo ' </p>'."\n";
                
                                    echo ' </div>'."\n";
                                echo ' </div>'."\n";
                                        
                            echo ' </div>'."\n";
                        echo ' </div>'."\n";
                    echo ' </div>'."\n";
                }
                ?>
            <!-- End:Imagen y descripción -->

            <!-- Video -->
            <?php 

                if($video!=NULL){
                    echo ' <div class="c-content-box c-size-md c-bg-white c-content-media-1">'."\n";
                        echo ' <div class="container c-center embed-responsive embed-responsive-16by9 wow animated fadeInUp">'."\n";
                            echo ' <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/'.substr($video,-11).'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'."\n";
                        echo ' </div>'."\n";    
                    echo ' </div>'."\n";                   
                }
            ?>
            <!-- End:Video -->

            <!-- Web y RS -->
            <?php
            if($web!=NULL || ($rsface!=NULL || $rstwit!=NULL || $rsinsta!=NULL || $rslinked!=NULL)){
                echo ' <div class="c-content-box c-size-md c-bg-white">'."\n";
                echo ' <div class="row">'."\n";
                    echo ' <div class="c-center c-bg-white c-content-media-1">'."\n";
                        echo ' <div class="c-content-title-1 c-center">'."\n";
                            echo ' <h3 class="c-font-bold">También puedes contactar con la asociación a través de:</h3>'."\n";

                        echo '<ul class="c-center c-socials">'."\n";
                        echo ' <div class="c-center"'."\n";
                            $hayredes=0;
                            if($web!=NULL && ($rsface!=NULL || $rstwit!=NULL || $rsinsta!=NULL || $rslinked!=NULL)){
                                echo '<p><a href="'.$web.'" target="_blank">Visitar web de <strong>'.$nombre.'</strong></a> o sus redes sociales </p>'."\n";
                                $hayredes = 1;
                            } else if ($web==NULL){ //No hay web
                                echo '<p>Visitar redes sociales de '.$nombre.' </p>'."\n";
                                $hayredes = 1;
                            } else { // No hay redes sociales
                                echo '<p><a href="'.$web.'" target="_blank">Visitar web de <strong>'.$nombre.'</strong></a></p>'."\n";
                            }
                        echo ' </div>'."\n";

                            if($hayredes==1){
                                if($rsface!=NULL){
                                    echo '<a href="'.$rsface.'" target="blank">
                                    <i class="icon-social-facebook fa-2x"></i>
                                    </a>'."\n";
                                }
                                if($rstwit!=NULL){
                                    echo '<a href="'.$rstwit.'" target="blank">
                                    <i class="icon-social-twitter fa-2x"></i>
                                    </a>'."\n";
                                }
                                if($rsinsta!=NULL){
                                    echo '<a href="'.$rsinsta.'" target="blank">
                                    <i class="fab fa-instagram fa-2x"></i>
                                    </a>'."\n";
                                }
                                if($rslinked!=NULL){
                                    echo '<a href="'.$rslinked.'" target="blank">
                                    <i class="fab fa-linkedin fa-2x"></i>
                                    </a>'."\n";
                                }
                            }
                        echo '</ul>'."\n";

                        echo ' </div>'."\n";
                    echo ' </div>'."\n";
                echo ' </div>'."\n";
                echo ' </div>'."\n";
            }
            ?>

        
            <!-- End:Web y RS -->

        <!-- END PAGE CONTENT -->                

        <!-- END: PAGE CONTAINER -->
<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>