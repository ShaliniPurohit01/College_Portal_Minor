
<table border=1 width=80% align=center>
	<tr align=center>
		<td>ID</td>
		<td>Description</td>
		<td>Image File</td>
		<td>Click to</td>
	</tr>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
		
		$sql="select * from add_gallary";
		$rs=mysql_query($sql);
		
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$desp=$row[1];
			$f=$row[2];
			
			echo"<tr>";
				echo"<td>$id</td>";
				echo" <td>$desp</td>";
				echo"<td>$f</td>";
				echo"<td>
						<a href='gallary_update.php? id=$id'>
							Update
						</a>
					</td>";
			echo"</tr>";
				
		}
	?>
	
</table>
	