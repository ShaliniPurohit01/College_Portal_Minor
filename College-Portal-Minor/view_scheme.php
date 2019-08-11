
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
			ID
		</td>
		<td>
			Course
		</td>
		<td>
			Scheme
		</td>
		<td>
			Click to
		</td>
		
		<td>
			Click to
		</td>

	</tr>
			<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from scheme";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$cate=$row[1];
			$sch=$row[2];
		
			echo"<tr align='center'>";
				echo"<td>$id</td>";
				echo"<td>$cate</td>";
				echo"<td>$sch</td>";
				echo"<td>
					<a href='view_scheme_del.php?id=$id'>
					delete
					</a>
					</td>";
					
				echo"<td>
					<a href='scheme_update_view.php?id=$id'>
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
