<?php
		$username=$_POST['username'];
		$password=$_POST['pw'];
		
		mysql_connect("localhost","root","");
		mysql_select_db("college");
		$sql="SELECT * FROM `admin` WHERE uname='$username' and passw='$password'";
		$rs=mysql_query($sql);
		
		if ($row=mysql_fetch_array($rs))
		{
			header("location:admin_home.php");
		}
		else
		{
			echo"Not Valid";
		}
		
?>