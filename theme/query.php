<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <link rel="stylesheet" href="sample.css">
 </head>
 <body>
 <div align=right>
   <a href="insert.php">新增學生</a>
 </div>
 <?php
   $searchtxt = $_POST['searchtxt'];
 ?>

 <div align=center>
   <form method=post action="query.php">
      <input type=text name=searchtxt value="<?php echo $searchtxt; ?>"><input type=submit value="Search">
   </form>
  <table width=500>
    <caption>學生資料
    <tr><td>學號</td><td>姓名</td><td>功能</td></tr></caption>
  <?php
     
     $link = mysqli_connect('localhost','root','12345678','student');
	 if(empty($searchtxt))
	 {
	    $sql  = "select * from student";
	 }
	 else
	 {
		$sql  = "select * from student where SName like '%". $searchtxt. "%'";
	 }
	 $result = mysqli_query($link,$sql);
	 While($row=mysqli_fetch_assoc($result))
	 {
	   echo "<tr><td>", $row['SID'], "</td><td>", $row['SName'], "</td><td><a href=im_update.php?SID=", $row['SID'], ">[修改]</a><a href=delete.php?SID=", $row['SID'], ">[刪除]</a></td></tr>";
	 }
  ?>
  </table>
  </div>
 </body>
</html>
 