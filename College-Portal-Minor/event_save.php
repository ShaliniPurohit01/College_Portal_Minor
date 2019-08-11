<?php
	$event=$_POST['event'];
	$description=$_POST['desp'];

	
	echo $event;
	echo $description;
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO event(`event`,`description`) VALUES ('$event','$description')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	