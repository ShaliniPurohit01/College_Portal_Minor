<?php
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$id=$_GET['id'];
	$sql="select * from notice where id='$id'";
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$desp=$row[1];
		$date=$row[2];
		$file=$row[3];
		
	}
?>
<form action="final_notice_update.php" method="post">
	<table border=1 align=center>
		<tr align=center>
			<td>ID</td>
			<td>
				<input type="text" value="<?php echo $id; ?>" name='id'>
			</td>
		</tr>
		<tr align=center>
			<td>Description</td>
			<td>
				<input type="text" value="<?php echo $desp; ?>" name='desp'>
			</td>
		</tr>
		
		<tr align=center>
			<td>Date</td>
			<td>
				<input type="text" value="<?php echo $date; ?>" name='date'>
			</td>
		</tr>
		
		<tr align=center>
			<td> File Name</td>
			<td>
				<input type="text" value="<?php echo $file; ?>" name='file'>
			</td>
		</tr>
		

		
		<tr align=center>
			<td colspan=2>
				<input type="submit" value="Update" >
			</td>
		</tr>


		
	</table>
</form>

	