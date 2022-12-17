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
	$sql = "select * from student where SID = '$SID'";
	$result = mysqli_query($link, $sql);
	if($row=mysqli_fetch_assoc($result))
	{
		$SName = $row['SName'];
		$phone = $row['phone'];
		$address = $row['address'];
	}
  ?>
  <form method = "post" action = "dblink.php">
	<input type=hidden name="SID" value="<?php echo $SID; ?>">
	<input type=hidden name="dbaction" value="update">
	<table>
	<tr>
		<td>學號</td>
		<td><font color = red><?php echo $SID; ?></font></td>
	</tr>
	<tr>
		<td>姓名</td>
		<td><input type = text name = "SName" value = "<?php echo $SName; ?>"></td>
	</tr>
	<tr>
		<td>電話</td>
		<td><input type = text name = "phone" value = "<?php echo $phone; ?>"></td>
	</tr>
	<tr>
		<td>地址</td>
		<td><input type = text name = "address" value = "<?php echo $address; ?>"></td>
	</tr>
	<tr>
		<td colspan=2>
		<td><input type=submit value = "送出資料"></td>
	</tr>
	</table>
  </form>
</body>
</html>
