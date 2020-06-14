<?php
  $dbhost = '127.0.0.1';
  $dbuser = 'sususu';
  $dbpass = 'd03181214';
  $dbname = 'sususu';
  $conn = mysqli_connect($dbhost,$dbuser,$dbpass) or die('Error with MySQL connection');
  $_SESSION['conn'] = $conn;
  mysqli_query($conn, "SET NAMES 'utf8'");
  mysqli_select_db($conn, $dbname);
  // $sql = "SELECT C_name, C_id FROM customer where account = '{$_SESSION[ "username" ]}' and password = '{$_SESSION[ "password" ]}';";
  // $result = mysqli_query($conn, $sql) or die('MySQL query error');
  // $row = mysqli_fetch_array($result);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "sususu";
//資料庫管理者帳號
$db_user = "sususu";
//資料庫管理者密碼
$db_passwd = "d03181214";

//對資料庫連線
$db = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);
if(mysqli_connect_errno($db))
	echo "無法對資料庫連線！" . mysqli_connect_error();
//        die("無法對資料庫連線");

//資料庫連線採UTF8
mysqli_set_charset($db,'utf8');

//選擇資料庫
if(!@mysqli_select_db($db,'test'))
        die("無法使用資料庫");
?>