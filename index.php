<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
		<link href="style1.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>

</head>
<body>
    <div class="header">
        <div class="wrap">
        <!--start-logo-->
        <div class="logo">
            <a href="index.php" style="font-size: 30px;">Free Health Camp</a>
        </div>
        <!--end-logo-->
        <!--start-top-nav-->
        <div class="top-nav">
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                
                <li><a href="contact.php">contact</a></li>
            </ul>					
        </div>
        <div class="clear"> </div>
        <!--end-top-nav-->
    </div>
    <!--end-header-->
</div>
<div class="clear"> </div>
    <!--start-image-slider---->
            <div class="image-slider">
                <!-- Slideshow 1 -->
                <ul class="rslides" id="slider1">
                  <li><img src="slider-image1.jpg" alt=""></li>
                  <li><img src="slider-image2.jpg" alt=""></li>
                  <li><img src="slider-image1.jpg" alt=""></li>
                </ul>
                 <!-- Slideshow 2 -->
            </div>
            <!--End-image-slider---->
    <div class="clear"> </div>
    <div class="content-grids">
        <div class="wrap">
        <div class="section group">
                        
                    
        <div class="listview_1_of_3 images_1_of_3">
            <div class="listimg listimg_1_of_2">
                  <img src="grid-img3.png">
            </div>
            <div class="text list_1_of_2">
                  <h3>Patients</h3>
                  <p>Register & Book Appointment</p>
                  <div class="button"><span><a href="login.php">Click Here</a></span></div>
            </div>
        </div>	

        <div class="listview_1_of_3 images_1_of_3">
            <div class="listimg listimg_1_of_2">

                  <img src="grid-img1.png">
            </div>
            <div class="text list_1_of_2">
                  <h3>Doctors Login</h3>
                
                  <div class="button"><span><a href="dashboard.php">Click Here</a></span></div>
                  <!-- <div class="button"><span><a href="hms/doctor/">Click Here</a></span></div> -->
            </div>
        </div>


            <div class="listview_1_of_3 images_1_of_3">
            <div class="listimg listimg_1_of_2">
                  <img src="grid-img2.png">
            </div>
            <div class="text list_1_of_2">
                  <h3>Check Doctor Availability</h3>
                
                  <div class="button"><span><a href="admin.php">Click Here</a></span></div>
             </div>
        </div>			
    </div>
    </div>
   </div>
   <div class="wrap">
   <div class="content-box">
   <div class="section group">
        <div class="col_1_of_3 span_1_of_3 frist">
        
        </div>
        <div class="col_1_of_3 span_1_of_3 second">
            
        </div>
        <div class="col_1_of_3 span_1_of_3 frist">
            
            
        </div>
    </div>
   </div>
   </div>
   <div class="clear"> </div>
   <div class="footer">
        <div class="wrap">
       <div class="footer-left">
               <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
       </div>
   
       <div class="clear"> </div>
   </div>
   </div>
<!--end-wrap-->
</body>
</html>