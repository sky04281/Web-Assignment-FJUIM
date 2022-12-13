<?php
  if(!empty($_GET['butt'])){
    $account = $_GET['account'];
    $password = $_GET['password'];

    $link = mysqli_connect('localhost','root','12345678','ImDepartment');
    $sql = "select * from account where account = '$account' && password = '$password'";
    $result = mysqli_query($link,$sql);
    if($row=mysqli_fetch_array($result)){
      if($account==$row['account']&&$password==$row['password']){
        header("Location:im_mess.php?message=登入成功");
      }
    }else{
      header("Location:im_mess.php?message=登入失敗");
    }
  }  
?>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>登入–歡迎回來</title>

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


	<nav class="navbar navbar-expand-lg  py-4 navigation header-padding nav-text-white" id="navbar">
		<div class="container-fluid">
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav m-left">
			  <li class="nav-item active">
				<a class="nav-link" href="im_index.html">首頁<span class="sr-only">(current)</span></a>
			  </li>
			   
			    
			   
                <li class="nav-item"><a class="nav-link" href="im_reservation.html">預約系統</a></li>
                <li class="nav-item"><a class="nav-link" href="im_calander.html">行事曆</a></li>
			
				<li class="nav-item"><a class="nav-link" href="im_announcement.html">最新公告</a></li>

				
			
			  	
			   <li class="nav-item"><a class="nav-link" href="im_contact.html">關於我們</a></li>
			</ul>

			
		  
	</nav>


    <section class="page-title bg-1">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block text-center">
                <h1 class="text-capitalize mb-5 text-lg">歡迎回來</h1>
      
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
        <span class="text-color">登入</span>
        <h3 class="text-md mb-5">請輸入帳號密碼</h3>

        <div weight="100%" height="30%">
          <div weight="100%">
            <form id="contact-form" action="im_login.php" weidth="30%" method="get">
              <!-- form message -->
              <div class="row">
                <div class="col-12">
                  
                </div>
              </div>

              <div class="form-group">
                <input name="account" type="text" class="form-control" placeholder="帳號" required>
              </div>

              <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="密碼" required>
              </div>

              <input class="btn btn-main" type="submit" name="butt" value="login">
              <a href="im_register.php" class="btn btn-solid-border">register</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>

<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<h3>製作團隊</h3>
					</div>
					<p>陸霖、吳少宇、翁靖翔</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-4">瀏覽其他頁面
					</h4>

					<ul class="list-unstyled footer-menu lh-35" >
						<li><a href="im_reservation.html">預約系統</a></li>
						<li><a href="im_calander.html">行事曆</a></li>
						<li><a href="im_announcement.html">最新公告</a></li>
						<li><a href="im_contact.html">關於我們</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<h3>聯絡我們</h3>
					</div>
					<p>新北市新莊區242中正路510號
						利瑪竇大樓LM306</p>
					<p>+886-2-2905-2666</p>
					<p>+886-2-2905-2946</p>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">陸霖、吳少宇、翁靖翔</span><a href="https://themefisher.com/" target="_blank"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
   

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