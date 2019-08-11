<?php
	$scheme=$_POST['scheme'];
	$course=$_POST['course'];
	
	echo $scheme;
	echo $course;
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO scheme (`course`,`scheme`) VALUES ('$course','$scheme')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	