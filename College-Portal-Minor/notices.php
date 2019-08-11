
<table border=1 align=center width=60% height=70%>
	<tr align=center>
		
		<td>
			<b>Description</b>
		</td>
		<td>
			<b>Date</b>
		</td>
		
		<td>
			<b>File</b>
		</td>
		
		
	</tr>
			<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from notice";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{

			$desp=$row[1];
			$date=$row[2];
			$file="upload/".$row[3];
		
			echo"<tr align='center'>";
		
				echo"<td>$desp</td>";
				echo"<td>$date</td>";
				echo"<td><img src='$file' width=300 height=200></td>";
			echo"</tr>";
		
		}
		?>
</table>
