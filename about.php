<?php include_once 'includes/templates/header.php'; ?>

    <!-- breadcrumb -->
	<script text="text/javascript" src="JS/script.js"></script>
    <script text="text/javascript" src="JS/jquey-3.5.1.slim.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script text="text/javascript" src="JS/jquery.animateNumber.js"></script>
    <script text="text/javascript" src="JS/script_jquery.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="JS/lightbox-plus-jquery.min.js"></script>
	<link rel="stylesheet" href="CSS/lightbox.min.css">

<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="container">
					<section class="seccion-principal">
        <div class="sidebar centrar-texto">
            <h2>Menu</h2>
            <ul>
                <li>
                    <input class="boton boton-amarillo" type="button" name="btn_buscar" value="buscar" id="btn_buscar" />
                </li>
                <li id="busqueda">
                    <input type="text" name="buscar" placeholder="Opciones a buscar" id="buscar">
                    <div class="error"></div>
                    <input class="boton boton-opciones" type="button" name="buscar_op" value="Obtener" id="buscar_op" />
                </li>
                <li>
                    <input class="boton boton-amarillo" type="button" name="cotizar_ob" value="cotizar" id="cotizar_ob" /> </li>
            </ul>
        </div>
        <div>
            <main class="principal">

           

            <article id="datos_cotizar" class="">
                    <form action="validacion.php" method='post'>
                        <ul class="listado">
                            <li>
                                <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" />
                            </li>
                            <li>        
                                <select name="ciudad" id="ciudad">
                                            <option value="0">Elija su Localidad</option>
                                            <option value="Quito">Quito</option>
                                            <option value="Guayaquil">Guayaquil</option>
                                            <option value="Cuenca">Cuenca</option>
                                        </select>
                            </li>
                            <li>
                                <input type="email" name="email" id="email" placeholder="user@gamil.com" />
                            </li>
                            <li>
                                Extras: 
                                <input type="checkbox" name="extras[]" id="picina" value="Picina">Picina
                                <input type="checkbox" name="extras[]" id="parqueadero" value="Parqueadero" /> Parqueadero
                                <input type="checkbox" name="extras[]" id="wifi" value="WIFI" /> WIFI
                            </li>
                            <li>
                                Servicios:
                                <input type="checkbox" name="servicios[]" id="tv_cable" value="tv_cable">TV Cable
                                <input type="checkbox" name="servicios[]" id="bar" value="bar">Servicio de Bar
                                <input type="checkbox" name="servicios[]" id="hidromasaje" value="hidromasaje">Hidromasaje
                                <input type="checkbox" name="servicios[]" id="sauna" value="sauna">Sauna
                            </li>
                            <li>
                                <input type="hidden" name="precio" id="precio" value="valor_a_pagar">
                                <input type="submit" name="submit" id="enviar" value="ENVIAR">
                            </li>
                        </ul>
                        <div class="error"></div>
                    </form>
                </article>
                <?php 
                    if(isset($_GET['exitoso'])):
                        if($_GET['exitoso']==1):
                            echo '<h3> Registro exitoso </h3>';
                        endif;
                    endif;

                ?>
               <?php 
                    include_once 'pagination/index.php';
               ?>
                  
            </main>

        </div>

    </section>
    <div class='footer-contenido datos_valores centrar-texto'>
        <ul>
            <li>
                <p id="clientes" class="valores">
                    <p><br>clientes</li>
            <li>
                <p id="viajes" class="valores">
                    <p><br>viajes</li>
            <li>
                <p id="paquetes" class="valores">
                    <p><br>paquetes</li>
            <li>
                <p id="promociones" class="valores"></p><br>promociones</li>
        </ul>

    </div>
    
						

			<?php include_once 'includes/templates/footer.php'; ?>