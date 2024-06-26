<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>預約系櫃</title>

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
                <h1 class="text-capitalize mb-5 text-lg">預約系櫃</h1>
      
                <ul class="list-inline breadcumb-nav">
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>


<section class="section case-study">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="case-study-content text-center mb-5">
					<h2 class="mb-4">當自己家!東西隨便放!</h2>
					<p>放東西</p>
				</div>
			</div>
		</div>



		<div class="case-timeline">
			<div class="case-timeline-divider"></div>
			<div class="case-timeline-dot"></div>
			
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="case-img ">
						<img src="images/about/101.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="case-content">
						<h4 class="mb-3">台灣</h4>
						<?php
							$rtime = "台灣"; $rtype = "cabinet";
							include("im_reservation_check.php"); 
						?>
					</div>
				</div>
			</div>
		</div>


		<div class="case-timeline">
			<div class="case-timeline-divider"></div>
			<div class="case-timeline-dot"></div>
			<div class="row align-items-center">	
				<div class="col-lg-6 order-2 order-lg-1">
					<div class="case-content">
						<h4 class="mb-3">日本</h4>
						<?php
							$rtime = "日本"; $rtype = "cabinet";
							include("im_reservation_check.php"); 
						?>
					</div>
				</div>
				<div class="col-lg-6  order-1 order-lg-2">
					<div class="case-img">
						<img src="images/about/skytree.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>

		<div class="case-timeline">
			<div class="case-timeline-divider"></div>
			<div class="case-timeline-dot"></div>

			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="case-img">
						<img src="images/about/switzerland.jpg" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="case-content">
						<h4 class="mb-3">瑞士</h4>
						<?php
							$rtime = "瑞士"; $rtype = "cabinet";
							include("im_reservation_check.php"); 
						?>
					</div>
				</div>
			</div>
		</div>

		<div class="case-timeline">
			<div class="case-timeline-divider"></div>
			<div class="case-timeline-dot"></div>

			<div class="row align-items-center">
					<div class="col-lg-6 order-2 order-lg-1">
					<div class="case-content">
						<h4 class="mb-3">巴拉圭</h4>
						<?php
							$rtime = "巴拉圭"; $rtype = "cabinet";
							include("im_reservation_check.php"); 
						?>
					</div>
				</div>

				<div class="col-lg-6  order-1 order-lg-2">
					<div class="case-img">
						<img src="images/about/53.jpg" alt="" class="img-fluid">
					</div>
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