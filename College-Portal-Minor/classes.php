<table border=1 align=center width=60% height=70%>
	<tr align=center>
		<td>
			<b>Course</b>
		</td>
		<td>
			<b>Scheme</b>
		</td>
		<td>
			<b>ClassName</b>
		</td>
	</tr>
			<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from classname";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
	
			$cate=$row[1];
			$sch=$row[2];
			$cla=$row[3];
		
			echo"<tr align='center'>";
				
				echo"<td>$cate</td>";
				echo"<td>$sch</td>";
				echo"<td>$cla</td>";
				
			echo"</tr>";
		
		}
		?>
</table>
