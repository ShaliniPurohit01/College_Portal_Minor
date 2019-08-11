<html>
	<head>
		<title>
			Change Password
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
			

	
	
		<form action="change_pass_save.php" method="post">
		<table border=1 width=300 height=300 align=center>
			<tr align= center>
				<td colspan=2>
					<b>CHANGE Password</b>
				</td>
			</tr>
			
			<tr align= center>
				<td>
					<b>Old Password</b>

				</td>
				<td>
					<input type="password" name="opass" value=" " maxlength=8>
				</td>
			</tr>
			
			<tr align= center>
				<td>
					<b>New Password</b>

				</td>
				<td>
					<input type="password" name="npass" value=" " maxlength=8>
				</td>
			</tr>

			<tr align= center>
				<td>
					<b>Confirm Password</b>

				</td>
				<td>
					<input type="password" name="cpass" value=" " maxlength=8>
				</td>
			</tr>

			<tr align=center>
				<td colspan=2 >
		             		<input type="submit" name="change" value="change" >
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
	</body>
</html>

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

