<?php session_start(); ?>
<nav class="navbar navbar-expand-lg py-4 navigation header-padding nav-text-white" id="navbar">
    <div class="container-fluid">
        <div class="collapse navbar-collapse text-center" id="navbarsExample09">
            <ul class="navbar-nav m-left">
                <li class="nav-item active">
                    <a class="nav-link" href="im_index.php">首頁 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="im_reservation.php">預約系統</a></li>
                <li class="nav-item"><a class="nav-link" href="im_calander.php">行事曆</a></li>
                <li class="nav-item"><a class="nav-link" href="im_announcement.php">最新公告</a></li>
                <li class="nav-item"><a class="nav-link" href="im_contact.php">關於我們</a></li>
                <?php
                    if(isset($_SESSION["membership"])){
                        if ($_SESSION["membership"] == "admin") {
                            echo "<li class='nav-item'>","<a class='nav-link'", "href='im_manage.php'>管理平台</a></li>";
                        }
                    }                
                ?>
            </ul>
        </div>
        <?php 
        if(isset($_SESSION["membership"]))
        {   
            echo "<span style='color:white; font-size:16px;'>","您好 ",$_SESSION["name"],"</span>";
            echo "<a href='im_logout.php'", "class='btn btn-solid-border d-none d-lg-block'",
            "style='margin-left: 10px'>登出", 
            "<i class='fa fa-angle-right ml-2'></i></a>";
        }else
        {
            echo "<a href='im_login.php'", "class='btn btn-solid-border d-none d-lg-block'>登入",
            "<i class='fa fa-angle-right ml-2'></i></a>";
        }
        ?>
    </div>
</nav>