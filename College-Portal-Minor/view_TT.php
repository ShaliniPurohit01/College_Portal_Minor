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


<table border=1 align=center width=100% height=70%>
	<tr align=center>
		<td>
			<b>ID</b>
		</td>
		<td>
			<b>Course</b>
		</td>
		<td>
			<b>Scheme</b>
		</td>
		<td>
			<b>ClassName</b>
		</td>
		<td>
			<b>Section</b>
		</td>
		<td>
			<b>Subject</b>
		</td>
		<td>
			<b> Day</b>
		</td>
		<td>
			<b> Time</b>
		</td>
		<td>
			<b>Click to</b>
		</td>
		<td>
			<b>Click to</b>
		</td>

	</tr>
			<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from TT";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$cate=$row[1];
			$sch=$row[2];
			$cla=$row[3];
			$sec=$row[4];
			$sub=$row[5];
			$day=$row[6];
			$time=$row[7];
			
			echo"<tr align='center'>";
				echo"<td>$id</td>";
				echo"<td>$cate</td>";
				echo"<td>$sch</td>";
				echo"<td>$cla</td>";
				echo"<td>$sec</td>";
				echo"<td>$sub</td>";
				echo"<td>$day</td>";
				echo"<td>$time</td>";
				
				echo"<td>
					<a href='view_TT_del.php?id=$id'>
					delete
					</a>
					</td>";
					
				echo"<td>
					<a href='TT_update_view.php?id=$id'>
					update
					</a>
					</td>";
			echo"</tr>";
		
		}
		?>
</table>


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
