<table border=1 width=80% align=center>
	<tr align=center>
		<td>ID</td>
		<td>Course</td>
		<td>Scheme</td>
		<td>ClassName</td>
		<td>Section</td>
		<td>Click to</td>
	</tr>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
		
		$sql="select * from section";
		$rs=mysql_query($sql);
		
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$cate=$row[1];
			$sch=$row[2];
			$cla=$row[3];
			$sec=$row[4];
			
			echo"<tr>";
				echo"<td>$id</td>";
				echo" <td>$cate</td>";
				echo"<td>$sch</td>";
				echo"<td>$cla</td>";
				echo"<td>$sec</td>";
				echo"<td>
						<a href='section_update.php?id=$id'>
							Update
						</a>
					</td>";
			echo"</tr>";
				
		}
	?>
	
</table>
	