<table border=1 width=80% align=center>
	<tr align=center>
		<td>ID</td>
		<td>Description</td>
		<td>Date</td>
		<td>File</td>
		<td>Click to</td>
	</tr>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
		
		$sql="select * from notice";
		$rs=mysql_query($sql);
		
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$desp=$row[1];
			$date=$row[2];
			$file=$row[3];
			
			echo"<tr>";
				echo"<td>$id</td>";
				echo" <td>$desp</td>";
				echo"<td>$date</td>";
				echo"<td>$file</td>";
				echo"<td>
						<a href='notice_update.php? id=$id'>
							Update
						</a>
					</td>";
			echo"</tr>";
				
		}
	?>
	
</table>
	