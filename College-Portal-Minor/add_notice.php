<script>
	function validate()
	{
		var A=document.getElementById("a").value;
		var B=document.getElementById("b").value;
		var C=document.getElementById("c").value;
		
		if(A=="")
		{
			alert("Please enter the Description");
			return false;
			
		}
		if(B=="")
		{
			alert("Please enter the Date");
			return false;
			
		}
		if(C=="")
		{
			alert("Please enter the File");
			return false;
			
		}
	}
</script>	


<html>
	<head>
		<title>
			add notice
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
			
		<form action="notice_save.php" method="post" enctype="multipart/form-data">
		<table border=1 width=500 height=300 align=center>
			<tr align=center>
				<td colspan=2>
					<b>ADD NOTICE</b>
				</td>
			</tr>
			<tr align= center>
				<td>
					<b>Enter Description</b>
				</td>
				<td>
					<textarea cols=20 rows=5 name="desp" id="a">
					
					</textarea>
				</td>
			</tr>

			<tr align= center>
				<td>
					<b>Date</b>

				</td>
				<td>
					<input type="date"  id="b" name="date" value=" ">
				</td>
			</tr>
			
			<tr align= center>
				<td>
				<b>Select the File </b>
				</td>
				<td>
					<input type="file" name="file" id="c" >
				</td>
			</tr>

			<tr align=center>
				<td colspan=2 >
		             		<input type="submit" onclick="return validate();" name="login" value="login" >
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					<input type="reset" name="cancel" value="cancel">	
				</td>
			</tr>
		</table>
		</form>
				</td></tr>
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

		
		