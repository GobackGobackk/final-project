<?php
  $sql_query_cat = "SELECT * FROM `cat`";
  $result_cat = mysqli_query($db_link, $sql_query_cat);
  $row_result_cat=mysqli_fetch_assoc($result_cat);
  $sql_query_item = "SELECT * FROM `item`";
  $result_item = mysqli_query($db_link, $sql_query_item);


  //計算總筆數
  $total_records = mysqli_num_rows($result_item);

  $a = "SELECT * FROM `cat` WHERE `id`=1";
  $a1 = mysqli_query($db_link, $a);
  $a2=mysqli_fetch_assoc($a1);
  $b = "SELECT * FROM `cat` WHERE `id`=2";
  $b1 = mysqli_query($db_link, $b);
  $b2=mysqli_fetch_assoc($b1);
  $c = "SELECT * FROM `cat` WHERE `id`=3";
  $c1 = mysqli_query($db_link, $c);
  $c2=mysqli_fetch_assoc($c1);
  $d = "SELECT * FROM `cat` WHERE `id`=4";
  $d1 = mysqli_query($db_link, $d);
  $d2=mysqli_fetch_assoc($d1);
  $e = "SELECT * FROM `cat` WHERE `id`=5";
  $e1 = mysqli_query($db_link, $e);
  $e2=mysqli_fetch_assoc($e1);
  $f = "SELECT * FROM `cat` WHERE `id`=6";
  $f1 = mysqli_query($db_link, $f);
  $f2=mysqli_fetch_assoc($f1);
  $g = "SELECT * FROM `cat` WHERE `id`=7";
  $g1 = mysqli_query($db_link, $g);
  $g2=mysqli_fetch_assoc($g1);
  $h = "SELECT * FROM `cat` WHERE `id`=8";
  $h1 = mysqli_query($db_link, $h);
  $h2=mysqli_fetch_assoc($h1);
  $i = "SELECT * FROM `cat` WHERE `id`=9";
  $i1 = mysqli_query($db_link, $i);
  $i2=mysqli_fetch_assoc($i1);
  $j = "SELECT * FROM `cat` WHERE `id`=10";
  $j1 = mysqli_query($db_link, $j);
  $j2=mysqli_fetch_assoc($j1);
  $k = "SELECT * FROM `cat` WHERE `id`=11";
  $k1 = mysqli_query($db_link, $k);
  $k2=mysqli_fetch_assoc($k1);
  $l = "SELECT * FROM `cat` WHERE `id`=12";
  $l1 = mysqli_query($db_link, $l);
  $l2=mysqli_fetch_assoc($l1);

  
  $aa = "SELECT * FROM `item` WHERE `id`=1";
  $aa1 = mysqli_query($db_link, $aa);
  $aa2=mysqli_fetch_assoc($aa1);
  $bb = "SELECT * FROM `item` WHERE `id`=2";
  $bb1 = mysqli_query($db_link, $bb);
  $bb2=mysqli_fetch_assoc($bb1);
  $cc = "SELECT * FROM `item` WHERE `id`=3";
  $cc1 = mysqli_query($db_link, $cc);
  $cc2=mysqli_fetch_assoc($cc1);
  $dd = "SELECT * FROM `item` WHERE `id`=4";
  $dd1 = mysqli_query($db_link, $dd);
  $dd2=mysqli_fetch_assoc($dd1);
  $ee = "SELECT * FROM `item` WHERE `id`=5";
  $ee1 = mysqli_query($db_link, $ee);
  $ee2=mysqli_fetch_assoc($ee1);
  $ff = "SELECT * FROM `item` WHERE `id`=6";
  $ff1 = mysqli_query($db_link, $ff);
  $ff2=mysqli_fetch_assoc($ff1);
  $gg = "SELECT * FROM `item` WHERE `id`=7";
  $gg1 = mysqli_query($db_link, $gg);
  $gg2=mysqli_fetch_assoc($gg1);
  $hh = "SELECT * FROM `item` WHERE `id`=8";
  $hh1 = mysqli_query($db_link, $hh);
  $hh2=mysqli_fetch_assoc($hh1);
?>