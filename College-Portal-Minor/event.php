<table border=1 align=center width=60% height=70%>
	
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from event";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$event=$row[1];
			$desp=$row[2];
		
			echo"<tr align='center'>";
				echo"<td><a href=''>$event</a></td>";
				echo"<td>$desp</td>";
			echo"</tr>";
		
		}
		?>
</table>
