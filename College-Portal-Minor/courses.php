<!DOCTYPE html>

<!-- 
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITCSmlsu </title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>(UTC+5:30)Chennai,Kolkata,Mumbai,New Delhi</span>
              <span><i class="icon-phone2"></i>+91-0294-247-1150</span>
              <span><i class="icon-mail"></i>itcsmlsu.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
                <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             <br>
		  <font face="forte" size="+4" style="color:red;align:left">itcsmlsu.in</font>		  
		  </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
			  <li><a href="about.php">About Us</a></li>
                  
              <li class="active"><a href="courses.php">Courses</a></li>
             
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Student Corner</a>
                <ul class="dropdown-menu">
                  
				 
                      <li><a href="scheme.php">Scheme</a></li>
                      <li><a href="class.php">Class</a></li>
                      <li><a href="section.php">Section</a></li>
					  <li><a href="subject.php">Subject</a></li>
					  <li><a href="notice.php">Notice</a></li>
					  <li><a href="timetable.php">TimeTable</a></li>
				  
				  
				  
                </ul>
              </li>
			   <li><a href="facultyview.php">Faculties</a></li>
              <li><a href="events.php">Events</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Our Courses</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <div class="text-uppercase probootstrap-uppercase">Featured Course</div>
                  <h3> Quick Link</h3>
                  <p>
				  <?php
				  include("viewcoursef.php");
				  ?>
				  
				   </p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
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
    
      
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>
<?php

include("frontfooter.php");


?>

