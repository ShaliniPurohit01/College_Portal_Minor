<?php
	
	$course=$_POST['course'];
	$scheme=$_POST['scheme'];
	$section=$_POST['section'];
	$subject=$_POST['subject'];
	$unit=$_POST['unit'];
	
	
	echo $scheme;
	echo $course;
	echo $section;
	echo $subject;
	echo $unit;
	mysql_connect("localhost","root","");
	mysql_select_db("college_portal");
	
	$sql="INSERT INTO syllabus(`course`,`scheme`,`section`,`subject`,`unit`) VALUES ('$course','$scheme','$section','$subject','$unit')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	