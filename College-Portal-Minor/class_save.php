<?php
	$scheme=$_POST['scheme'];
	$course=$_POST['course'];
	$classname=$_POST['classname'];
	
	echo $scheme;
	echo $course;
	echo $classname;
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO classname(`course`,`scheme`,`classname`) VALUES ('$course','$scheme','$classname')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	