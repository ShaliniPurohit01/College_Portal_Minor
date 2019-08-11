<?php
	$id=$_POST['id'];
	$cate=$_POST['course'];
	$sch=$_POST['scheme'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update scheme set course='$cate',scheme='$sch' where id=$id";
	
	$rs=mysql_query($sql);
	
	if($rs)
		header("location:scheme_update_view.php");
		
?>