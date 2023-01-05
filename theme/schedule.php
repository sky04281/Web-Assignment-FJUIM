<?php
    $name = $_GET["name"];
    $account = $_GET["account"];
    $rtype = $_GET["rtype"];
    $rtime = $_GET["rtime"];
    
    $link = mysqli_connect('localhost','root','12345678','imdepartment');
    $checktypesql = "SELECT * FROM `reservation` WHERE rtime=$rtime AND rtype=$rtype";
    $checktimesql = "SELECT * FROM `reservation` WHERE account=$account AND rtime=$rtime";
    $typers = mysqli_query($link,$checktypesql);
    $timers = mysqli_query($link,$checktimesql);
    if(isset($typers)){
        //header("Location:im_message.php?message=此時段已被預約");
    }else if(isset($timers)){
        //header("Location:im_message.php?message=您已在此時段預約過");
    }else{
        $sql = "INSERT INTO `reservation`(`account`, `name`, `rtime`, `rtype`) VALUES ('$account','$name','$rtime','$rtype')";
        $rs = mysqli_query($link,$sql);
        //header("Location:im_message.php?message=預約成功");
    }
    
?>