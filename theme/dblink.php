<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  <?php
    $dbaction = $_POST['dbaction'];
    $SID = $_POST['SID'];
	$SName = $_POST['SName'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

    $link = mysqli_connect('localhost','root','12345678','student');
  if($dbaction=="insert")
  {
	//這裡是新增的語法
	$sql  = "insert into student (SID, SName, phone, address) values ('$SID', '$SName', '$phone', '$address')";
    if(mysqli_query($link,$sql))
	  {
	    //echo "新增成功";
		header("Location:message.php?message=新增完成");
	  }
	else
	  {
	    header("Location:message.php?message=新增失敗");
	  }
  }
  else if($dbaction=="delete")
  {
	  //這裡是修改
	 $sql  = "delete from student where SID = '$SID'";
    if(mysqli_query($link,$sql))
	  {
	    header("Location:message.php?message=刪除完成");
	  }
	else
	  {
	    header("Location:message.php?message=刪除失敗");
	  }
  }
  else
  {
	  //這裡是修改
	 $sql  = "update student set SName='$SName', phone='$phone', address='$address' where SID='$SID'";
    if(mysqli_query($link,$sql))
	  {
	    header("Location:message.php?message=修改完成");
	  }
	else
	  {
	    header("Location:message.php?message=修改失敗");
	  }
  }
  ?>
 </body>
</html>
