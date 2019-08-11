<?php
	$description=$_POST['desp'];
	
	
	echo $description;
		
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	if (move_uploaded_file($_FILES['f']['tmp_name'],"upload/".$_FILES['f']['name']))
	{
		$file=$_FILES['f']['name'];
	}
	
	$sql="INSERT INTO add_gallary(`description`,`file`) VALUES ('$description','$file')";
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
		else
		echo"Not Inserted";
?>
	