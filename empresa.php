<?php include_once 'includes/templates/header.php'; ?>
<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">
<?php
include_once 'login/admin/database.php';
$result = mysqli_query($conn,"SELECT * FROM mison_vision");
?>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>

<tr class="<?php if(isset($classname)) echo $classname;?>">
<hr></hr>
<p><h1>Mision</h1></p>
<hr></hr>
<p></p>
<P><h3><?php echo $row["mision"]; ?></h3></P>
<p></p>
<hr></hr>
<p></p>
<p><h1>Vision</h1></p>
<hr></hr>
<p></p>
<p><h3><?php echo $row["vision"]; ?></h3></p>

</tr>


<?php
$i++;
}
?>


</div>
</div>

<?php include_once 'includes/templates/footer.php'; ?>