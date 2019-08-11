<?php
	$course=$_POST['course'];
	
	echo $course;
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO course (`course`) VALUES ('$course')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"inserted";
		else
		echo"not inserted";
?>
	