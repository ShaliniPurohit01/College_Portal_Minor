<?php
	$f=$_POST['fname'];
	
	
	echo $description;
		
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	if (move_uploaded_file($_FILES['fname']['tmp_name'],"upload/".$_FILES['f']['name']))
	{
		$file=$_FILES['f']['name'];
	}
	
	$sql="INSERT INTO faculty(`fname`,`image`) VALUES ('$fname','$file')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	