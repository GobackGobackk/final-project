<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("connect.php");
$account = $_POST['username'];
$password = $_POST['passwd'];

if($account != null && $password != null && "mis" == $account && "999" == $password)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['account'] = $account;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=admin1.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=admin.php>';
}
?>