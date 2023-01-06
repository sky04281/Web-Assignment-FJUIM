<?php
    $num = $_GET['num'];
    $link = mysqli_connect('localhost','root','12345678','imdepartment');
    $sql = "delete from announcement where num = $num";
    if($rs=mysqli_query($link,$sql)){
        header("Location:im_message.php?message=刪除公告成功");
    }
?>