<?php
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$id=$_GET['id'];
	$sql="select * from subject where id='$id'";
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$cate=$row[1];
		$sch=$row[2];
		$cla=$row[3];
		$sec=$row[4];
		$sub=$row[5];
	}
?>
<form action="final_subject_update.php" method="post">
	<table border=1 align=center>
		<tr align=center>
			<td>ID</td>
			<td>
				<input type="text" value="<?php echo $id; ?>" name='id'>
			</td>
		</tr>
		<tr align=center>
			<td>Course</td>
			<td>
				<input type="text" value="<?php echo $cate; ?>" name='course'>
			</td>
		</tr>
		<tr align=center>
			<td>Scheme</td>
			<td>
				<input type="text" value="<?php echo $sch; ?>" name='scheme'>
			</td>
		</tr>
		
		<tr align=center>
			<td>Classname</td>
			<td>
				<input type="text" value="<?php echo $cla; ?>" name='classname'>
			</td>
		</tr>
		
		<tr align=center>
			<td>Section</td>
			<td>
				<input type="text" value="<?php echo $sec; ?>" name='section'>
			</td>
		</tr>
		
		<tr align=center>
			<td>Subject</td>
			<td>
				<input type="text" value="<?php echo $sub; ?>" name='subject'>
			</td>
		</tr>
		
		
		<tr align=center>
			<td colspan=2>
				<input type="submit" value="Update" >
			</td>
		</tr>
		
	</table>
</form>

	