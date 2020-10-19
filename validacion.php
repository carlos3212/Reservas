<?php include_once 'includes/templates/header.php'?>

<h1>Resumen de registro</h1>


<?php 
if(isset($_POST['submit'])):
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$email=$_POST['email'];
$extras=$_POST['extras'];
$servicios=$_POST['servicios'];
include_once 'includes/funciones/funciones.php';
$adicionales=datos_json($extras, $servicios);
$fecha_registro=date('Y-m-d H:i:s');
try{
require_once('includes/funciones/db_conexion.php');
$stmt=$conn->prepare('INSERT INTO cotizaciones (nombre,ciudad,email,adicionales,fecha_registro) VALUES(?,?,?,?,?)');
$stmt->bind_param('sssss',$nombre,$ciudad,$email,$adicionales,$fecha_registro);
$stmt->execute();
$stmt->close();
$conn->close();
header('Location:validacion.php?exitoso=1');
}
catch(\Exception $e){
    echo $e->getMessage();
} 
endif;
?>

<?php include_once 'includes/templates/header.php' ?>

<h1>Resumen de registro</h1>

<?php 
if(isset($_GET['exitoso'])):
if($_GET['exitoso']==1):
echo '<h3>Registro exitiso </h3>';
endif;
endif;
?>


<?php include_once 'includes/templates/footer.php';?>