<!DOCTYPE html>
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
	$SID = $_GET['SID'];

	$link = mysqli_connect('localhost', 'root', '12345678', 'student');
	$sql = "select * from student where SID = $SID";
	$result = mysqli_query($link, $sql);
	if($row=mysqli_fetch_assoc($result))
	{
		$SName = $row['SName'];
		$phone = $row['phone'];
		$address = $row['address'];
	}
  ?>
	<form method="post" action="dblink.php">
	<input type=hidden name="dbaction" value="delete">
	<tr>
		<td>學號</td>
		<td><font color = red><?php echo $SID; ?></font></td>
	</tr>
	<input type=hidden name="SID" value="<?php echo $SID; ?>">
  	<input type=submit value="確認刪除">
 </body>
</html>
