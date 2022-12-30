<?php
  if(!empty($_GET['butt'])){
    $name = $_GET['name'];
    $account = $_GET['account'];
    $password = $_GET['password'];

    $link = mysqli_connect('localhost','root','12345678','imdepartment');
    $sql1 = "select * from account";
    $result1 = mysqli_query($link,$sql1);
    $times=0;
    while($row = mysqli_fetch_array($result1)){
      if($row['account']==$account){
        $times=$times+1;
      }
    }
    if($times>0){
      header("Location:im_mess.php?message=您輸入的帳號已有人註冊過");
    }else{
      $sql = "insert into account (name, account, password) values ('$name','$account','$password')";
      $result = mysqli_query($link,$sql);
      header("Location:im_mess.php?message=註冊成功");
    }

  }
?>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>註冊-歡迎加入</title>
  <script type="text/javascript">
    function show_alert()
    {
    alert("註冊成功")
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
                <h1 class="text-capitalize mb-5 text-lg">歡迎加入</h1>
      
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
        <span class="text-color">註冊</span>
        <h3 class="text-md mb-5">歡迎加入我們</h3>

        <div >
          <div >
          <form id="contact-form" method="get">
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
                <select class="form-control" id="exampleFormControlSelect1" placeholder="你是...">
                  <option>請選擇性別</option>
                  <option>男生</option>
                  <option>女生</option>
                  <option>其他</option>
                  <option>情況很複雜</option>
                
                </select>
              </div>
            <form method="get" action="im_register.php">
              <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="姓名" required>
              </div>

              <div class="form-group">
                <input name="account" type="text" class="form-control" placeholder="帳號" required>
              </div>

              <div class="form-group">
                <input name="password" type="text" class="form-control" placeholder="密碼" required>
              </div>

              <input class="btn btn-main" type="submit" name="butt" value="register">
            </form>
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