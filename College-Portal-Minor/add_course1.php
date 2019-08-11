<script>
	function validate()
	{
		var cat=document.getElementById("a").value;
		
		if(cat=="")
		{
			alert("Please enter the Course");
			return false;
			
		}
	}
</script>
<html>
	<head>
		<title>
			add course
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
			
	
	
	<form action="coursesave.php" method="post">
		<table border=1 width=500 height=300 align=center >
			<tr align=center>
				<td colspan=2>
					<b>Add Course</b>
				</td>
	
			</tr>
			<tr align= center>
				<td>
					<b>Course Name</b>
				</td>
				<td>
					<input type="text" name="course" id="a" >
				</td>
			</tr>

			<tr align=center>
				<td colspan=2>
		             		<input type="submit" onclick="return validate();" name="save" value="Save" >
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
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

