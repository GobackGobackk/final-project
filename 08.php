

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
  
<div id="main" class="background">
  <div id="top">
    <a href="index.php">
      <img src="00.png">
    </a>
    <div class="a">
      <a href="index.php">Home</a> |
      <a href="news.php">News</a> |
      <a href="look.php">How to buy</a> |
      <a href="buycart.php">Shopping cart</a> |
      <a href='login.php'>Login</a> |   
      <a href='admin.php'>Admin</a>        
      
    </div>
    <marquee>『HoneyWorks Premium Live（ハニプレ）』公式Twitterフォロワー数82,800人突破記念！ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12/17 24:00～「ミューコミプラス」にてHoneyWorks NEWアルバムから『恋人たちのハッピーバースデー feat. 望月蒼太・早坂あかり(CV:梶裕貴・阿澄佳奈)』が初オンエア決定！！</marquee>
  </div>
  <div id="left" class="ct">
    <div class="b">
      <div class='ww'><a href='index.php'>CD(メジャー)(8)</a></div>
      <div class='ww'><a href='01.php'>好きすぎてやばい(2)</a>
        <div class='s'>
          <div><a href='05.php' >初回限定盤(1)</a></div>
          <div><a href='06.php'>通常盤(1)</a></div>
        </div>
      </div>
      <div class='ww'><a href='02.php'>CHiCO with HoneyWorks(3)</a>
        <div class='s'>
          <div><a href='07.php'>乙女どもよ(1)</a></div>
          <div><a href='08.php'>ヒカリ証明論(1)</a></div>
          <div><a href='09.php'>私を染める i の歌(1)</a></div>
        </div>
      </div>
      <div class='ww'><a href='03.php'>LIP×LIP(1)</a>
        <div class='s'>
          <div><a href='010.php'>どっちのkissか、選べよ(1)</a></div>
        </div>
      </div>
      <div class='ww'><a href='04.php'>何度だって、好き(2)</a>
        <div class='s'>
          <div><a href='011.php'>初回限定盤(1)</a></div>
          <div><a href='012.php'>通常盤(1)</a></div>
        </div>
      </div>
    </div>
    <span>
      <div>進站總人數</div>
      <div class="d"> 00005 </div>
    </span>
  </div>
    <div id="right">
      <p class="fb">CHiCO with HoneyWorks > ヒカリ証明論</p>

<table class="all">
  <?php
        while($row_result=mysqli_fetch_assoc($result_item)){
          if($row_result["c1"] == "CHiCO with HoneyWorks"){
            if ($row_result["c2"] == "ヒカリ証明論") {
              echo '<tr'.' class="ct"'.'>';
              echo '<td'.' rowspan="4"'.' class="pp'.' rightwidth"'.'>'.
              '<a href="t1.php?id='.$row_result["id"].'">'.'<img src = " '.'data:image/jpg;base64,'.base64_encode($row_result["img"]).'" class = "imgCommodity">'.'</a>'.'</td>';
              echo '<td'.' class="tt"'.'>'.$row_result["name"].'</td>';
              echo "</tr>";
              echo '<tr'.' class="pp"'.'>';
              echo '<td>'.'價格:'.$row_result["price"].'<a href="'.'login.php'.'">'.'<img src = "'.'0402.jpg'.'" class = "buyicon">'.'</a>'.'</td>';
              echo "</tr>";
              echo '<tr'. ' class="pp"'.'>';
              echo "<td>"."規格:".$row_result["type"]."</td>";
              echo "</tr>";
              echo '<tr'.' class="pp"'.'>';
              echo "<td>"."簡介:".$row_result["short"]."</td>";
              echo "</tr>";
            }
          }
        }
    ?>      

</table>    </div>
  <div id="bottom" class="ct">
     頁尾版權20190704 </div>
  </div>

</body>

</html>