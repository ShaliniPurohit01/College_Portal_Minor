<?php
	$scheme=$_POST['scheme'];
	$course=$_POST['course'];
	$classname=$_POST['classname'];
	$section=$_POST['section'];
	$subject=$_POST['subject'];
	
	echo $scheme;
	echo $course;
	echo $classname;
	echo $section;
	echo $subject;
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO subject(`course`,`scheme`,`classname`,`section`,`subject`) VALUES ('$course','$scheme','$classname','$section','$subject')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	