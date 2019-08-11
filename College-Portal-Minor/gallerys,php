<table border=1 align=center width=60% height=70%>
	<tr align=center>
		
		<td>
			<b>Description</b>
		</td>
		<td>
			<b>File</b>
		</td>
		
		
	</tr>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from add_gallary";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
		
			$desp=$row[1];
			
		$file="upload/".$row[2];
					
				
			echo"<tr align='center'>";
				
				echo"<td>$desp</td>";
				echo"<td><img src='$file' width=300 height=200>
				
				</td>";
				
				
			echo"</tr>";
		
		}
		?>
</table>
