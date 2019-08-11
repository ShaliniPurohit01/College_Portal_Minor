<?php
	$id=$_POST['id'];
	$desp=$_POST['desp'];
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update add_gallary set description='$desp' where id='$id'";
	$rs=mysql_query($sql);
	
	if($rs)
		echo "Record Updated";
	else
		echo "Record not Updated";
		
?>