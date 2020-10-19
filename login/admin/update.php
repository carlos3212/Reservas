
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
	<h4><H3>Menu</H3></h4>
					<ul>
						       <li><a href="/web/login/cuenta.php">Home</a></li> 
                               <li><a href="retrieve.php" >Registro </a></li>
							
					</ul>
					</div>
					<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO A ECODEUP</h1>
	</div>
</header>
<?php include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE mison_vision set userId='" . $_POST['userId'] . "', mision='" . $_POST['mision'] . "', vision='" . $_POST['vision'] ."' WHERE userId='" . $_POST['userId'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM mison_vision WHERE userId='" . $_GET['userId'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div> 
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>ID</label></td>
<td><input type="hidden" name="userId" class="txtField" value="<?php echo $row['userId']; ?>">
<input type="text" name="userId" class="txtField" value="<?php echo $row['userId']; ?>"></td>
</tr>
<tr>
<td><label>Mision</label></td>
<td>
<textarea  name="mision" class="txtField" rows="10" cols="40"  value="<?php echo $row['mision']; ?>"></textarea>
</td>
</tr>
<td><label> Vision </label></td>
<td>
<textarea  name="vision" class="txtField" rows="10" cols="40"  value="<?php echo $row['vision']; ?>"></textarea>
</td>
</tr>

<td colspan="2"><input type="submit" name="submit" value="Submit" class="buttom"></td>
</tr>
</table>
</div>
</form>
</body>
</html> 