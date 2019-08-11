<?php
	mysql_connect("localhost","root","");
	mysql_select_db("college_portal");
	
	$sql="select * from course";
	$rs=mysql_qurey($sql);
	
	while($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$cate=$row[1];
		
		echo"<tr>";
			echo"<td>$id</td>";
			echo"<td>$cate</td>";
			echo"<td>
					<a href='del1.php'>
					delete
					</a>
				</td>";
		echo"</tr>";
		
	}
?>
