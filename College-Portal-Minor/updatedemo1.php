<?php
	mysql_connect("localhost","root","");
	mysql_select_db("college");
	
	$id=$_GET['id'];
	$sql="select * from category where id='$id'";
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$cate=$row[1];
		
	}
?>
<form action="updatedemo1.php" method="post">
	<table border=1 align=center>
	</table>
</form>

	