<?php
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$id=$_GET['id'];
	$sql="select * from faculty where id='$id'";
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$name=$row[1];
		$fn=$row[2];
		$gender=$row[3];
		$mob=$row[4];
		$DOB=$row[5];
		$email=$row[6];
		$cat=$row[7];
		$sub=$row[8];
		$edu=$row[9];
		$oth=$row[10];

	}
?>
<form action="final_faculty_update.php" method="post">
	<table border=1 align=center>
		<tr align=center>
			<td>ID</td>
			<td>
				<input type="text" value="<?php echo $id; ?>" name='id'>
			</td>
		</tr>
		<tr align=center>
			<td>Name</td>
			<td>
				<input type="text" value="<?php echo $name; ?>" name='name'>
			</td>
		</tr>
		<tr align=center>
			<td>Fathers Name</td>
			<td>
				<input type="text" value="<?php echo $fn; ?>" name='fathers_name'>
			</td>
		</tr>
		
		<tr align=center>
			<td>Gender</td>
			<td>
				<input type="text" value="<?php echo $gender; ?>" name='gender'>
			</td>
		</tr>
		
		<tr align=center>
			<td>Mobile Number</td>
			<td>
				<input type="text" value="<?php echo $mob; ?>" name='mobile'>
			</td>
		</tr>
		
		<tr align=center>
			<td>DOB</td>
			<td>
				<input type="text" value="<?php echo $DOB; ?>" name='DOB'>
			</td>
		</tr>
		<tr align=center>
			<td>Email Address</td>
			<td>
				<input type="text" value="<?php echo $email; ?>" name='email'>
			</td>
		</tr>
		<tr align=center>
			<td>Category</td>
			<td>
				<input type="text" value="<?php echo $cat; ?>" name='cat'>
			</td>
		</tr>
		
		<tr align=center>
			<td>Subject</td>
			<td>
				<input type="text" value="<?php echo $sub; ?>" name='subject'>
			</td>
		</tr>
		<tr align=center>
			<td>Education Qualification</td>
			<td>
				<input type="text" value="<?php echo $edu; ?>" name='educaion'>
			</td>
		</tr>
		<tr align=center>
			<td>Other Experiences</td>
			<td>
				<input type="text" value="<?php echo $oth; ?>" name='other'>
			</td>
		</tr>
		
		
		<tr align=center>
			<td colspan=2>
				<input type="submit" value="Update" >
			</td>
		</tr>
		
	</table>
</form>

	