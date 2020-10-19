

<?php include_once 'includes/templates/header.php'; ?>
	        
	        
			<!-- breadcrumb -->
<div class="w3_breadcrumb">
<div class="breadcrumb-inner">	
<ul>
	<li><a href="index.html">Home</a><i>/</i></li>
	
	<li>Single</li>
</ul>
</div>
</div>
<!-- //breadcrumb -->
<!--/content-inner-section-->
	<div class="w3_content_agilleinfo_inner">
			<div class="container">
			  
			   <div class="latest-news-agile-info">
					   <div class="col-md-8 latest-news-agile-left-content">
						
							
						
							<div class="response">

				<h4>Responses</h4>
				<?php
include_once 'login/admin/database.php';
$result = mysqli_query($conn,"SELECT * FROM blog");
?>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="";
else
$classname="";
?>
				<div class="media response-info">
					<div class="media-left response-text-left">
						<a href="#">
							<img class="media-object" src="images/user.jpg" alt="">
						</a>
						
						<h5><a href="#">Usuario</a></h5>
					</div>
					<div class="media-body response-text-right">
				
					<?php if(isset($classname)) echo $classname;?>

<p><?php echo $row["comentario"]; ?></p>
<hr></hr>




						<ul>
							<li>Fecha: <?php echo $row["fecha"]; ?></li>
							
						</ul>
						

		
			</div>
			<?php
$i++;
}
?>
	</div>
<!--//content-inner-section-->
<a href="login/admin/insertblog.php"> <h3>** Ingresar Comentario ** </h3></a>
		
		
		
	
