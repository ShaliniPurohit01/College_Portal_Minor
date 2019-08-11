<html>
	<head>
		<title>
			syllabus
		</title>
	</head>
	
	<body>
		<form action="syllabus_save.php" method="post">
		<table border=1 width=300 height=300 align=center>
			<tr align= center>
				<td>
					<b>Course</b>
				</td>
				<td>
					<?php
						mysql_connect("localhost","root","");
						mysql_select_db("college_portal");
	
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
					<b>Section</b>
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
							echo"<option> $row[3] </option>";
		
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
							echo"<option> $row[4] </option>";
		
						}
						echo"</select>"
					?>

				</td>
			</tr>
			
			<tr align=center>
				<td>
					<b>Unit</b>
				</td>
				<td>
					<select>
						<option>UNIT 1</option>
						<option>UNIT 2</option>
						<option>UNIT 3</option>
						<option>UNIT 4</option>
						<option>UNIT 5</option>
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
	</body>
</html>

		