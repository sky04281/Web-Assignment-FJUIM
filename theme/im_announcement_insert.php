<?php
    if(!empty($_GET['butt'])){
        $title = $_GET['title'];
        $short = $_GET['short'];
        $content = $_GET['content'];
        $date = $_GET['date'];
        
        $link = mysqli_connect('localhost','root','12345678','imdepartment');
        $sql = "insert into announcement (title,short,content,date) values ('$title','$short','$content','$date')";
        if($rs = mysqli_query($link,$sql)){
            header("Location:im_message.php?message=新增公告成功");
        }
    }
?>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">
  
  <!-- theme meta -->
  <meta name="theme-name" content="orbitor" />

  <title>新增公告</title>

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

	<!-- header -->
	<?php include("header_black.php");?>
    
    <section class="section blog-wrap" style="margin-top:50px">
        <div class="container">
            <div align="center">
                <form method = "get" action = "im_announcement_insert.php">
                    <table cellpadding="5">
                    <tr>
                        <td><input class="form-control" type="text" name="title"  placeholder="標題:" required></td>
                        <!-- <td><font color = red><php echo $SID;?></font></td> -->
                    </tr>
                    <tr>
                        <td><textarea class="form-control" name="short" cols="30" rows="5" placeholder="短文"></textarea></td>
                    </tr>
                    <tr>
                        <td><textarea class="form-control" name="content" cols="30" rows="5" placeholder="內容"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="date" class="form-control" name="date" value="2023-01-01"><td>
                    </tr>
                    <tr>
                        <td><input class="btn btn-main" type="submit" name="butt" value="發布公告"></td>
                    </tr>
                    </table>
                </form>
            </div>
        </div>    
    </section>
</body>

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