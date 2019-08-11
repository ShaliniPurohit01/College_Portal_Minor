<table border=1 width=80% align=center>
	<tr align=center>
		<td>ID</td>
		<td>Name</td>
		<td>Fathers Name</td>
		<td>Gender</td>
		<td>Mobile Number</td>
		<td>DOB</td>
		<td>Email Address</td>
		<td>Category</td>
		<td>Subject</td>
		<td>Education Qualification</td>
		<td>Other Experiences</td>
		<td>Click to</td>
	</tr>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
		
		$sql="select * from faculty";
		$rs=mysql_query($sql);
		
		while($row=mysql_fetch_array($rs))
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

			
			echo"<tr>";
				echo"<td>$id</td>";
				echo" <td>$name</td>";
				echo"<td>$fn</td>";
				echo"<td>$gender</td>";
				echo"<td>$mob</td>";
				echo"<td>$DOB</td>";
				echo"<td>$email</td>";
				echo"<td>$cat</td>";
				echo"<td>$sub</td>";
				echo"<td>$edu</td>";
				echo"<td>$oth</td>";

				echo"<td>
						<a href='faculty_update.php?id=$id'>
							Update
						</a>
					</td>";
			echo"</tr>";
				
		}
	?>
	
</table>
	