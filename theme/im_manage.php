<!DOCTYPE html>

<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">
  
  <!-- theme meta -->
  <meta name="theme-name" content="orbitor" />

  <title>帳號管理平台</title>

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
  <!--BS icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
 
<body>

	<!-- header text-black -->
	<?php include("header_black.php"); ?>
  
    <section class="section blog-wrap" style="margin-top:25px">
        <div class="container">
            <div align="center">	
                <form method=get action="im_manage.php">
                    <input type="text" name=searchtxt placeholder="Search...">
                    <input class="btn btn-main" type="submit" name="butt" value="search">
                </form>   
                <table width=500 cellpadding="3">
                  <caption><tr><td>姓名</td><td>帳號</td><td>功能</td></tr></caption>
                  <?php
                    if(!empty($_GET['butt'])){
                      $searchtxt = $_GET['searchtxt'];
                      $link = mysqli_connect('localhost','root','12345678','imdepartment');
                      if(empty($searchtxt)){
                        $sql  = "select * from account";
                        $result = mysqli_query($link,$sql);
                        While($row=mysqli_fetch_assoc($result)){
                          echo "<tr><td>", $row['name'], "</td><td>", $row['account'], "</td><td><a href=update.php?account=", $row['account'], ">[修改]</a><a href=im_delete.php?account=", $row['account'], ">[刪除]</a></td></tr>";
                        }
                      }else if(!empty($searchtxt)){
                        $sql  = "select * from account where name like '%$searchtxt%'";
                        $result = mysqli_query($link,$sql);
                        While($row=mysqli_fetch_assoc($result)){
                          echo "<tr><td>", $row['name'], "</td><td>", $row['account'], "</td><td><a href=update.php?account=", $row['account'], ">[修改]</a><a href=im_delete.php?account=", $row['account'], ">[刪除]</a></td></tr>";
                        }
                      }
                    }else{
                      $link = mysqli_connect('localhost','root','12345678','imdepartment');
                      $sql  = "select * from account";
                      $result = mysqli_query($link,$sql);
                      While($row=mysqli_fetch_assoc($result)){
                        echo "<tr><td>", $row['name'], "</td><td>", $row['account'], "</td><td><a href=im_update.php?account=", $row['account'], ">[修改]</a><a href=im_delete.php?account=", $row['account'], ">[刪除]</a></td></tr>";
                      }
                    }
                  ?>
                </table>
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
