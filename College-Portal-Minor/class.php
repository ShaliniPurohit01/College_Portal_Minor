<?php

include("fronthead.php");


?>



 <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Our Classes</h1>
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
<table border=1 align=center width=60% height=70%>
	<tr align=center>
		<td>
			<b>Course</b>
		</td>
		<td>
			<b>Scheme</b>
		</td>
		<td>
			<b>ClassName</b>
		</td>
	</tr>
			<?php
		mysql_connect("localhost","root","");
		mysql_select_db("college");
	
		$sql="select * from classname";
		$rs=mysql_query($sql);
	
		while($row=mysql_fetch_array($rs))
		{
	
			$cate=$row[1];
			$sch=$row[2];
			$cla=$row[3];
		
			echo"<tr align='center'>";
				
				echo"<td>$cate</td>";
				echo"<td>$sch</td>";
				echo"<td>$cla</td>";
				
			echo"</tr>";
		
		}
		?>
</table>
<br>
<br>
<br>

<footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About The College</h3>
                <p>Mohanlal Sukhadia University (erstwhile Udaipur University) at Udaipur is a State University established by an Act in the year 1962 to cater the needs of higher education in Southern Rajasthan with more then 2.25 Lakh Students.
					University has ensured overall socio-economic growth of all the sections of society by encouraging greater access and inclusive approach making it most preferred institution for higher education, learning and research.</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="home.php">Home</a></li>
                  <li><a href="courses.php">Courses</a></li>
                  <li><a href="professor.php">Professor</a></li>
                  <li><a href="news.php">News</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Mohanlal Sukhadia University Udaipur  313001,Rajasthan,India</span></li>
                  <li><i class="icon-mail"></i><span>itcsmlsu.com</span></li>
                  <li><i class="icon-phone2"></i><span>+91-0294-2471150</span></li>
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2017 <a href="https://itcsmlsu.com/">itcsmlsu.in</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by SHALINI PUROHIT</a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>