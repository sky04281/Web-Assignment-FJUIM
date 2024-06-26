<?php
	session_start();
  $account = $_SESSION["account"];
  $name = $_SESSION["name"];
	if (!(isset($_SESSION["membership"]))) {
		header("Location:im_message.php?message=請先登入");
	}
  $rtime = $_GET["rtime"];
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>預約麻將</title>
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
                <h1 class="text-capitalize mb-5 text-lg">預約麻將</h1>
      
                <ul class="list-inline breadcumb-nav">
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
<!-- contact form start -->
<section class="contact-form-wrap section">
  <div class="container">
    <div class="row">
      <div style="width:60% ; margin: 30%; margin-top: 0px ; height: auto;margin-left: 33%;  margin-bottom: 0px;">
        <span class="text-color">麻將</span>
        <h3 class="text-md mb-5">你也想打是吧</h3>

        <div >
          <div >
            <form id="contact-form" method="get" action="schedule.php">
              <input name="rtype"type="hidden" value="majang">
              <div class="form-group">
                <span>請選擇時段</span>
                <select class="form-control" name="rtime" id="exampleFormControlSelect1">
                  <option <?php if($rtime=="10:00~12:00"){echo "selected";} ?>>10:00~12:00</option>
                  <option <?php if($rtime=="12:00~14:00"){echo "selected";} ?>>12:00~14:00</option>
                  <option <?php if($rtime=="14:00~16:00"){echo "selected";} ?>>14:00~16:00</option>
                  <option <?php if($rtime=="16:00~18:00"){echo "selected";} ?>>16:00~18:00</option>
                </select>
              </div>

              <div class="form-group">
                <span>你的姓名</span>
                <input name="name" type="text" class="form-control" placeholder="你的姓名" value="<?php echo $name; ?>">
              </div>

              <div class="form-group">
                <span>你的學號</span>
                <input name="account" type="text" class="form-control" placeholder="你的學號" value="<?php echo $account; ?>">
              </div>
              <button class="btn btn-main" name="submit" type="submit">預約</button>
            </form>
          </div>

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