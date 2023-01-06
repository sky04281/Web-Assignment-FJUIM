<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>行事曆</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/modal-video/modal-video.css">
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>


	<!-- header -->
	<?php include("header.php");?>


    <section class="page-title bg-1">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block text-center">
                <h1 class="text-capitalize mb-5 text-lg">即將到來的活動</h1>
      
                <ul class="list-inline breadcumb-nav">
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

<section class="section service-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="service-img mb-5 mb-lg-0">
					<img src="images/calander/campus2.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="service-info ">
					<?php
						$cnum = "01";
						include("im_calander_link.php");
					?>
				</div>
			</div>
		</div>

		<div class="content-padding position-relative">
			<div class="row">
				<div class="col-lg-6">
					<div class="service-info mb-5 mb-lg-0">
						<?php
							$cnum = "02";
							include("im_calander_link.php");
						?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="service-img">
						<img src="images/calander/uniform.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="service-img mb-5 mb-lg-0">
					<img src="images/calander/camp.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="service-info">
					<?php
						$cnum = "03";
						include("im_calander_link.php");
					?>
				</div>
			</div>
		</div>

        <div class="content-padding position-relative">
			<div class="row">
				<div class="col-lg-6">
					<div class="service-info mb-5 mb-lg-0">
						<?php
							$cnum = "04";
							include("im_calander_link.php");
						?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="service-img">
						<img src="images/calander/drink.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>

        <div class="row">
			<div class="col-lg-6">
				<div class="service-img mb-5 mb-lg-0">
					<img src="images/calander/rest.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="service-info">
					<?php
						$cnum = "05";
						include("im_calander_link.php");
					?>
				</div>
			</div>
		</div>

        


	</div>
</section>


	<!-- footer -->
	<?php include("footer.php");?>
   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

     <script src="plugins/modal-video/modal-video.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>

  </body>
  </html>