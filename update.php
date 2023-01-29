<!DOCTYPE html>
<?php 
include("connect.php");
if (!@mysqli_select_db($db_link, "fp")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="update")){	
	$sql_query = "UPDATE `item` SET ";
	$sql_query .= "`name`='".$_POST["name"]."',";
	$sql_query .= "`price`='".$_POST["price"]."',";
	$sql_query .= "`c1`='".$_POST["c1"]."',";
	$sql_query .= "`c2`='".$_POST["c2"]."',";
	$sql_query .= "`qt`='".$_POST["qt"]."',";
	$sql_query .= "`type`='".$_POST["type"]."',";
	$sql_query .= "`text`='".$_POST["text"]."',";
	$sql_query .= "`short`='".$_POST["short"]."' ";
	$sql_query .= "WHERE `id`=".$_POST["id"];	
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
<h1 align="center">HoneyWorks公式サイト - 修改資料</h1>
<p align="center"><a href="index.php">回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>所屬大類</td>
      <td>
        <select name="c1" id="c1">
            <option value="好きすぎてやばい">好きすぎてやばい</option>
　          <option value="CHiCO with HoneyWorks">CHiCO with HoneyWorks</option>
　          <option value="LIP×LIP">LIP×LIP</option>
　          <option value="何度だって、好き">何度だって、好き</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>所屬中類</td>
      <td>
         <select name="c2" id="c2">
            <option value="初回限定盤">初回限定盤 (好きすぎてやばい)</option>
            <option value="通常盤">通常盤 (好きすぎてやばい)</option>
　          <option value="乙女どもよ">乙女どもよ(CHiCO with HoneyWorks)</option>
            <option value="ヒカリ証明論">ヒカリ証明論(CHiCO with HoneyWorks)</option>
　          <option value="私を染める i の歌">私を染める i の歌(CHiCO with HoneyWorks)</option>
            <option value="どっちのkissか、選べよ">どっちのkissか、選べよ(LIP×LIP)</option>
            <option value="初回限定盤">初回限定盤 (何度だって、好き)</option>
            <option value="通常盤">通常盤 (何度だって、好き)</option>            
         </select>
      </td>
    </tr>
    <tr>
    <tr>
      <td>名稱</td><td><input type="text" name="name" id="name" value="<?php echo $row_result["name"];?>"></td>
    </tr>
    <tr>
      <td>價格</td><td><input type="int" name="price" id="price" value="<?php echo $row_result["price"];?>"></td>
    </tr>
    <tr>
      <td>規格</td><td><input type="text" name="type" id="type" value="<?php echo $row_result["type"];?>"></td>
    </tr>
    <tr>
      <td>庫存量</td><td><input type="int" name="qt" id="qt" value="<?php echo $row_result["qt"];?>"></td>
    </tr>
    <tr>
      <td>商品介紹</td><td><input type="text" name="text" id="text" size="100" value="<?php echo $row_result["text"];?>"></td>
    </tr>
    <tr>
      <td>商品介紹</td><td><input type="text" name="short" id="short" size="40" value="<?php echo $row_result["short"];?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="id" type="hidden" value="<?php echo $row_result["id"];?>">
      <input name="action" type="hidden" value="update">
      <input type="submit" name="button" id="button" value="更新資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  </table>
</form>
</body>
</html>