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

  <title>最新消息</title>

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
  <link rel="stylesheet" href="css/like.scss">

  

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

			
		  </div>
          <a href="im_login.html" class="btn btn-solid-white d-none d-lg-block">登入 <i class="fa fa-angle-right ml-2"></i></a>
		</div>
	</nav>


    <section class="page-title bg-1">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block text-center">
                <h1 class="text-capitalize mb-5 text-lg">最新消息</h1>
      
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
      <div style="width:60%; margin-left: 20%;">
        <div class="row">
	<div class="col-lg-12 mb-5">
		<div class="single-blog-item">
			<div class="blog-item-content mt-4">
				<?php
					$link = mysqli_connect('localhost','root','12345678','imdepartment');
					if(!isset($_GET['num'])){	
						$sql = "select * from announcement where num = 1";
						$result = mysqli_query($link,$sql);
						if($row = mysqli_fetch_array($result)){
							$num = $row['num'];
							$title = $row['title'];
							$short = $row['short'];
							$content = $row['content'];
							$date = $row['date'];
						}
					}else if(isset($_GET['num'])){
						$num = $_GET['num'];
						$sql = "select * from announcement where num = '$num'";
						$result = mysqli_query($link,$sql);
						if($row = mysqli_fetch_array($result)){
							$title = $row['title'];
							$short = $row['short'];
							$content = $row['content'];
							$date = $row['date'];
						}
					}
				?>
				<h2 class="mt-3 mb-3 text-md"><?php echo $title ?></h2>
				<div class="blog-item-meta mb-5">
					<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>2 則留言</span>
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"><?php echo $date ?></i></span>
					
				</div>	
				<p class="lead mb-4"><?php echo $content ?></p>

			</div>
		</div>
	</div>


	<div class="col-lg-12 mb-5">
		<div class="posts-nav bg-gray p-5 d-lg-flex d-md-flex justify-content-between ">
			<div class="posts-prev-item mb-4 mb-lg-0" style="padding: 0 70px;">
				<!-- <span class="nav-posts-desc">上一篇公告</span> -->
				<h6 class="nav-posts-title mt-1">
					<?php
						$one = 1;
						$previous = $num-$one;
						$next = $num+$one;
						$count_sql = "select * from announcement order by num desc limit 1";
						$count_rs = mysqli_query($link,$count_sql);
						if($row_count = mysqli_fetch_array($count_rs)){
							$count = $row_count['num'];
						}
						if($previous==0){
							$previous = $count;
						}
						if($next > $count){
							$next = 1;
						}
						$pre_sql = "select * from announcement where num = '$previous'";
						$next_sql = "select * from announcement where num = '$next'";
						$pre_rs = mysqli_query($link,$pre_sql);
						$next_rs = mysqli_query($link,$next_sql);
						if($row_pre = mysqli_fetch_array($pre_rs)){
							$pre_title =$row_pre['title'];
						}
						if($row_next = mysqli_fetch_array($next_rs)){
							$next_title =$row_next['title'];
						}
					?>
					<a href="im_announce_single.php?num=<?php echo $previous ?>"><b>←上一篇公告</b></a>
				</h6>
			</div>
			<div class="border"></div>

			<div class="posts-next-item pt-4 pt-lg-0" style="padding: 0 80px;">
				<!-- <span class="nav-posts-desc text-lg-right text-md-right d-block">下一篇公告</span> -->
				<h6 class="nav-posts-title mt-1">
					<a href="im_announce_single.php?num=<?php echo $next ?>"><b>下一篇公告→</b></a>
				</h6>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="comment-area mt-4 mb-5">
			<h4 class="mb-4">留言</h4>
			<ul class="comment-tree list-unstyled">
				<li class="mb-5">
					<div class="comment-area-box">
						

						<div class="comment-info">
							<h5 class="mb-1">John</h5>
							<span>United Kingdom</span>
							<span class="date-comm">| Posted October 7, 2018</span>
						</div>

						<div class="comment-content mt-3">
							<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
						</div>
					</div>
				</li>

				<li>
					<div class="comment-area-box">
						

						<div class="comment-info">
							<h5 class="mb-1">Philip W</h5>
							<span>United Kingdom</span>
							<span class="date-comm">| Posted October 7, 2018</span>
						</div>

						<div class="comment-content mt-3">
							<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="col-lg-12">
		<form class="comment-form mt-5" id="comment-form">
			<h4 class="mb-4">寫點東西...</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">		
						<font class="form-control">姓名</font>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" type="text" name="mail" id="mail" placeholder="系級:">
					</div>
				</div>
			</div>


			<textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="內容"></textarea>

			<input class="btn btn-main" type="submit" name="submit-contact" id="submit_contact" value="留言">
		</form>
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