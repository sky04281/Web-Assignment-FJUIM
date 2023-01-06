<?php
    $link = mysqli_connect('localhost','root','12345678','imdepartment');
    $sql = "SELECT * FROM `calander` WHERE cnum = '$cnum'";
    $row = mysqli_fetch_assoc(mysqli_query($link, $sql));
?>
    <span class="text-color font-weight-bold"><?php echo $row['ctime'];?></span>
    <h3 class="text-md mb-4 mt-2"><?php echo $row['ctitle'];?></h3>
	<p><?php echo $row['ctext'];?></p>
<?php
    if($_SESSION['membership']=="admin"){
?>
    <a href="im_calander_update.php?cnum=<?php echo $cnum ?>" class="btn btn-solid-border">編輯</a>
<?php
    }
?>
