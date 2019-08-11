<table border=1 align=center width=60% height=70%>
	<tr align=center>
		<td>
			Course
		</td>
		<td>
			Scheme
		</td>
	</tr>
			<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from scheme";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
		
			$cate=$row[1];
			$sch=$row[2];
		
			echo"<tr align='center'>";
				echo"<td>$id</td>";
				echo"<td>$cate</td>";
				echo"<td>$sch</td>";
				
			echo"</tr>";
		
		}
		?>
</table>
