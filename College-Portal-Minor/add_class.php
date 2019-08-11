<script>
	function validate()
	{
		var A=document.getElementById("a").value;
		
		if(A=="")
		{
			alert("Please enter the Class");
			return false;
			
		}
	}
</script>
<style>

input[type=text] {
    background-color:#CFECEC;
    color:black;
	font-size:20px;
}
</style>


<html>
	<head>
		<title>
			add classname
		</title>
	</head>
	
	<body>
	
	<div class="container">
	
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
	
	
		<form action="class_save.php" method="post">
		<table border=1 width=500 height=300 align=center>
			<tr align=center>
				<td colspan=2>
					<b>Add Class</b>
				</td>
	
			</tr>
			<tr align= center>
				<td>
					<b>Course</b>
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
					<b> Scheme</b>
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
					<b> Class Name</b>
				</td>
				
				<td>
					<input type="text" name="classname" id="a">
				</td>
			</tr>

			
			<tr align=center>
				<td colspan=2>
		             		<input type="submit" onclick="return validate();" name="save" value="Save" >
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
	</div>
</html>

		