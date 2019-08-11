<?php
	$id=$_POST['id'];
	$cate=$_POST['course'];
	$sch=$_POST['scheme'];
	$cla=$_POST['classname'];
	$sec=$_POST['section'];
	$sub=$_POST['subject'];
	$day=$_POST['day'];
	$time=$_POST['time'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update tt set course='$cate',scheme='$sch',classname='$cla',section='$sec',
	subject='$sub',day='$day',time='$time' where id=$id";
	
	$rs=mysql_query($sql);
	

	if ($rs)
		header("location:TT_update_view.php");

		
?>