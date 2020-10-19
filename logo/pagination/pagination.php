<?php

	include("conn.php");
	
	$query=mysqli_query($conn,"select count(id_anuncio) from `logo`");
	$row = mysqli_fetch_row($query);

	$rows = $row[0];
	
	$page_rows = 10;

	$last = ceil($rows/$page_rows);


	$pagenum = 1;


	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
	
	$nquery=mysqli_query($conn,"select * from `logo`  WHERE id_anuncio = '1'  $limit");




?>