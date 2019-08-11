<table border=0 align=center >
	
			<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from course";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$cate=$row[1];
		
			echo"<tr align='Left'>";
				
				echo"<td><a href=''>$cate</a></td>";
				
			echo"</tr>";
		
		}
		?>
</table>
