<html>
	<head>
		<title>
			Admission Form
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
			
		<form action="adm_save.php" method="post">
			<table border=1 height=500 width=600 align=center>
				<tr align=center>
					<td colspan=2>
						<b> ADMISSION FORM</b>
					</td>
				</tr>
				
				
				<tr align=center>
					<td>
						<b>Student's Name</b>
					</td>
					<td>
						<input type="text" value="" Name='sname'>
					</td>
				</tr>
				
				
				<tr align=center>
					<td>
						<b> Father's Name</b>
					</td>
					<td>
						<input type="text" value="" name="fname" >
					</td>
				</tr>
				
				
				<tr align=center>
					<td>
						<B>Gender</B>
					</td>
					<td>
						<input type="radio" value="" name="gender" >Male
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						<input type="radio" value="" name="gender">Female
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b>Photo</b>
					</td>
					<td>
						<input type="file" value="" name="img">
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b>Email Address</b>
					</td>
					<td>
						<input type="email" value="" name="email">
					</td>
				</tr>
				
				
				<tr align=center>
					<td>
						<b>Residential Address</b>
					</td>
					<td>
						<textarea rows=10 cols=20 name="res">
							
						</textarea>
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b> Postel Address</b>
					</td>
					<td>
						<textarea rows=10 cols=20 name="pos">
							
						</textarea>
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b>Mobile Number</b>
					</td>
					<td>
						<input type="text" value="" name="mobile">
					</td>
				</tr>
				<tr align=center>
					<td>
						<b>Phone Number</b>
					</td>
					<td>
						<input type="text" value="" name="phone">
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b>City</b>
					</td>
					<td>
						<input type="text" value="" name="city">
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b>State</b>
					</td>
					<td>
						<input type="text" value="" name="state">
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b> Course</b>
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
								
				<tr align=center>
					<td>
						<b>DOB</b>
					</td>
					<td>
						<input type="date" value="" name="DOB">
					</td>
				</tr>
							
				<tr align=center>
					<td>
						<b>Category</b>
					</td>
					<td>
						<input type="radio" name="category" >Sc
						&nbsp;
						&nbsp;
						<input type="radio" name="category">St
						&nbsp;
						&nbsp;
						<input type="radio" name="category">Obc
						&nbsp;
						&nbsp;
						<input type="radio" name="category">Gen
					</td>
				</tr>
							
				<tr align=center>
					<td>
						<b>Marks</b>
					</td>
					<td>
						<textarea rows=8 cols=20 name="other">
							
						</textarea>
					</td>
				</tr>
				
				<tr align=center>
					<td colspan=2>
						<input type="submit" value="Save" name="save">
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
	
						<input type="reset" value="Cancel" name="cn">
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