<?php
	mysql_connect("localhost","root","");
	mysql_select_db("college_portal");
	
	$sql="select * from course";
	$rs=mysql_query($sql);
	
	echo"<select name='course'>";
	
	while($row=mysql_fetch_array($rs))
	{
		echo"<option> $row[1] </option>";
		
	}
	echo"</select>"
?>