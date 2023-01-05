<?php
    session_start();
    $link = mysqli_connect('localhost','root','12345678','imdepartment');
    $sql = "SELECT * FROM `reservation` WHERE `rtype` = '$rtype' AND `rtime` = '$rtime'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) != 0) {
?>   
    <p>啊...已被預約走了下次請早...</p>
    <?php echo "預約者：",$row['account']," ", $row['name']; ?>
    <?php
        if ($_SESSION["membership"] == "admin") {
    ?>
        <a href="im_reservation_delete.php?<?php echo "rtime=", $rtime, "&rtype=", $rtype, "&account=", $row['account'];?>" class="btn btn-main">取消預約</a>
    <?php
        }
    ?>
<?php     
    }else{
?>
    <p>還有空位</p>
    <a href="im_<?php echo $rtype?>_schedule.php?rtime=<?php echo $rtime;?>" class="btn btn-main">立即預約</a>
<?php  
    } 
?>
        
