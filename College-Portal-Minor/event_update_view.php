<table border=1 width=80% align=center>
	<tr align=center>
		<td>ID</td>
		<td>Event</td>
		<td>Description</td>
		<td>Click to</td>
	</tr>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
		
		$sql="select * from event";
		$rs=mysql_query($sql);
		
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$eve=$row[1];
			$desp=$row[2];
			
			
			echo"<tr>";
				echo"<td>$id</td>";
				echo"<td>$eve</td>";
				echo" <td>$desp</td>";
				echo"<td>
					<a href='event_update.php? id=$id'>
							Update
						</a>
					</td>";
			echo"</tr>";
				
		}
	?>
	
</table>
	