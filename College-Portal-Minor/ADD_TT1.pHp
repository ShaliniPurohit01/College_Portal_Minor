<html>
	<head>
		<title>
			add TT
		</title>
	</head>
	
	<body>
	
		<table align=center border=1 width=90%>
	<tr align=center>
		<td colspan=2>
			<?php
				include("admin_head.php");

			?>
		</td>
	</tr>
	<tr align=center>
		<td  width=150>
			<?php
				include("admin_left.php");

			?>
		</td>
		<td width=650>
			
		
		<form action="TT_save.php" method="post" >
		<table border=1 width=500 height=300 align=center>
			<tr align= center>
				<td>
					<b>Course<b>
				</td>
				<td>
					<?php
						mysql_connect("localhost","root","");
						mysql_select_db("college");
	
						$sql="select * from course";
						$rs=mysql_query($sql);
	
						echo"<select name='course'>";
	
						while($row=mysql_fetch_array($rs))
						{
							echo"<option> $row[1] </option>";
		
						}
						echo"</select>"
					?>
					
				</td>
			</tr>

			<tr align= center>
				<td>
					<b>Scheme</b>
				</td>
				<td>
					<select name="scheme">

						<option> Annual</option>

						<option> Semester</option>
					</select>
					
				</td>
			</tr>
			<tr align=center>
				<td>
					<b>ClassName</b>
				</td>
				
				<td>
					<?php
						mysql_connect("localhost","root","");
						mysql_select_db("college");
	
						$sql="select * from classname";
						$rs=mysql_query($sql);
	
						echo"<select name='classname'>";
	
						while($row=mysql_fetch_array($rs))
						{
							echo"<option> $row[3] </option>";
		
						}
						echo"</select>"
					?>	
				</td>
			</tr>

			
			<tr align=center>
				<td>
					<b>Section</b>
				</td>
				
				<td>
					<?php
						mysql_connect("localhost","root","");
						mysql_select_db("college");
	
						$sql="select * from section";
						$rs=mysql_query($sql);
	
						echo"<select name='section'>";
	
						while($row=mysql_fetch_array($rs))
						{
							echo"<option> $row[4] </option>";
		
						}
						echo"</select>"
					?>	
				</td>
			</tr>

			<tr align=center>
				<td>
					<b>Subject</b>
				</td>
				<td>
					<?php
						mysql_connect("localhost","root","");
						mysql_select_db("college_portal");
	
						$sql="select * from subject";
						$rs=mysql_query($sql);
	
						echo"<select name='subject'>";
	
						while($row=mysql_fetch_array($rs))
						{
							echo"<option> $row[5] </option>";
		
						}
						echo"</select>"
					?>
				</td>
			</tr>
			
			<tr align=center>
				<td>
					<b>Day</b>
				</td>
				
				<td>
					<select name="day">
						<option>Monday</option>
						<option>Tuesday</option>
						<option>Wednesday</option>
						<option>Thursday</option>
						<option>Friday</option>
						<option>Saturday</option>
					</select>
				</td>
			</tr>
			
			<tr align=center>
				<td>
					<b>TIME</b>
				</td>
				
				<td>
					<select name="time">
						<option>8.00AM-9.00AM</option>
						<option>9.00AM-10.00AM</option>
						<option>10.00AM-11.00AM</option>
						<option>11.00AM-12.00PM</option>
						<option>12.00Noon-1.00PM</option>
						<option>1.00PM-2.00AM</option>
						<option>2.00PM-3.00PM</option>
						<option>3.00PM-4.00PM</option>

					</select>
				</td>
			</tr>

			<tr align=center>
				<td colspan=2>
		             		<input type="submit" name="save" value="Save" >
					&nbsp;
					&nbsp;
					<input type="reset" name="cancel" value="Cancel">	
				</td>
			</tr>
		</table>
		</form>
		
		</td>
	</tr>
	<tr align=center>
		<td colspan=2>
			<?php
				include("admin_foot.php");

			?>
			
			
		</td>
	</tr>	
</table>
		
	</body>
</html>

		