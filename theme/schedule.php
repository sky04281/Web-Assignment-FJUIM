<?php
    $name = $_GET["name"];
    $account = $_GET["account"];
    $rtype = $_GET["rtype"];
    $rtime = $_GET["rtime"];
    
    $link = mysqli_connect('localhost','root','12345678','imdepartment');
    $checktypesql = "SELECT * FROM `reservation` WHERE rtime='$rtime' AND rtype='$rtype'";
    $checktimesql = "SELECT * FROM `reservation` WHERE account='$account' AND rtime='$rtime'";
    $typers = mysqli_query($link,$checktypesql);
    $timers = mysqli_query($link,$checktimesql);
    if(mysqli_num_rows($timers) != 0){
        header("Location:im_message.php?message=您已在此時段預約過");
    }else if(mysqli_num_rows($typers) != 0){
        header("Location:im_message.php?message=此時段已被預約");
    }else{
        $sql = "INSERT INTO `reservation`(`account`, `name`, `rtime`, `rtype`) VALUES ('$account','$name','$rtime','$rtype')";
        $rs = mysqli_query($link,$sql);
        header("Location:im_message.php?message=預約成功");
    }
    
?>