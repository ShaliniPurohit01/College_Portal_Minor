<?php
	$id=$_POST['id'];
	$desp=$_POST['desp'];
	$date=$_POST['date'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update notice set description='$desp',date='$date' where id=$id";
	$rs=mysql_query($sql);
	
	if($rs)
		echo "Record Updated";
	else
		echo "Record not Updated";
		
?>