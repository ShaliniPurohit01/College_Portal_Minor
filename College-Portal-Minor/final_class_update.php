<?php
	$id=$_POST['id'];
	$cate=$_POST['course'];
	$sch=$_POST['scheme'];
	$cla=$_POST['classname'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update classname set course='$cate',scheme='$sch',classname='$cla' where id=$id";
	
	$rs=mysql_query($sql);
	
	if($rs)
	header("location:class_update_view.php");
	
		
?>