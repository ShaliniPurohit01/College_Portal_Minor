<?php
	
	$course=$_POST['course'];
	$scheme=$_POST['scheme'];
	$classname=$_POST['classname'];
	$section=$_POST['section'];
	$subject=$_POST['subject'];
	$unit=$_POST['unit'];
	$desp=$_POST['desp'];
	
	
	echo $scheme;
	echo $course;
	echo $classname;
	echo $section;
	echo $subject;
	echo $unit;
	echo $desp;
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO syllabus(`course`,`scheme`,`classname`,`section`,`subject`,`unit`,`description`) VALUES ('$course','$scheme','$classname','$section','$subject','$unit','$desp')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	