<?php
include_once 'database.php';
if(isset($_POST['pago']))
{
// variables for input data

$username = $_POST['username'];
$cardNumber = $_POST['cardNumber'];
$cardNumber = $_POST['mes'];
$cardNumber = $_POST['anio'];
// sql query for inserting data into database

mysqli_query($conn,"insert into pago (username, cardNumber, mes , anio ) values ('$username','$cardNumber','$mes','$anio')") or die(mysqli_error());
echo "<p align=center>Pago Exitoso.</p>";
}
?> 
