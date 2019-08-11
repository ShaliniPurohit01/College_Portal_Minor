<?php
	$id=$_POST['id'];
	$cate=$_POST['course'];
	$sch=$_POST['scheme'];
	$cla=$_POST['classname'];
	$sec=$_POST['section'];
	$sub=$_POST['subject'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update subject set course='$cate',scheme='$sch',classname='$cla',section='$sec',subject='$sub' where id=$id";
	
	$rs=mysql_query($sql);
	
	if($rs)
		header("location:subject_update_view.php");
		
?>