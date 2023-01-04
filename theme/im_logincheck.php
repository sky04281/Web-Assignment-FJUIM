<?php
    session_start();
    $account = $_POST["account"];
    $password = $_POST["password"];

    $link = mysqli_connect('localhost', 'root', '12345678', 'imdepartment');

    $sql = "SELECT DISTINCT * FROM `account` WHERE account = '$account' AND `password` = '$password'";

    $result = mysqli_query($link, $sql);
    
    if($row = mysqli_fetch_assoc($result))
    {
        $_SESSION["membership"] = $row['membership'];
        $_SESSION["name"] = $row['name'];
        header("location:im_message.php?message=登入成功！");
    }
    else
    {
        header("location:im_message.php?message=登入失敗！");
    }
?>