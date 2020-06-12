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
                  <a class="nav-link" href="../html/kkbox.html" style="color:gainsboro"><strong>&emsp;音樂</strong> <span class="sr-only">(current)</span></a>
                </li>
                <li >
                   <a class="nav-link" href="../html/movie.html" style="color:gainsboro"><strong>&emsp;影片</strong> <span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <form class="form-inline mt-2 mt-md-0">
                <a href="../html/個人資料.html" role="button" style="color:gainsboro">
                  <strong>個人資料</strong></a>
              </form>
              &emsp;
              <form class="form-inline mt-2 mt-md-0">
                <a href="signin.html" role="button" style="color:gainsboro">
                  <strong>登出</strong></a>
              </form>
            </div>
          </nav>
    <div style="background-color: black;">  
      <div>
      <a href="/video/58771.html">
        <img  src="https://img.1777cdn.com/upload/vod/20200605-1/4317a881d012dc4c5a7cc6bf70bdca1f.jpg" style="width: 95%;display:block; margin:auto"></a> 
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
                echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                echo "<img src=$image[0] style=width:115%>";
                "</a>";
              ?>
               
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>

              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 1,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 2,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  $temp = "SELECT Mo_id FROM movie ORDER BY movie.Mo_Year DESC LIMIT 2,1";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>

              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 3,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>             
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 4,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 5,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '天氣之子'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '好不浪漫'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '安娜貝爾'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>        
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '你的名字'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
               
              <div>
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '即刻救援3'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '厲陰宅2'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  $temp = "SELECT Mo_id FROM movie WHERE Mo_Tag = 'Horror'LIMIT 0,1"";
                  $result = mysqli_query($conn, $temp) or die('MySQL query error');
                  $id = mysqli_fetch_array($result);
                  $trans = $id['Mo_id'];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Horror'LIMIT 0,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                   echo "<p align=center>";
                   echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Horror' LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
                
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Horror'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
               
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Horror'LIMIT 3,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Horror'LIMIT 4,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Romance'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
               
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Romance'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Action'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Action'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Action'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Animation'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Animation'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Animation'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Animation'LIMIT 3,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Animation'LIMIT 4,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                  $trans = $id['Mo_id'];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Series_Name FROM series LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  //影集 要改掉playMovie
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
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
                  $trans = $id['Mo_id'];
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                ?>
              <div>
                <?php
                  $sql = "SELECT Series_Name FROM series LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                  echo "<p align=center>";
                  //影集 要改掉playMovie
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans style=color:blanchedalmond>";
                  "</a>";
                  "</p>";
                ?>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>陸劇</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
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