<?php include('pagination.php'); ?>

	<div class="">
	<table width="100%" class="table table-striped table-bordered table-hover">
	
		
		<?php
			while($crow = mysqli_fetch_array($nquery)){
			?>
			  
			 
                    <div>
                        <?php
                         echo '<img id="pictures" src="img/' . $crow['imagen_principal'] .'" alt="Imagen Anuncio 1" />';
                        ?>
                    </div>
                   
                    </div>
                </article>

                
				
			<?php
			}		
		?>
		
	</table>
	
	<div class="col-lg-2">
	</div>
	</div>
	

	
           