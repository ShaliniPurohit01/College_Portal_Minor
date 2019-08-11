<?php
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$id=$_GET['id'];
	$sql="select * from event where id='$id'";
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$eve=$row[1];
		$desp=$row[2];
		
	}
?>
<form action="final_event_update.php" method="post">
	<table border=1 align=center>
		<tr align=center>
			<td>ID</td>
			<td>
				<input type="text" value="<?php echo $id; ?>" name='id'>
			</td>
		</tr>
		<tr align=center>
			<td>Event</td>
			<td>
				<input type="text" value="<?php echo $eve; ?>" name='event'>
			</td>
		</tr>
		
		
		<tr align=center>
			<td>Description</td>
			<td>
				<input type="text" value="<?php echo $desp; ?>" name='desp'>
			</td>
		</tr>
		
		
		<tr align=center>
			<td colspan=2>
				<input type="submit" value="Update" >
			</td>
		</tr>


		
	</table>
</form>

	