<style>

img 
{
	border-radius:50px;
}
</style>


<table border=0 align="center">
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from add_gallary";
		$rs=mysql_query($sql);
	$count=1;
	echo"<tr align='center'>";
		while($row=mysql_fetch_array($rs))
		{
		
			$desp=$row[1];
			$file="upload/".$row[2];
					
				echo"<td><img src='$file' width=220 height=200>
				<br>$desp
				</td>";
			if ($count%3==0)
			echo"</tr><tr>";
		$count++;
		
		}
?>

