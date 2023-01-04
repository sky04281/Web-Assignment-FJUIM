<?php
    $name = $_POST["name"];
    $account = $_POST["account"];
    $password = $_POST["password"];

    $link = mysqli_connect('localhost', 'root', '12345678', 'imdepartment');

    $sql = "SELECT DISTINCT * FROM `account` WHERE account = '$account'";
    $result = mysqli_query($link, $sql);

    if($row = mysqli_fetch_assoc($result))
    {
        header("location:im_message.php?message=您輸入的學號已有人註冊過");
    }
    else
    {
        $sql = "INSERT INTO `account` (account, name, password) VALUES"
    }

?>