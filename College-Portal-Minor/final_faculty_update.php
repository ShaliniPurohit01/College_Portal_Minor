<?php
	$id=$_POST['id'];
	$name=$_POST['name'];
	$fn=$_POST['fathers_name'];
	$gender=$_POST['gender'];
	$mob=$_POST['mobile_number'];
	$DOB=$_POST['DOB'];
	$email=$_POST['email'];
	$cat=$_POST['category'];
	$sub=$_POST['subject'];
	$edu=$_POST['education'];
	$oth=$_POST['other'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");

	$sql="update faculty set name='$name',fathers_name='$fn',gender='$gender',mobile='$mob',DOB='$DOB',email='$email',category='$cat',subject='$sub',education='$edu',other='$oth' where id=$id";
	
	$rs=mysql_query($sql);
	
		header("location:faculty_update_view.php");
	if($rs)
		
?>