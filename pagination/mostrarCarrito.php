<?php 
    include "global/config.php";
    include "carrito.php";
    include "templates/cabecera.php";
?>
<br>
<h3>Lista del Carrito</h3>
<?php if(!empty($_SESSION['carrito'])) { ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%" class="text-center">Dias</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%">--</th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0;?>
        <?php foreach($_SESSION['carrito'] as $indice => $producto): ?>
        <tr>
            <td width="40%"><?= $producto['nombre'] ?></td>
            <td width="15%" class="text-center"><?= $producto['cantidad'] ?>
                
                                 </td>
            <td width="20%" class="text-center">$<?= $producto['precio'] ?></td>
            <td width="20%" class="text-center">$<?= number_format($producto['cantidad'] * $producto['precio'], 2) ?></td>
            <td width="5%">
                <form action="" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= openssl_encrypt($producto['id'], COD, KEY) ?>">
                    <button class="btn btn-danger" name="btnAccion" value="Eliminar" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php $total = $total + ($producto['cantidad'] * $producto['precio']);?>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total, 2); ?></h3></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="5">
               

  

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">




<div class="row">
	<aside class="col-sm-12">

<article class="card">
<div class="card-body p-5">






<article class="card">
<div class="card-body p-5">

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
		<i class="fa fa-credit-card"></i> Credit Card</a></li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
		<i class="fab fa-paypal"></i>  Paypal</a></li>
	
</ul>

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">
	
<form method="post" action="process.php">
	<div class="form-group">
		<label for="username">Full name (on the card)</label>
		<input type="text" class="form-control" name="username" placeholder="" required="">
	</div> <!-- form-group.// -->

	<div class="form-group">
		<label for="cardNumber">Card number</label>
		<div class="input-group">
			<input type="text" class="form-control" name="cardNumber" placeholder="">
			<div class="input-group-append">
				<span class="input-group-text text-muted">
					<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
					<i class="fab fa-cc-mastercard"></i> 
				</span>
			</div>
		</div>
	</div> <!-- form-group.// -->

	<div class="row">
	    <div class="col-sm-8">
	        <div class="form-group">
	            <label><span class="hidden-xs">Expiration</span> </label>
	        	<div class="input-group">
	        		<input type="number" class="form-control" placeholder="MM" name="mes">
		            <input type="number" class="form-control" placeholder="YY" name="anio">
	        	</div>
	        </div>
	    </div>
	    <div class="col-sm-4">
	        <div class="form-group">
	            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
	            <input type="number" class="form-control" required="">
	        </div> <!-- form-group.// -->
	    </div>
	</div> <!-- row.// -->
	<button class="subscribe btn btn-primary btn-block" type="submit" name="pago"> Confirm  </button>

	</form>
</div> <!-- tab-pane.// -->
<div class="tab-pane fade" id="nav-tab-paypal">
<p>Paypal is easiest way to pay online</p>
<p>
<button type="button" class="btn btn-primary"> <i class="fab fa-paypal" ><a href="https://www.paypal.com/ec/signin"></i> Log in my Paypal </button></a>
</p>
<p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. </p>
</div>

</div> <!-- tab-content .// -->

</div> <!-- card-body.// -->
</article> <!-- card.// -->


	</aside> <!-- col.// -->
</div> <!-- row.// -->

</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">



        </tr>
    </tfoot>
</table>
<?php } else { ?>
    <div class="alert alert-success" role="alert">
        No hay productos en el carrito...
    </div>
<?php } ?>
<?php include "templates/pie.php"; ?>