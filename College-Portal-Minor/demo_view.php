<table border=1 align=center width=60% height=70%>
	<tr align=center>
		<td>
			ID
		</td>
		<td>
			Course
		</td>
		<td>
			Click to
		</td>
	</tr>
			<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college_portal");
	
		$sql="select * from course";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$cate=$row[1];
		
			echo"<tr align='center'>";
				echo"<td>$id</td>";
				echo"<td>$cate</td>";
				echo"<td>
					<a href='del1.php'>
					delete
					</a>
					</td>";
			echo"</tr>";
		
		}
		?>
</table>
