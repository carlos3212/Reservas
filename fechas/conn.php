<?php
	$conn=mysqli_connect("localhost", "root", "", "renta");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>