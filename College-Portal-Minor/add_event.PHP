<script>
	function validate()
	{
		var A=document.getElementById("a").value;
		var B=document.getElementById("b").value;
		
		
		if(A=="")
		{
			alert("Please enter an Event");
			return false;
			
		}
		if(B=="")
		{
			alert("Please enter any Description");
			return false;
			
		}
		
	}
</script>	


<html>
	<head>
		<title>
			add event
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
			
			
		<form action="event_save.php" method="post">
			<table border=1 height=300 width=500 align=center>
				<tr align=center>
					<td colspan=2>
						<b> ADD EVENT </b>
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b>Enter Event</b>
					</td>
					<td>
						<input type="text" id="a" value="" name="event" >
					</td>
				</tr>
				
				<tr align=center>
					<td>
						<b>Description</b>
					</td>
					<td>
						<textarea rows=5 cols=21 name="desp" id="b">
						</textarea>
					</td>
				</tr>
				
				<tr align=center>
					<td colspan=2>
						<input type="submit" onclick="return validate();" value="Add" >
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset" value="Cancel">
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