<?php
	$id=$_POST['id'];
	$cate=$_POST['course'];
	$sch=$_POST['scheme'];
	$cla=$_POST['classname'];
	$sec=$_POST['section'];
	$sub=$_POST['subject'];
	$unit=$_POST['unit'];
	$desp=$_POST['desp'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update syllabus set course='$cate',scheme='$sch',classname='$cla',section='$sec',
	subject='$sub',unit='$unit',description='$desp' where id=$id";
	
	$rs=mysql_query($sql);
	

	if ($rs)
		header("location:syl_update_view.php");

		
?>