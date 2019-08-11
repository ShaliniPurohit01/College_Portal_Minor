<html>
	<head>
		<title>
			faculty registertation
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
			
			
		
		<form action="faculty_save.php" method="post" enctype="multipart/form-data">
			<table border=1 height=500 width=900 align=center>
				<tr align=center>
					<td colspan=2>
						<b> FACULTY REGISTERATION</b>
					</td>
				</tr>
				
				
				<tr align=center>
					<td>
						<b> Name</b>
					</td>
					<td>
						<input type="text" value="" Name='name'>
					</td>
				</tr>
				
				
				<tr align=center>
					<td>
						<b> Father's Name</b>
					</td>
					<td>
						<input type="text" value="" name="fathers_name" >
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
						<b>Mobile Number</b>
					</td>
					<td>
						<input type="text" value="" name="mobile">
					</td>
				</tr><tr align=center>
					<td>
						<b>DOB</b>
					</td>
					<td>
						<input type="date" value="" name="DOB">
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
						<b> Subject</b>
					</td>
					<td>
						<input type="text" value="" name="subject">
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b>Education Qualification</b>
					</td>
					<td>
						<textarea rows=10 cols=20 name="education">
							
						</textarea>
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b>Other Experience</b>
					</td>
					<td>
						<textarea rows=8 cols=20 name="other">
							
						</textarea>
					</td>
				</tr>
				
				<tr>
				<td>Select Image</td>
				<td><input type="file" name='f'></td>
				
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