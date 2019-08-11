<table border=1 width=80% height=80% align=center>
	<tr align=center>
		
		<td><b>Date</b></td>
		<td><b>Day</b></td>
		<td><b>Subject</b></td>
		<td><b>Time</b></td>	
	</tr>
	
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from tt";
		$rs=mysql_query($sql);
	$count=1;
	
		while($row=mysql_fetch_array($rs))
		{
		echo"<tr align='center'>";
			
					
				echo"<td>$row[6]</td>";
				echo"<td>$row[2]</td>";
				echo"<td>$row[3]</td>";
		echo "</tr>";
		}
?>