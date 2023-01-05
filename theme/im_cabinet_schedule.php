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
<!-- contact form start -->
<section class="contact-form-wrap section">
  <div class="container">
    <div class="row">
      <div style="width:60% ; margin: 30%; margin-top: 0px ; height: auto;margin-left: 33%;  margin-bottom: 0px;">
        <span class="text-color">系櫃</span>
        <h3 class="text-md mb-5">你也想要一個是吧</h3>

        <div >
          <div >
            <form id="contact-form" method="get" action="schedule.php">
            <input name="rtype"type="hidden" value="cabinet">
              <div class="form-group">
                <span>請選擇櫃位</span>
                <select class="form-control" id="exampleFormControlSelect1" name="rtime">
                  <option <?php if($rtime=="台灣"){echo "selected";} ?>>台灣</option>
                  <option <?php if($rtime=="日本"){echo "selected";} ?>>日本</option>
                  <option <?php if($rtime=="瑞士"){echo "selected";} ?>>瑞士</option>
                  <option <?php if($rtime=="巴拉圭"){echo "selected";} ?>>巴拉圭</option>
                </select>
              </div>

              <div class="form-group">
                <span>你的姓名</span>
                <input name="name" type="text" class="form-control" placeholder="你的姓名" value="<?php echo $name;?>">
              </div>

              <div class="form-group">
                <span>你的學號</span>
                <input name="account" type="text" class="form-control" placeholder="你的學號" value="<?php echo $account;?>">
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