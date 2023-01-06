<?php
    $account = $_GET['account'];
    $link = mysqli_connect('localhost','root','12345678','imdepartment');
    $sql = "DELETE FROM `account` WHERE account = '$account'";
    if($rs=mysqli_query($link,$sql)){
        header("Location:im_message.php?message=刪除帳號成功");
    }
?>