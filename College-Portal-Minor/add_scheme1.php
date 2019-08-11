
<html>
	<head>
		<title>
			add scheme
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

	
	
	
	
	
	
	
		<form action="scheme_save.php" method="post">
		<table border=1 width=500 height=300 align=center  >
			<tr align=center> 
				<td colspan=2>
					<b>Add Scheme</b>
				</td>
	
			</tr>
			
			<tr align= center>
				<td>
					<b>Select Course</b>
				</td>
				<td>
					<?php
						mysql_connect("localhost","root","");
						mysql_select_db("college");
	
						$sql="select * from course";
						$rs=mysql_query($sql);
	
						echo"<select name='course' >";
	
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
					<b>Select Scheme</b>
				</td>
				<td>
					<select name='scheme'  id="b">

						<option> Annual</option>

						<option> Semester</option>
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

		