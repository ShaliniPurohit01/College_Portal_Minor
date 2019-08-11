<?php
	$id=$_POST['id'];
	$cate=$_POST['course'];
	$sch=$_POST['scheme'];
	$cla=$_POST['classname'];
	$sec=$_POST['section'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update section set course='$cate',scheme='$sch',class='$cla',section='$sec' where id=$id";
	echo $sql;
	$rs=mysql_query($sql);
	
	if($rs)
		header("location:section_update_view.php");
		
?>