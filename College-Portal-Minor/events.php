<?php

include("fronthead.php");


?>

 <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Our Events</h1>
            </div>
          </div>
        </div>
      </section>
<br>
	  <br>
	  <br>
	  <style>
table {
    border-collapse: collapse;
    background-color:white;
	
	
	 box-shadow: 5px 10px gray;
}

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
	
    color:black;
	font-size:20px;
	
	
}

</style>
	  
	  

<table border=0 align=center width=70% >
	
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
				echo"<td><a href=''>$event</a></td>";
				echo"<td>$desp</td>";
			echo"</tr>";
		
		}
		?>
</table>

</br>
</br>
</br>

<?php

include("frontfooter.php");


?>
