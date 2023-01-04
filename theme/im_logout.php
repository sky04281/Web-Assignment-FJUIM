<?php
    session_start();
    session_destroy();
    header("location:im_message.php?message=已登出！");
?>