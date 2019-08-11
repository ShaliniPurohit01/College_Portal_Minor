<table align=center border=1 width=90%>
	<tr align=center>
		<td colspan=2>
			<?php
				include("admin_head.php");

			?>
		</td>
	</tr>
	<tr align=center>
		<td  width=150>
			<?php
				include("admin_left.php");

			?>
		</td>
		<td width=650>



<table border=1 align=center width=60% height=70%>
	<tr align=center>
		<td>
			<b>ID</b>
		</td>
		<td>
			<b>Name</b>
		</td>
		<td>
			<b>Fathers Name</b>
		</td>
		<td>
			<b>Gender</b>
		</td>
		<td>
			<b>Mobile Number</b>
		</td>
		<td>
			<b>DOB</b>
		</td>
		<td>
			<b>Email Address</b>
		</td>
		<td>
			<b>Category</b>
		</td>
		<td>
			<b>Subject</b>
		</td>
		<td>
			<b>Education Qualification</b>
		</td>
		<td>
			<b>Other</b>
		</td>
		<td>
			<b>Click to</b>
		</td>
		<td>
			<b>Click to</b>
		</td>
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
			$gen=$row[3];
			$mob=$row[4];
			$DOB=$row[5];
			$email=$row[6];
			$cat=$row[7];
			$sub=$row[8];
			$edu=$row[9];
			$oth=$row[10];
		
		
			echo"<tr align='center'>";
				echo"<td>$id</td>";
				echo"<td>$name</td>";
				echo"<td>$fn</td>";
				echo"<td>$gen</td>";
				echo"<td>$mob</td>";
				echo"<td>$DOB</td>";
				echo"<td>$email</td>";
				echo"<td>$cat</td>";
				echo"<td>$sub</td>";
				echo"<td>$edu</td>";
				echo"<td>$oth</td>";
				echo"<td>
					<a href='view_faculty_del.php?id=$id'>
					delete
					</a>
					</td>";
					
				echo"<td>
					<a href='faculty_update_view.php?id=$id'>
					update
					</a>
					</td>";
			echo"</tr>";
		
		}
		?>
</table>

</td>
	</tr>
	<tr align=center>
		<td colspan=2>
			<?php
				include("admin_foot.php");

			?>
			
			
		</td>
	</tr>	
</table>

	</body>
</html>
