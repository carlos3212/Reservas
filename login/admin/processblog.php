
<?php
include_once 'database.php';
if(isset($_POST['btn-save']))
{
// variables for input data

$comentario = $_POST['comentario'];


// sql query for inserting data into database

mysqli_query($conn,"insert into blog (comentario) values ( '$comentario')") or die(mysqli_error());
echo "<p align=center>Gracias por tu aporte.</p>";

}



?> 

<?php
header("Status: 301 Moved Permanently");
header("Location: http://localhost:8080/web/blog.php");
exit;
?>