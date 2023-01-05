<?php
    $account = $_GET["account"];
    $rtype = $_GET["rtype"];
    $rtime = $_GET["rtime"];
    
    $link = mysqli_connect('localhost','root','12345678','imdepartment');
    $sql = "DELETE FROM `reservation` WHERE `account` = '$account' AND `rtime` = '$rtime'";
    mysqli_query($link, $sql);

    header("Location:im_reservation_$rtype.php");
?>