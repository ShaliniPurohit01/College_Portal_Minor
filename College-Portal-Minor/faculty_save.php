<?php
	$name=$_POST['name'];
	$fn=$_POST['fathers_name'];
	$gender=$_POST['gender'];
	$mob=$_POST['mobile'];
	$dob=$_POST['DOB'];
	$email=$_POST['email'];
	$cat=$_POST['category'];
	$sub=$_POST['subject'];
	$edu=$_POST['education'];
	$oth=$_POST['other'];
	if (move_uploaded_file($_FILES['f']['tmp_name'],"upload/".$_FILES['f']['name']))
	{
		$file=$_FILES['f']['name'];
	}
	
	echo $name;
	echo $fn;
	echo $gender;
	echo $mob;
	echo $dob;
	echo $email;
	echo $cat;
	echo $sub;
	echo $edu;
	echo $oth;

	
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO `faculty` (`name`, `fathers_name`, `gender`, `mobile`, `DOB`, `email`, `category`, `subject`, `education`, `other`,`photo`)
	values('$name','$fn','$gender','$mob','$dob','$email','$cat','$sub','$edu','$oth','$file')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	