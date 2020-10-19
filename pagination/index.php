<?php include('pagination.php'); ?>

	<div class="">
    <div id="pagination_controls">
	<?php echo $paginationCtrls; ?></div>
	</div>
	<table width="100%" class="table table-striped table-bordered table-hover">
	
		
		<?php
			while($crow = mysqli_fetch_array($nquery)){
			?>
			  
			  <article id="articulo" class="anuncios">
                    <div>
                        <?php
                         echo '<img id="pictures" src="img/' . $crow['imagen_principal'] .'" alt="Imagen Anuncio 1" />';
                        ?>
                    </div>
                    </div>
                    <div>
                        <p>
                        <?php
                            echo '<h3 id="etiqueta1">'. $crow['nombre'] . '</h3>';
                            ?>
                        </p>
                        <p>
                        <?php
                            echo '<h4>' . $crow['descripcion'] .'</h4>';
                            ?>
                        </p>
                        <ul class="listado">
                            <li>
                                <img src="img/habitacion.png" alt="imagen estacionamiento">
                            </li>
                            <li>
                                <?php
                                echo '<h4>' . $crow['dormitorio'] . '</h4>';
                                ?>
                            </li>
                            <li>
                                <img src="img/bano.png" alt="Imagen WC">
                            </li>
                            <li>
                                <?php
                                echo '<h4>' . $crow['baño'] . '</h4>';
                                ?>
                            </li>
                            <li>
                                <img src="img/horno.png" alt="Imagen CO">
                            </li>
                            <li>
                            
                                <?php
                                echo '<h4>' . $crow['cocina'] . '</h4>';
                                ?>
                            </li>
                            <li>
                                <img src="img/nadador.png" alt="Imagen CO">
                            </li>
                            <li>
                                <?php
                                echo '<h4>' . $crow['picina'] . '</h4>';
                                ?>
                            </li>
                        </ul>
                        <a class="boton boton-info" href="pagination/indexc.php">Informacion</a>
                    </div>
                </article>

                
				
			<?php
			}		
		?>
		
	</table>
	<div id="pagination_controls">
	<?php echo $paginationCtrls; ?></div>
	</div>
	<div class="col-lg-2">
	</div>
	</div>
	

	
           