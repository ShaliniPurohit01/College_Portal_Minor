<?php
	$id=$_POST['id'];
	$cate=$_POST['ct'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update course set course='$cate' where id=$id";
	$rs=mysql_query($sql);
	
	if($rs)
		echo "Record Updated";
	else
		echo "Record not Updated";
		
?>