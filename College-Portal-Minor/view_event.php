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


<table border=1 align=center width=60% height=70%>
	<tr align=center>
		<td>
			<b>ID</b>
		</td>
		<td>
			<b>Event</b>
		</td>
		<td>
			<b>Description</b>
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
	
		$sql="select * from event";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$event=$row[1];
			$desp=$row[2];
		
			echo"<tr align='center'>";
				echo"<td>$id</td>";
				echo"<td>$event</td>";
				echo"<td>$desp</td>";
				
				echo"<td>
					<a href='viiew_event_del.php?id=$id'>
					delete
					</a>
					</td>";
					
				echo"<td>
					<a href='event_update_view.php?id=$id'>
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
