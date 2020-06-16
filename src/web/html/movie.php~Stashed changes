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
                <?php
                    $newaddress = $_GET["add"];
                    echo"<a class=nav-link href=http://127.0.0.1/php_example/kkbox1.php?add=$newaddress style=color:gainsboro>";
                    echo"<strong>";
                    echo"&emsp; 音樂";
                    echo"</strong>";
                    echo"<span class=sr-only>";
                    echo"(current)";
                    echo"</span>";
                    echo"</a>";
                  ?>
                  <!-- <a class="nav-link" href="../php_example/kkbox1.php" style="color:gainsboro"><strong>&emsp;音樂</strong> <span class="sr-only">(current)</span></a> -->
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
                <img src="data:image/jpeg;base64,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"  style="width:115%">  
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