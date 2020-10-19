<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<header>

	<div class="w3-container w3-black">
	
					<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO A ECODEUP</h1>
	</div>
</header>
<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tu cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
	<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO A TU CUENTA EN ECODEUP</h1>
	</div>
	<ul>
	<li><a href="admin/update.php">Update</a></li>
	<li><a href="admin/retrieve.php" >Registro </a></li>
	</ul>
	<p></p>

	<form class="w3-container" action="controller_login.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>
	</form>
</body>
</html>