<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>預約麻將</title>
  <script type="text/javascript">
    function show_alert()
    {
    alert("預約成功")
    }
    </script>

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
            <form id="contact-form" method="post">
              <!-- form message -->
              <div class="row">
                <div class="col-12">
                    <!---
                  <div class="alert alert-success contact__msg" style="display: none" role="alert">
                    註冊成功
                  </div>
                -->
                </div>
              </div>

              <div class="form-group">
                <span>請選擇時段</span>
                <select class="form-control" id="exampleFormControlSelect1" placeholder="你是...">
                  <option>10:00~12:00</option>
                  <option>12:00~14:00</option>
                  <option>14:00~16:00</option>
                  <option>16:00~18:00</option>
                </select>
              </div>

              <div class="form-group">
                <input name="subject" id="subject" type="text" class="form-control" placeholder="你的姓名">
              </div>

              <div class="form-group">
                <input name="subject" id="subject" type="text" class="form-control" placeholder="你的學號">
              </div>

              <button class="btn btn-main" name="submit" type="submit" onclick="show_alert()">預約</button>
              
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