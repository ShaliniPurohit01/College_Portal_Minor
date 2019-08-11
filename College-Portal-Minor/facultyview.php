<?php

include("fronthead.php");


?>

 <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Our Faculties </h1>
            </div>
          </div>
        </div>
      </section>

<section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Meet Our Qualified Faculties</h2>
             
			 
            </div>
          </div>
          <!-- END row -->
<div align='center'>

<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from faculty";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
			$name=$row[1];
			
			
		$file="upload/".$row[11];
					
				
		
			
				echo"<img src='$file' height=200 width=200 style='border-radius:50%'>";
				echo"&nbsp;";echo"&nbsp;";echo"&nbsp;";echo"&nbsp;";
				echo"<font style='color:black;font-size:16px;font-family:forte'>";
				echo"$name";
				
				echo"</font>";
				
				echo"&nbsp;";
				
				echo"&nbsp;";echo"&nbsp;";echo"&nbsp;";echo"&nbsp;";echo"&nbsp;";
                
		}
		
		?>
		  </br>
		  </br></br>
		  </br>
</div>
</section>
<?php

include("frontfooter.php");


?>