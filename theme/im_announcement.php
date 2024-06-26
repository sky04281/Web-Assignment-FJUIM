<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>最新公告</title>

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
          <h1 class="text-capitalize mb-5 text-lg">最新公告</h1>

          <ul class="list-inline breadcumb-nav">
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div style="width:80%; margin-left: 20%;">
		<?php
			$link = mysqli_connect('localhost','root','12345678','imdepartment');
			$sql = "select * from announcement";
			$result = mysqli_query($link,$sql);
			while($row = mysqli_fetch_array($result)){
				$num = $row['num'];
				$title = $row['title'];
				$short = $row['short'];
				$date = $row['date'];
		?>
	<div class="col-lg-12 col-md-12 mb-5">	
		<div class="blog-item">
			<div class="blog-item-content">
				<h3 class="mt-3 mb-3"><?php echo $title ?></h3>
				<div class="blog-item-meta mb-3">
					<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>留言數</span>
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i><?php echo $date ?></span>
				</div> 

				<p class="mb-4"><?php echo $short ?></p>
        <a href="im_announce_single.php?num=<?php echo $num ?>" class="btn btn-solid-border">了解更多</a>
				<?php
          if(isset($_SESSION['membership'])){
            if($_SESSION['membership']=="admin"){
              ?>
              <!-- <input type="button" name="button" value="新增" onclick="window.location.href='im_announcement_insert.php'" class="btn btn-small btn-main ">
              <input type="button" name="button" value="編輯" onclick="window.location.href='im_announcement_update.php?num=<?php echo $num ?>'" class="btn btn-small btn-main ">
              <input type="button" name="button" value="刪除" onclick="window.location.href='im_announcement.php?num=<?php echo $num ?>'" class="btn btn-small btn-main "> -->
              <a href="im_announcement_insert.php?" class="btn btn-solid-border">新增</a>
              <a href="im_announcement_update.php?num=<?php echo $num ?>" class="btn btn-solid-border">編輯</a>
              <a href="im_announcement_delete.php?num=<?php echo $num ?>" class="btn btn-solid-border">刪除</a>
            <?php
              }
            }  
          ?>
				
			</div>
		</div>
	</div>
	<?php
		}
	?>
</div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">

	</div>
	<div class="sidebar-widget tags mb-3">
		<h5 class="mb-4">捷徑</h5>

		<a href="im_index.php">首頁</a><br>
		<a href="im_reservation.php">預約系統</a><br>
		<a href="im_calander.php">行事曆</a><br>
		<a href="im_contact.php">關於我們</a><br>
	</div>

</div>
      </div>
	  <div class="row mt-5">
      <div style="margin-left:40%">
        <nav class="pagination py-2 d-inline-block">
          <div class="nav-links">
            <span aria-current="page" class="page-numbers current">1</span>
            <a class="page-numbers" href="#">2</a>
            <a class="page-numbers" href="#">3</a>
            <a class="page-numbers" href="#"><i class="ti-angle-right"></i></a>
          </div>
        </nav>
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