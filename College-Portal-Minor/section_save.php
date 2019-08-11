<?php
	$scheme=$_POST['scheme'];
	$course=$_POST['course'];
	$classname=$_POST['class'];
	$section=$_POST['section'];
	
	echo $scheme;
	echo $course;
	echo $section;
	echo $classname;
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO section(`course`,`scheme`,`class`,`section`) VALUES ('$course','$scheme','$classname','$section')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	