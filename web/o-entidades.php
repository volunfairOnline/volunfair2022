<?php 

// --- Archivo con las funciones de configuración (cabeceras, pie, ...)
include ('./scripts/o-config.php');

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
			<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background:#515151">
                 <!--<div class="container">
				 
                    <div class="c-page-title c-pull-left">
                    	  <p class="c-font-uppercase c-font-bold c-font-white c-font-25 c-font-slim">Quiénes Somos</p>
                        <h4 class="c-font-white c-font-thin c-opacity-07"> Conócenos mejor </h4>
                    </div>
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
                                <p class="c-font-center c-font-bold c-font-uppercase c-margin-b-30">¡Selecciona tus intereses y encuentra tus entidades sociales más afines!</p>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <div class="c-container">
                  
                    <div class="row">
                        <div class="container">
                              
                            <div class="col-md-12 c-center btn btn-lg btn-outline-secondary">
                                <a href="#" id="alternar-panel-oculto">Buscador</a>
                            </div>
                            <div id="panel-oculto"  class="col-md-4" style="display: none;">
                            
                                <!-- BEGIN: FORMULARIO -->
                                <form class="formulario" method="post">
                                    <!-- BEGIN: LUGARES DE VOLUNTARIADO -->
                                    <div class="col-md-6 c-font-center c-font-bold c-font-uppercase c-margin-b-30">
                                        
                                        <div class="checkbox">
                                            <p>¿A qué lugar te gustaría ir?</p>
                                            
                                            <?php
                                                // --- Abrir la base de datos con usuario visitante
                                                $sql = Abrir_base();
                                                $result = $sql->Select(" SELECT `id_voluntariado`, `pais_lugar` FROM `lugar`");
                                                
                                                // --- Mostrar por pantalla el listado de posibles destinos
                                                if($result === false){
                                                    throw new Exception('No se ha podido realizar la consulta.');
                                                } else {
                                                    while($row = mysqli_fetch_array($result)) {
                                                        echo ('<label><input type="checkbox" value="'.htmlspecialchars(stripslashes($row['id_voluntariado'])).'" name="lugar" id="lugar" />'.htmlspecialchars(stripslashes($row['pais_lugar'])).'</label><br />');
                                                    }
                                                }
                                            ?>									
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- END: LUGARES DE VOLUNTARIADO -->

                                    <!-- BEGIN: TIPOS DE VOLUNTARIADO -->
                                    <div class="col-md-6 c-font-center c-font-bold c-font-uppercase c-margin-b-30">
                                        
                                        <div class="checkbox">
                                            <p>¿Qué tipo de proyecto te gustaría hacer?</p>
                                            <?php
                                                // --- Mostrar por pantalla el listado de posibles tipos de voluntariado
                                                $result = $sql->Select ("SELECT `id_proyecto`, `tipo_proyecto` FROM `proyecto`");
                                                while($row = mysqli_fetch_array($result)) {
                                                    echo '<label><input type="checkbox" value="'.htmlspecialchars(stripslashes($row['id_proyecto'])).'" name="tipo" id="tipo" />'.htmlspecialchars(stripslashes($row['tipo_proyecto'])).'</label><br />';
                                                }   
                                            ?>					
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- END: TIPOS DE VOLUNTARIADO -->
                                    
                                    <!-- BEGIN: BOTÓN ENVIAR -->
                                    <div class="col-md-12 c-font-center c-font-bold c-font-uppercase c-margin-b-30">
                                        <input type="button" value="Enviar" onClick="buscar();" />
                                    </div>
                                    <!-- END: BOTÓN ENVIAR -->

                                </form>
                                <!-- END: FORMULARIO -->
                            </div>

                            <!-- BEGIN: RESULTADOS DE LA BÚSQUEDA (Inicialmente vacío) -->
                            <div class="col-md-12" id="ongs">
                            </div>
                            <!-- END: RESULTADOS DE LA BÚSQUEDA -->
                        
                        </div>
                    </div>
                    

                    
                    
                    
				</div>			
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script>

            // --- Función que llama a buscar-ong.php, archivo que hace la consulta a la base de daos y devuelve el texto a escribir (mensaje)
			function buscar() {

                /* Cogemos los datos de lugar del formulario */
                var lugar = [];
                $.each($("input[name='lugar']:checked"), function(){
                    lugar.push($(this).val());
                });
                // --- Le damos formato de consulta MySQL (si no está vacío)
                if (lugar.length > 0)
                    lugar = " (id_voluntariado = " + lugar.join(" OR id_voluntariado = ") + ")";

                /* Cogemos los datos de tipo de voluntariado del formulario */
                var tipo = [];
                $.each($("input[name='tipo']:checked"), function(){
                    tipo.push($(this).val());
                });
                // --- Le damos formato de consulta MySQL (si no está vacío)
                if (tipo.length > 0) {
                    tipo = "(id_proyecto = " + tipo.join(" OR id_proyecto = ") + ")";
                    // --- Si se ha seleccionado lugar, hay que preceder la condición de tipo por un AND para que funcione la consulta MySQL
                    if (lugar.length > 0)
                        tipo = 'AND ' + tipo;
                }

                /* Enviamos los datos a la página PHP encargada de procesarlos y esta nos devuelve el texto a escribir en el div id="ongs" */
				if (lugar != "" || tipo != "") {
					$.post("./mysql/o-buscar-ong.php", {valorBusqueda: [lugar, tipo]}, function(mensaje) {
						$("#ongs").html(mensaje);
					}); 
				} else { 
					$("#ongs").html('');
                }
			};

            // --- Función que pone el texto cuando aún no ha habido resultados d ela búsqueda
			function init() {
				$("#ongs").html('');
                $.post("./mysql/o-buscar-ong.php", {valorBusqueda: [,]}, function(mensaje) {
						$("#ongs").html(mensaje);
                    });
                $('#alternar-panel-oculto').toggle(
                    /* 
                    Primer click.
                    Función que descubre un panel oculto
                    y cambia el texto del botón.
                    */
                    function(e){
                        $('#panel-oculto').slideDown();
                        $(this).text('Cerrar el buscador');
                        // --- Hacemos la parte con las ONGs más pequeña
                        $('#ongs').removeClass('col-md-12');
                        $('#ongs').addClass('col-md-8');
                        e.preventDefault();
                    },
                    
                    // Separamos las dos funciones con una coma
                    /* 
                    Segundo click.
                    Función que oculta el panel
                    y vuelve a cambiar el texto del botón.
                    */
                    function(e){
                        $('#panel-oculto').slideToggle();
                        //https://www.tutorialrepublic.com/faq/how-to-create-jquery-slide-left-and-right-toggle-effect.php
                        $(this).text('Mostrar el buscador');
                        // --- Hacemos la parte con las ONGs más grande
                        $('#ongs').removeClass('col-md-8');
                        $('#ongs').addClass('col-md-12');
                        e.preventDefault(); 
                    }
                );     
			}
            
            // --- Función que se ejecuta al cargarse la página (llama a init)
            $(document).ready(init);
        </script>
<?php

// --- Escribimos el pie de página (el archivo de configuración ya está incluido)
escribe_pie();

?>