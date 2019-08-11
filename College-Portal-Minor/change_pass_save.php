<?php
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$cpass=$_POST['cpass'];
	
	echo $opass;
	echo $npass;
	echo $cpass;
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$sql="INSERT INTO cahnge_pass (`old_pass`,`new_pass`,`confirm_pass`) VALUES ('$opass','$npass','$cpass')";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"inserted";
		else
		echo"not inserted";
?>
	