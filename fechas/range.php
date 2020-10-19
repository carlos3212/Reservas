<?php
	require'conn.php';
	if(ISSET($_POST['search'])){
	
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($conn, "SELECT * FROM `member` WHERE `date_finish` BETWEEN current_date AND '$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['Detalle']?></td>
		<td><?php echo $fetch['Informacion']?></td>
		<td><?php echo $fetch['date_submit']?></td>
		<td><?php echo $fetch['date_finish']?></td>
		
	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Registros no Existen</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `member` GROUP BY date_finish ") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['Detalle']?></td>
		<td><?php echo $fetch['Informacion']?></td>
		<td><?php echo $fetch['date_submit']?></td>
		<td><?php echo $fetch['date_finish']?></td>
	</tr>
<?php
		}
	}
?>
