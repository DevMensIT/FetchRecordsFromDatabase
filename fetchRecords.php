<?php 
	include('connect.php');
	$sel= 'SELECT * FROM tbl_test';
	$qur= mysql_query($sel);
	//$row = mysql_fetch_array($qur);
	//print_r($row);
	?>

	<table border='1'>
	<?php
	while($row = mysql_fetch_array($qur)) //WHILE LOOP FOR FETCH ALL RECORDS ONE BY ONE
	{
	?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['city']; ?></td>
			<td><?php echo $row['phone']; ?></td>
		</tr>
	<?php	
	}
?>
	</table>