<?php
include_once 'database.php';
if(isset($_POST['btn-save']))
{
// variables for input data

$mision = $_POST['mision'];
$vision = $_POST['vision'];

// sql query for inserting data into database

mysqli_query($conn,"insert into mison_vision (mision, vision) values ('$mision','$vision')") or die(mysqli_error());
echo "<p align=center>Data Added Successfully.</p>";
}
?> 
