<?php

		mysql_connect("localhost","root","");
		mysql_select_db("college");
		
		$id=$_GET['id'];
		$sql="delete from syllabus where id='$id'";
		$rs=mysql_query($sql);
		
		if ($rs)
			echo "delete";
		
?>