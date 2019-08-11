<?php
	$desp=$_POST['desp'];
	$date=$_POST['date'];
	
	echo $desp;
	echo $date;
	
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	if (move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']))
	{
		$file=$_FILES['file']['name'];
	}
	$sql="INSERT INTO `notice` ( `description`, `date`, `file1`) 
	VALUES ('$desp','$date','$file')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>

