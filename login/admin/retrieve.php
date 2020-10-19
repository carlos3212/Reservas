<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM mison_vision");
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">


	<div class="w3-container w3-black">
	<h4><H3>Menu</H3></h4>
	<ul>
						       <li><a href="../cuenta.php">regresar</a></li> 
							
					</ul>
					</div>
					<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO A ECODEUP</h1>
	</div>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<p><h3>Id</h3></p>
<p><?php echo $row["userId"]; ?></P>
<h3>Mision</h3>
<p><?php echo $row["mision"]; ?></p>
<h3>Vision</h3>
<p><?php echo $row["vision"]; ?></p>

</tr>
<?php
$i++;
}
?>
</table>
</body>
</html> 