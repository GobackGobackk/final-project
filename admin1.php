<!DOCTYPE html>
<?php 
  header("Content-Type: text/html; charset=utf-8");
  include("connect.php");
  include("setting.php");
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
  <meta name="keywords" content="クリエイターユニットHoneyWorks公式サイト">
  <meta name="description" content="HoneyWorks,ハニワ,828,ゴム,Gom,shito,使徒,ヤマコ,Oji,海賊王,モゲラッタ,ろこる,ziro,AtsuyuK!,Kaoru,cake,中西,ニコニコ,スキキライ,ラズベリー＊モンスター,告白予行練習,ヤキモチの答え,初恋の絵本,告白実行委員会,ずっと前から好きでした。,好きになるその瞬間を。,CHiCO with HoneyWorks,キュンキュン,クマパン">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HoneyWorks公式サイト</title>
  <link href="css/1.css" rel="stylesheet" >
  <link href="css/2.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="topnav">
  <div class="topnav-left">
    &nbsp;
  </div>
  <div class="topnav-centered">
    <ul class="navitems">
      <li><a href="index.php">Home</a></li>
      <li><a href="https://twitter.com/HoneyWorks_828">Twitter</a></li>
      <li><a href="https://www.youtube.com/user/HoneyWorks56410">Youtube</a></li>
      <li><a href="https://www.nicovideo.jp/mylist/20486867">Niconico</a></li>
      <li><a href="http://line.naver.jp/ti/p/%40honeyworks">Line</a></li>
    </ul>
  </div>
  <div class="topnav-right">
    &nbsp;
  </div>
</div>
  
    <div id="main">
    <div id="top">
      <a href="index.php">
        <img src="00.png">
      </a>
      <img src="14.jpg">
    </div>
    <div id="left" class="ct">
      <div class = "b">
        <div class='ww'><a href="?do=admin">管理權限設置</a></div>
        <div class='ww'><a href="?do=th">商品分類與管理</a></div>
        <div class='ww'><a href="?do=order">訂單管理</a></div>
        <div class='ww'><a href="?do=mem">會員管理</a></div>
        <div class='ww'><a href="?do=bot">頁尾版權管理</a></div>
        <div class='ww'><a href="?do=news">最新消息管理</a></div> 
        <div class='ww'><a href="?do=logout">登出</a></div>
      </div>
    </div>
    <div id="right">
    <p class="ct fb">商品管理 目前資料筆數：<?php echo $total_records;?></p>
    <div class="ct">
      <button onclick="javascript:location.href='add.php'">新增商品</button>
    </div>
    <div class="ct">
      <select name="type" id="type">
        <option value="0">全部商品</option>
      </select>
    </div>
    <table class="all">
      <tbody>
        <tr class="tt ct">
          <td>編號</td>
          <td>商品名稱</td>
          <td>庫存量</td>
          <td>狀態</td>
        </tr>
    <?php
        while($row_result=mysqli_fetch_assoc($result_item)){
            echo '<tr'.' class="pp ct"'.'>';
            echo '<td>'.$row_result["id"].'</td>';
            echo '<td'.' width="40%"'.'>'.$row_result["name"].'</td>';
            echo '<td>'.$row_result["qt"].'</td>';
            echo '<td>'.'<a href="update.php?id='.$row_result["id"].'">修改</a><br><a href="del.php?id='.$row_result["id"].'">刪除</a></td>';
            echo '</tr>';
        }
    ?> 
      <tr>
    <td><a href="admin.php">Logout the system</a></td>
  </tr>
      </tbody>
    </table>
        </div>
        <div id="bottom" class = "ct">
           頁尾版權20190704 </div>
      </div>



    </body></html>