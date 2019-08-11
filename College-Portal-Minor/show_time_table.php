
<table border=1 align=center width=100% height=50%>
		<tr align=center>
		<TH></TH>
		<th>
		MONDAY
		</th>
		<th>
		TUESDAY
		</th>
		<th>
		WEDNESDAY
		</th>
		<th>
		THURSDAY
		</th>
		<th>
		FRIDAY
		</th>
		<th>
		SATURDAY
		</th>
		
		</tr>
<?php
$course=$_POST['course'];
$scheme=$_POST['scheme'];
$classname=$_POST['classname'];
$section=$_POST['section'];
$subject=$_POST['subject'];



	mysql_connect("localhost","root","");
						mysql_select_db("college");
	
						$sql="select * from tt where course='$course' and 
						scheme='$scheme' and classname='$classname' and section='$section'
						";
						
						echo $sql;
						$rs=mysql_query($sql);
	
						
					while($row=mysql_fetch_array($rs))
						{
							$sub=$row[5];
							$time=$row[7];
							$day=$row[6];
							echo $row[0]."<br>";
							echo $row[1]."<br>";
							echo $row[2]."<br>";
							echo $row[3]."<br>";
							echo $row[4]."<br>";
							echo $row[5]."<br>";
							echo $row[6]."<br>";
							echo $row[7]."<br>";
							
							
							if ($day="Monday" )
							echo "<td>";				
								echo $time;
							echo"</td>";
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="8.00AM-9.00AM" and $day="Tuesday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="8.00AM-9.00AM" and $day="Wednesday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="8.00AM-9.00AM" and $day="Thursday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
										
							if ($time="8.00AM-9.00AM" and $day="Friday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
				
							if ($time="8.00AM-9.00AM" and $day="Saturday" )
							
							echo "<td>";				
								echo $sub;
							echo"</td></tr>";

			
			
							if ($time="8.00AM-9.00AM" and $day="Monday" )
							echo "<tr><td>";				
								echo $time;
							echo"</td>";
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="9.00AM-10.00AM" and $day="Tuesday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="9.00AM-10.00AM" and $day="Wednesday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="9.00AM-10.00AM" and $day="Thursday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="9.00AM-10.00AM" and $day="Friday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
			
							if ($time="9.00AM-10.00AM" and $day="Saturday" )
							
							echo "<td>";				
								echo $sub;
							echo"</td></tr>";


							
							if ($time="10.00AM-11.00AM" and $day="Monday" )
							echo "<tr><td>";				
								echo $time;
							echo"</td>";
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="10.00AM-11.00AM" and $day="Tuesday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="10.00AM-11.00AM" and $day="Wednesday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="10.00AM-11.00AM" and $day="Thursday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time= "10.00AM-11.00AM" and $day="Friday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="10.00AM-11.00AM" and $day="Saturday" )
							
							echo "<td>";				
								echo $sub;
							echo"</td></tr>";

								
							if ($time="11.00AM-12.00 NOON" and $day="Monday" )
							echo "<tr><td>";				
								echo $time;
							echo"</td>";
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="11.00AM-12.00 NOON" and $day="Tuesday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="11.00AM-12.00 NOON" and $day="Wednesday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="11.00AM-12.00 NOON" and $day="Thursday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time= "11.00AM-12.00 NOON" and $day="Friday" )
							echo "<td>";				
								echo $sub;
							echo"</td>";
							
							if ($time="11.00AM-12.00 NOON" and $day="Saturday" )
							
							echo "<td>";				
								echo $sub;
							echo"</td></tr>";

						}

?>
