<!DOCTYPE html>
<?php 
include("connect.php");
if(isset($_POST["action"])&&($_POST["action"]=="delete")){	
	$sql_query = "DELETE FROM `item` WHERE `id`=".$_POST["id"];
	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: index.php");
}
$sql_db = "SELECT * FROM `item` WHERE `id`=".$_GET["id"];
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>HoneyWorks公式サイト</title>
</head>
<body>
<h1 align="center">HoneyWorks公式サイト - 刪除資料</h1>
<p align="center"><a href="index.php">回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>所屬大類</td><td><?php echo $row_result["c1"];?></td>
    </tr>
    <tr>
      <td>所屬中類</td><td><?php echo $row_result["c2"];?></td>
    </tr>
    <tr>
      <td>名稱</td><td><?php echo $row_result["name"];?></td>
    </tr>
    <tr>
      <td>價錢</td><td><?php echo $row_result["price"];?></td>
    </tr>
    <tr>
      <td>規格</td><td><?php echo $row_result["type"];?></td>
    </tr>
    <tr>
      <td>庫存量</td><td><?php echo $row_result["qt"];?></td>
    </tr>
    <tr>
      <td>圖片</td><td><?php echo '<img src = " '.'data:image/jpg;base64,'.base64_encode($row_result["img"]).'" class = "ImgDelete">';?></td>
    </tr>
    <tr>
      <td>介紹</td><td><?php echo $row_result["text"];?></td>
    </tr>
    <tr>
      <td>簡介</td><td><?php echo $row_result["short"];?></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="id" type="hidden" value="<?php echo $row_result["id"];?>">
      <input name="action" type="hidden" value="delete">
      <input type="submit" name="button" id="button" value="確定刪除這筆資料嗎？">
      </td>
    </tr>
  </table>
</form>
</body>
</html>