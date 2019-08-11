<?php

	$id=$_POST['id'];
	$eve=$_POST['event'];
	$d=$_POST['desp'];
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update event set event='$eve', description='$d' where id='$id'";
	$rs=mysql_query($sql);
	
	if($rs)
		echo "Record Updated";
	else
		echo "Record not Updated";
		
?>