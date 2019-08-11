<?php
	$sname=$_POST['sname'];
	$fname=$_POST['fname'];
	$gender=$_POST['gender'];
	$img=$_POST['img'];
	$email=$_POST['email'];
	$res=$_POST['res'];
	$pos=$_POST['pos'];
	$mob=$_POST['mobile'];
	$phn=$_POST['phone'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$cou=$_POST['course'];
	$dob=$_POST['DOB'];
	$cat=$_POST['category'];
	$marks=$_POST['marks'];
	
	
	
	echo $sname;
	echo $fname;
	echo $gender;
	echo $email;
	echo $res;
	echo $pos;
	echo $mobile;
	echo $phone;
	echo $city;
	echo $state;
	echo $cou;
	echo $dob;
	echo $cat;
	echo $marks;

	
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO `admission` (`student_name`, `fathers_name`, `gender`,`image`, `email`,`residential_add`, `postel_add`,`mobile`,`phone`, `city`,`state`,`course`,`dob`, `category`, `marks`)
	values('$sname','$fname','$gender','$email','$res','$pos','$mobile','$phone'
	,'$city','$state','$cou','$dob','$cat','$marks')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	