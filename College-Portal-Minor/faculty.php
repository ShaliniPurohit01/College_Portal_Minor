<script>
	function validate()
	{
		var A=document.getElementById("a").value;
		var B=document.getElementById("b").value;
		
		
		if(A=="")
		{
			alert("Please enter Faculty Name");
			return false;
			
		}
		if(B=="")
		{
			alert("Please enter any Image");
			return false;
			
		}
		
	}
</script>	

<html>
	<head>
		<title>
			Add Faculty
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
		<table border=1 width=500 height=300 align=center>
			<tr align=center>
				<td colspan=2>
					<b>Add Faculty</b>
				</td>
	
			</tr>
			<tr align= center>
				<td>
					<b>Faculty Name</b>
				</td>
				<td>
					<input type="text" name="fname" id="a" >
				</td>
			</tr>
			
			<tr align= center>
				<td>
				<b>Select the Image </b>
				</td>
				<td>
					<input type="file" name="file" id="b" >
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

