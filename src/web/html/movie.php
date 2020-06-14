<!DOCTYPE html>
<html>
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
    <head>
        <title>SPOTFLIX_Movie</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <style>
          li{
            list-style-type:none;
            display: inline; 
          }
          img{
            margin: 3px 10px;
          }
          .btitle{
            margin: 20px 0 0px 0px;
            padding: 10px;
            text-align: inherit;
          }
        </style>
    </head>

    <body style="background-color: black;">
    
      <!--nav-->
      <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top " style="background-color: black">
            <h3><a href="#" style="color:blanchedalmond;"><img src="../image/Spotiflix1.png" width="140"></a></h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
              aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li >
                  <a class="nav-link" href="../php_example/kkbox1.php" style="color:gainsboro"><strong>&emsp;音樂</strong> <span class="sr-only">(current)</span></a>
                </li>
                <li >
                <?php
                    $newaddress = $_GET["add"];
                    echo"<a class=nav-link href=http://127.0.0.1/php_example/movie.php?add=$newaddress style=color:gainsboro>";
                    echo"<strong>";
                    echo"&emsp; 影片";
                    echo"</strong>";
                    echo"<span class=sr-only>";
                    echo"(current)";
                    echo"</span>";
                    echo"</a>";
                  ?>
                   <!-- <a class="nav-link" href="http://127.0.0.1/php_example/movie.php?add=$newaddress" style="color:gainsboro"><strong>&emsp;影片</strong> <span class="sr-only">(current)</span></a> -->
                </li>
              </ul>
              <!--navbar 片單按鈕-->
              <form class="form-inline mt-2 mt-md-0">
                  <?php
                    $newaddress = $_GET["add"];
                    echo"<a href=http://127.0.0.1/php_example/myList.php?add=$newaddress role=button style=color:gainsboro>";
                    echo"<strong>";
                    echo"我的片單";
                    echo"</strong>";
                    echo"</a>";
                  ?>
                <!-- <a href="http://127.0.0.1/php_example/myList.php" role="button" style="color:gainsboro">
                  <strong>我的片單</strong>
                </a> -->
              </form>
              &emsp;
              <form class="form-inline mt-2 mt-md-0">
              <?php
                // $newaddress = $_GET["add"];
                echo"<a href=http://127.0.0.1/php_example/personInfo.php?add=$newaddress role=button style=color:gainsboro>";
                echo"<strong>";
                echo"個人資料";
                echo"</strong>";
                echo"</a>";
              ?>
                 
              </form>
              &emsp;
              <form class="form-inline mt-2 mt-md-0">
                <a href="http://127.0.0.1/php_example/assert/login.php" role="button" style="color:gainsboro">
                  <strong>登出</strong></a>
              </form>
            </div>
          </nav>
      <div style="background-color: black;">
      <div>
        <img  src="https://img.1777cdn.com/upload/vod/20200605-1/4317a881d012dc4c5a7cc6bf70bdca1f.jpg" style="width: 95%;display:block; margin:auto">
      </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>最新上架電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <?php
                $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                $result = mysqli_query($conn, $sql) or die('MySQL query error');
                $image = mysqli_fetch_row($result);
                $temp = "SELECT Mo_id FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                $result = mysqli_query($conn, $temp) or die('MySQL query error');
                $id = mysqli_fetch_array($result);
                $trans = $id['Mo_id'];
                // $newaddress = $_GET["add"];
                echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                echo "<img src=$image[0] style=width:115%>";
                "</a>";

              ?>
              
               </span>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
                
              </div>
            </div>
            <div class="col-md-2">
                <?php
                  $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie ORDER BY movie.Mo_Year DESC LIMIT 1,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>

              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 1,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
  
              </div>
            </div>
            <div class="col-md-2">
              
              <?php
                  $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie ORDER BY movie.Mo_Year DESC LIMIT 2,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 2,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
              
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 3,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie ORDER BY movie.Mo_Year DESC LIMIT 3,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>

              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 3,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
            
              </div>
            </div>
            <div class="col-md-2">
              
              <?php
                  $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 4,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie ORDER BY movie.Mo_Year DESC LIMIT 4,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>             
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 4,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 5,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie ORDER BY movie.Mo_Year DESC LIMIT 5,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 5,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
              </div>            
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>熱門電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '天氣之子'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Name = '天氣之子'";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '天氣之子'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '好不浪漫'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Name = '好不浪漫'";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '好不浪漫'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '安娜貝爾'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Name = '安娜貝爾'";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '安娜貝爾'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '你的名字'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Name = '你的名字'";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>        
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '你的名字'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '即刻救援3'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Name = '即刻救援3'";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
               
              <div>
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '即刻救援3'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
                <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '厲陰宅2'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Name = '厲陰宅2'";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '厲陰宅2'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>

              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>恐怖電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Horror'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Horror'LIMIT 0,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Horror'LIMIT 0,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                  //  $newaddress = $_GET["add"];
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                   "</a>";
                   "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Horror'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Horror'LIMIT 1,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Horror' LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Horror'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Horror'LIMIT 2,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
                
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Horror'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Horror'LIMIT 3,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Horror'LIMIT 3,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
               
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Horror'LIMIT 3,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Horror'LIMIT 4,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Horror'LIMIT 4,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Horror'LIMIT 4,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
               
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>浪漫電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Romance'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Romance'LIMIT 0,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Romance'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Romance'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Romance'LIMIT 1,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
               
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Romance'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.unwire.hk/wp-content/uploads/2013/10/About-Time.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">回到最愛的一天</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://4.bp.blogspot.com/-gerq2btoZ1k/VGC_5mt7plI/AAAAAAAAAfA/zZoULDBPGPk/s1600/notebook_ver2.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">忘了、忘不了</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://hwzhiyin.com/uploadfile/1323405151.bmp"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">情約一天</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://pic.pimg.tw/luketsu/1204359746.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">每天愛妳第一次</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>動作電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Action'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Action'LIMIT 0,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Action'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Action'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Action'LIMIT 1,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Action'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Action'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Action'LIMIT 2,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Action'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://lh3.googleusercontent.com/proxy/SzfBF4hQiLd4LhVDTuZxhBTypmLUFBw7ckv-lKbQn_mMKpgrGUJFEOV1GA9OEX5sEAJXU_0_qLpEUd37MOQn-zYgdkcn22IyRy9VVjbiCGOZY7E9QKTHuuk"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">復仇</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://images-na.ssl-images-amazon.com/images/I/41Y813zuMIL._AC_.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">殺人三步曲</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://puui.qpic.cn/vcover_vt_pic/0/r3m3bpm2cyjpf1e1567586633/0"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">英雄本色</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>懸疑電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 0,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 1,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51YtxsGY2sL._AC_SY445_.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">八面埋伏</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://images.imgbox.com/f3/a5/Jb8qUeT9_o.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">失控謊言</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://pic1.zhimg.com/v2-b5c638a2590d75bd0776e2dd5421bc46_b.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">記憶拼圖</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://vbmspic.video.friday.tw/MOVIE/8004/8004_2252532_M.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">靈異第六感</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>動畫電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Animation'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Animation'LIMIT 0,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Animation'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Animation'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Animation'LIMIT 1,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Animation'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Animation'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Animation'LIMIT 2,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Animation'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Animation'LIMIT 3,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Animation'LIMIT 3,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Animation'LIMIT 3,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Animation'LIMIT 4,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Animation'LIMIT 4,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Animation'LIMIT 4,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/b/b1/A_Silent_Voice_film_poster.jpg/220px-A_Silent_Voice_film_poster.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">聲之形</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>喜劇電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 0,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 1,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 2,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://img.arielhsu.tw/pixnet/3bebeed435d700f040a3e25cc703fe13.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">麻辣賤諜</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://pics.filmaffinity.com/Tropic_Thunder-292327168-mmed.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">熱帶驚雷</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://film-like.com/images/film/full/f7/58866.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">熱血新仔</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>最新上架連續劇</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Series_Photo FROM series LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Series_id FROM series LIMIT 0,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Series_id'];
                  // $newaddress = $_GET["add"];

                  $ep = "SELECT Eprisode_Ep
                  FROM eprisode, series
                  where Series_id = '$trans' and Eprisode_Ep = 1 and series.Series_id = eprisode.Eprisode_id";
                  $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                  $epri = mysqli_fetch_array($result);
                  $epriso = $epri['Eprisode_Ep'];
                  echo "<a href=http://127.0.0.1/php_example/series.php?id=$trans&add=$newaddress&ep=$epriso>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Series_Name FROM series LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  //影集 要改掉playMovie
                  echo "<a href=http://127.0.0.1/php_example/series.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <?php
                  $sql = "SELECT Series_Photo FROM series LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                  $temp = "SELECT Series_id FROM series LIMIT 1,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Series_id'];

                  $ep = "SELECT Eprisode_Ep
                  FROM eprisode, series
                  where Series_id = '$trans' and Eprisode_Ep = 1 and series.Series_id = eprisode.Eprisode_id";
                  $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                  $epri = mysqli_fetch_array($result);
                  $epriso = $epri['Eprisode_Ep'];
                  // $newaddress = $_GET["add"];
                  echo "<a href=http://127.0.0.1/php_example/series.php?id=$trans&add=$newaddress&ep=$epriso>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Series_Name FROM series LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  // $newaddress = $_GET["add"];
                  echo $row[0];
                  echo "<p align=center>";
                  //影集 要改掉playMovie
                  echo "<a href=http://127.0.0.1/php_example/series.php?id=$trans&add=$newaddress style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://images.plurk.com/lhiReKtiI.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">十宗罪</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://im2.book.com.tw/image/getImage?i=https://www.books.com.tw/img/D02/006/41/D020064169.jpg&v=595e069c&w=250&h=250"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">孤單又燦爛的神－鬼怪</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://m.media-amazon.com/images/M/MV5BNGE2ZmFkZTYtNjRiOS00ZjE3LThjOWMtZTViZjRmNDFjNTQwXkEyXkFqcGdeQXVyNjg4NzAyOTA@._V1_.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">Criminal Minds</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://upload.wikimedia.org/wikipedia/zh/9/9c/%E5%8C%85%E9%9D%92%E5%A4%A9%E5%86%8D%E8%B5%B7%E9%A2%A8%E9%9B%B2.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">包青天再起風雲</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>熱門連續劇</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙房子</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://upload.wikimedia.org/wikipedia/zh/8/87/%E4%B8%BB%E5%90%9B%E7%9A%84%E5%A4%AA%E9%99%BD.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">主君的太陽</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://daydayview.com/wp-content/uploads/2020/01/file20200109063350_0_213.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">想見你</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://images-na.ssl-images-amazon.com/images/I/61-VFVkRAKL.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">We Bare Bears</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://streamjp.net/wp-content/uploads/2019/09/04825.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">棋盤上的向日葵</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://vmagimg.next.hk/images/apple/20200330/1536pix/1585561721_cf92.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">機場特警</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>韓劇</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://im2.book.com.tw/image/getImage?i=https://www.books.com.tw/img/D02/006/41/D020064169.jpg&v=595e069c&w=250&h=250"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">孤單又燦爛的神－鬼怪</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/2/24/Signal_TVN.jpg/250px-Signal_TVN.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">Signal 信號</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://lovetvshow.cc/upload/vod/20190914-7/f53e78f4876ee33ecf73287ec387d76f.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">惡作劇之吻</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://n1.itc.cn/img8/wb/recom/2015/11/29/144880195750760654.jpeg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">城市獵人</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://upload.wikimedia.org/wikipedia/zh/8/87/%E4%B8%BB%E5%90%9B%E7%9A%84%E5%A4%AA%E9%99%BD.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">主君的太陽</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://g.udn.com.tw/upfiles/B_IM/imdodo5363/PSN_PHOTO/078/f_10240078_1.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">來自星星的你</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>美劇</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://images-na.ssl-images-amazon.com/images/I/61-VFVkRAKL.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">We Bare Bears</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">Game of Thrones</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://m.media-amazon.com/images/M/MV5BNGE2ZmFkZTYtNjRiOS00ZjE3LThjOWMtZTViZjRmNDFjNTQwXkEyXkFqcGdeQXVyNjg4NzAyOTA@._V1_.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">Criminal Minds</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://m.media-amazon.com/images/M/MV5BYzFmODNkNDMtOTgzMy00NzQ1LWEwNDItNzU1MmYyYThhYzUwXkEyXkFqcGdeQXVyOTA3MTMyOTk@._V1_.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">Shameless</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://m.media-amazon.com/images/M/MV5BMjA3ODMxMzM5NF5BMl5BanBnXkFtZTgwMDM1NjU0OTE@._V1_.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">Bones</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://m.media-amazon.com/images/M/MV5BMTkyODg2MzQwMV5BMl5BanBnXkFtZTgwNTA2MjE1MDI@._V1_UX182_CR0,0,182,268_AL_.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">Grimm</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>日劇</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://pic.pimg.tw/sabella/1564126237-132981459.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">不覺得講博多話的女孩很可愛嗎</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://s.yimg.com/zp/images/F81245F84064E450DEFD5C70A8525A6796B739C5"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">我可能不會愛你</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://pic.pimg.tw/sabella/1562563232-518211505.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">爆炸頭田中</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://streamjp.net/wp-content/uploads/2019/09/04825.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">棋盤上的向日葵</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://p2.bahamut.com.tw/B/2KU/13/083fabf11f137bb2477814ebfa18cuh5.JPG?v=1587525268970"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">一拳超人</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://www.upmedia.mg/upload/article/20191102001801052411.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">這個不可以報銷</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>台劇</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://pic.pimg.tw/pink03049/1558479380-1657901514_n.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">噬罪者</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://pic.pimg.tw/pink03049/1578935680-2897926834_n.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">因為愛你</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://pic.pimg.tw/pink03049/1511572646-3984557682_n.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">獅子王強大</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://pic.pimg.tw/pink03049/1582786857-3971508838_n.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">若是一個人</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://i.ytimg.com/vi/sdptHQx7GpA/maxresdefault.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">偷米的奇妙冒險</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://daydayview.com/wp-content/uploads/2020/01/file20200109063350_0_213.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">想見你</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>港劇</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/6/6b/%E9%99%8D%E9%AD%94%E7%9A%842.0.jpg/250px-%E9%99%8D%E9%AD%94%E7%9A%842.0.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">降魔的2</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://vmagimg.next.hk/images/apple/20200330/1536pix/1585561721_cf92.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">機場特警</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://upload.wikimedia.org/wikipedia/zh/4/49/%E6%B3%95%E8%AD%89%E5%85%88%E9%8B%92IV.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">法證先鋒4</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://upload.wikimedia.org/wikipedia/zh/d/da/%E5%A4%9A%E5%8A%9F%E8%83%BD%E8%80%81%E5%A9%86.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">多功能老婆</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://upload.wikimedia.org/wikipedia/zh/9/9c/%E5%8C%85%E9%9D%92%E5%A4%A9%E5%86%8D%E8%B5%B7%E9%A2%A8%E9%9B%B2.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">包青天再起風雲</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://upload.wikimedia.org/wikipedia/zh/thumb/4/46/%E6%AE%BA%E6%89%8B_%28%E7%84%A1%E7%B6%AB%E9%9B%BB%E8%A6%96%E5%8A%87%29.jpg/250px-%E6%AE%BA%E6%89%8B_%28%E7%84%A1%E7%B6%AB%E9%9B%BB%E8%A6%96%E5%8A%87%29.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">殺手</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>對岸</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://i.imgur.com/p7llRMm.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">微微一笑很傾城</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://images.chiblog.tw/201904/3791-01.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">致我們暖暖的小時光</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://inews.gtimg.com/newsapp_bt/0/11222914786/1000"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">幸福敲了兩次門</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://images.plurk.com/lhiReKtiI.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">十宗罪</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://pic.pimg.tw/pink03049/1564131970-3120568467_n.jpg"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">親愛的，熱愛的</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://miro.medium.com/max/740/1*5JT2dMss3Lq7-z6O82YiKQ.png"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">飄洋過海來看你</a></p>
              </div>
            </div>
          </div>
        </div>
    </div>  



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </body>
</html>