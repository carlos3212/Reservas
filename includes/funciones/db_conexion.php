<?php 
    $conn= new mysqli('localhost','root','','renta');

    if($conn->connect_error){
        echo $error->$conn->connect_error;
    }

?>