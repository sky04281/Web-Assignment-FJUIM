<?php
    if(!empty($_GET['butt'])){
    $name = $_GET['name'];
    $account = $_GET['account'];
    $password = $_GET['password'];
    $membership = $_GET['membership'];

    $link = mysqli_connect('localhost', 'root', '12345678', 'imdepartment');
    $sql = "update account set account='$account', password='$password', membership='$membership' where name='$name'";
    $result = mysqli_query($link, $sql);
    }
?>
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

	<!-- header -->
	<?php include("header.php");?>
    
    <section class="section blog-wrap" style="margin-top:50px">
        <div class="container">
            <div align="center">	
                <?php
                    $name = $_GET['name'];
                    $link = mysqli_connect('localhost', 'root', '12345678', 'imdepartment');
                    $sql = "select * from account where name = '$name'";
                    $result = mysqli_query($link, $sql);
                    if($row=mysqli_fetch_assoc($result))
                    {
                        $name = $row['name'];
                        $account = $row['account'];
                        $password = $row['password'];
                        $membership = $row['membership'];
                    }
                ?>
                <form method = "get" action = "im_update.php">
                    <input type=hidden name="name" value="<?php echo $name; ?>">
                    <table cellpadding="5">
                    <tr>
                        <td>姓名</td>
                        <td><input type = text name = "name" value = "<?php echo $name; ?>" class="form-control"></td>
                        <!-- <td><font color = red><php echo $SID;?></font></td> -->
                    </tr>
                    <tr>
                        <td>帳號</td>
                        <td><font color = red><?php echo $account; ?></font></td>
                        <input type = hidden name = "account" value = "<?php echo $account ?>">
                    </tr>
                    <tr>
                        <td>密碼</td>
                        <td><input type = text name = "password" value = "<?php echo $password; ?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>權限資格&emsp;</td>
                        <td><input type = text name = "membership" value = "<?php echo $membership; ?>" class="form-control"></td>
                        <!-- <?php if($membership == 1){ ?>
                            <td>權限資格&emsp;</td>
                            <td><input type = "text" name = "membership" value = "<?php echo $membership; ?>" class="form-control"></td>
                        <?php }else if($membership == -1){ ?>
                            <td>權限資格&emsp;</td>
                            <td><font color = red><?php echo $membership; ?></font></td>
                            <input type = hidden name = "membership" value = "<?php echo $membership ?>">
                         <?php } ?>可用在個人修改密碼部分 -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="btn btn-main" type="submit" name="butt" value="更改資料"></td>
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
