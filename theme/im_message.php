<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Orbitor - Software Company Template</title>

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
          <h1 class="text-capitalize mb-5 text-lg">系學會網頁</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section portfolio start -->
<section class="contact-form-wrap section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="heading text-center">
					<h3 class="mb-4"><?php echo $_GET["message"]; ?></h2>
                    <?php
                    if($_GET['message']=="帳號或密碼錯誤"){
                    ?>
                        <a href="im_login.php" class="btn btn-solid-border">重新登入</a>
                    <?php
                    }else if(($_GET['message']=="註冊成功") || ($_GET['message']=="請先登入")){
                    ?>
                        <a href="im_login.php" class="btn btn-solid-border">點此登入</a>
                    <?php
                    }else if($_GET['message']=="您輸入的學號已有人註冊過"){
                    ?>
                        <a href="im_register.php" class="btn btn-solid-border">重新註冊</a>
                    <?php
                    }else if($_GET['message']=="此時段已被預約"){
                    ?>
                        <a href="im_reservation.php" class="btn btn-solid-border">預約其他時段</a>
                    <?php
                    }else if($_GET['message']=="您已在此時段預約過"){
                    ?>
                        <a href="im_reservation.php" class="btn btn-solid-border">預約其他時段</a>
                    <?php
                    }else if($_GET['message']=="預約成功"){
                    ?>
                        <a href="im_reservation.php" class="btn btn-solid-border">回到預約系統</a>
                    <?php
                    }else if($_GET['message']=="新增公告成功"){
                    ?>
                        <a href="im_announcement.php" class="btn btn-solid-border">回到公告管理平台</a>
                    <?php
                    }else if($_GET['message']=="刪除公告成功"){
                    ?>
                        <a href="im_announcement.php" class="btn btn-solid-border">回到公告管理平台</a>
                    <?php
                    }else if($_GET['message']=="更新公告成功"){
                    ?>
                        <a href="im_announcement.php" class="btn btn-solid-border">回到公告管理平台</a>
                    <?php
                    }else{
                    ?>
                        <a href="im_index.php" class="btn btn-solid-border">回首頁</a>
                    <?php
                    }
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