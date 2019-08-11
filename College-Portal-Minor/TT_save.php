<?php
	
	$course=$_POST['course'];
	$scheme=$_POST['scheme'];
	$classname=$_POST['classname'];
	$section=$_POST['section'];
	$subject=$_POST['subject'];
	$day=$_POST['day'];
	$time=$_POST['time'];
	
	
	echo $scheme;
	echo $course;
	echo $classname;
	echo $section;
	echo $subject;
	echo $day;
	echo $time;
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO TT(`course`,`scheme`,`classname`,`section`,`subject`,`day`,`time`) VALUES ('$course','$scheme','$classname','$section','$subject','$day','$time')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	