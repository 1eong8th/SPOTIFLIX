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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
          .control{
            background:rgba(0, 0, 0, 0.678);
          }
          .blur :hover{
            -webkit-filter:blur(1px);
          }
          .blur img :hover{
            opacity:0.5;
            background-color:black;
          }
        </style>
    </head>

    <body >
    <div >  
      <div>
      <a href="/video/58771.html">
        <img  src="https://img.1777cdn.com/upload/vod/20200605-1/4317a881d012dc4c5a7cc6bf70bdca1f.jpg" style="width: 95%;display:block; margin:auto"></a> 
      </div>
      <div class="container w3-animate-right" >
        <div class="btitle">
          <h3 style="color:blanchedalmond">
            <img src="../image/movie 分類/images (1).jpg" 
            style="width:3%;margin:0px 0px">
            <strong>我的片單</strong>
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
        <div class="container w3-animate-right" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <img src="../image/movie 分類/modern-premium-minimalist-streamline-app-button-film-reel-line-icon-design-116925063.jpg" 
              style="width:3%;margin:0px 0px">
              <strong>最新上架電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">

              
               <img src="<?php echo $image[0]; ?>" style="width:115%">
                
              
              <div>
                <p align="center"><a href="http://127.0.0.1/php_example/天氣之子.php"style="color:blanchedalmond">
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>

              </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="http://127.0.0.1/php_example/可能還愛你.php">
                <?php
                  $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  
              </a>
              <div>
                <p align="center"><a href="http://127.0.0.1/php_example/可能還愛你.php"style="color:blanchedalmond">
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 1,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>
              
              </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="http://127.0.0.1/php_example/愛上觸不到的你.php">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  
                </a>
              <div>
                <p align="center"><a href="http://127.0.0.1/php_example/愛上觸不到的你.php"style="color:blanchedalmond">
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 2,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>
              
              </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="http://127.0.0.1/php_example/飛翔吧！埼玉.php">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 3,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  
                </a>
              <div>
                <p align="center"><a href="http://127.0.0.1/php_example/飛翔吧！埼玉.php"style="color:blanchedalmond">
              
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 3,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>
              
              </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="http://127.0.0.1/php_example/雞不可失.php">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 4,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  
                </a>
              <div>
                <p align="center"><a href="http://127.0.0.1/php_example/雞不可失.php"style="color:blanchedalmond">
              
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 4,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>

              </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="http://127.0.0.1/php_example/好不浪漫.php">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie ORDER BY movie.Mo_Year DESC LIMIT 5,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%"> 
              </a>
              <div>
                <p align="center"><a href="http://127.0.0.1/php_example/好不浪漫.php"style="color:blanchedalmond">
              
                <?php
                   $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 5,1";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>
              
              </a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <img src="../image/movie 分類/37341892.jpg" 
              style="width:3%;margin:0px 0px">
              <strong>熱門電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="http://127.0.0.1/php_example/天氣之子.php">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '天氣之子'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%"> 
              </a>
              <div>
                <p align="center"><a href="http://127.0.0.1/php_example/天氣之子.php"style="color:blanchedalmond">
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '天氣之子'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="http://127.0.0.1/php_example/好不浪漫.php">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '好不浪漫'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">   
              </a>
              <div>
                <p align="center"><a href="http://127.0.0.1/php_example/好不浪漫.php"style="color:blanchedalmond">
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '好不浪漫'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="http://127.0.0.1/php_example/安娜貝爾.php">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '安娜貝爾'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">
              </a>
              <div>
                <p align="center"><a href="http://127.0.0.1/php_example/安娜貝爾.php"style="color:blanchedalmond">
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '安娜貝爾'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '你的名字'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '你的名字'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '即刻救援3'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '即刻救援3'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Name = '厲陰宅2'";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                   $sql = "SELECT Mo_Name FROM movie WHERE Mo_Name = '厲陰宅2'";
                   $result = mysqli_query($conn, $sql) or die('MySQL query error');
                   $row = mysqli_fetch_row($result);
                   echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <img src="../image/movie 分類/depositphotos_299122542-stock-illustration-spooky-flying-ghost-hand-drawn.jpg" style="width:3%;margin:0px 0px">
              <strong>恐怖電影</strong>
            </h3>
          </div>
          <div class="row">
            <?php
                  $sql = "SELECT Mo_Photo, Mo_Name FROM movie WHERE Mo_Tag = 'Horror'";
                  $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                   // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo '<div class="col-md-2">
                              <a href="https://gimy.co/video/50242.html"><img src="'.$row["Mo_Photo"].'" style="width:115%">  </a>
                              <div>
                                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">'.$row["Mo_Name"].'</a></p>
                                </div>
                              </div>';
                      
                    }
                  }
              ?>
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <img src="../image/movie 分類/images.jpg" 
              style="width:3%;margin:0px 0px">
              <strong>浪漫電影</strong>
            </h3>
          </div>
          <div class="row">
              <?php
                  $sql = "SELECT Mo_Photo, Mo_Name FROM movie WHERE Mo_Tag = 'Romance'";
                  $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                   // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo '<div class="col-md-2">
                              <a href="https://gimy.co/video/50242.html"><img src="'.$row["Mo_Photo"].'" style="width:115%">  </a>
                              <div>
                                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">'.$row["Mo_Name"].'</a></p>
                                </div>
                              </div>';
                      
                    }
                  }
              ?>
           
          
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Romance'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Romance'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
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
              <img src="../image/movie 分類/1630042L6-0.jpg" 
              style="width:3%;margin:0px 0px">
              <strong>動作電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Action'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Action'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Action'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Action'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Action'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Action'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
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
              <img src="../image/movie 分類/098058677b11733b.jpg" 
              style="width:3%;margin:0px 0px">
              <strong>懸疑電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Suspense'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
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
        <div class="container-fluid" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <img src="../image/movie 分類/436ccefed26a3c9309cf898f5321f5d0.png" 
              style="width:3%;margin:0px 0px">
              <strong>動畫電影</strong>
            </h3>
          </div>
          <!--輪播-->
          <div id="myCarousel5" class="carousel slide"  data-ride="carousel" data-interval="8000" data-pause="hover">


            <!-- The slideshow -->
            <div class="carousel-inner">
              
                  <?php
                    $sql = "SELECT Mo_Photo, Mo_Name FROM movie WHERE Mo_Tag = 'Animation'";
                    $result = $conn->query($sql);
                    echo '<div class="carousel-inner">
                            <div class="carousel-item active">
                              <div class="row">';
                    
                    if ($result->num_rows > 0) {
                      // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo '<div class="col-md-2">
                                  <a href="https://gimy.co/video/50242.html"><img src="'.$row["Mo_Photo"].'" style="width:115%;">  
                                  
                                  </a>
                                  <div>
                                    <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">'.$row["Mo_Name"].'</a></p>
                                  </div>
                                </div>';
                      
                        }
                     }
                     echo    '</div>
                            </div>';
                     $sql = "SELECT Mo_Photo, Mo_Name FROM movie WHERE Mo_Tag = 'Animation'";
                    $result = $conn->query($sql);
                    echo '<div class="carousel-item">
                              <div class="row" style="margin-left:10px;">';
                      echo "<h3>".$result->num_rows."<h3>";
                     if ($result->num_rows > 0) {
                      // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo '<div class="col-md-2 blur" >
                                  <a href="https://gimy.co/video/50242.html"><img src="'.$row["Mo_Photo"].'" style="width:115%;">  
                                  
                                  </a>
                                  <div>
                                    <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">'.$row["Mo_Name"].'</a></p>
                                  </div>
                                </div>';
                      
                        }
                     }
                     echo   '</div>
                            </div>
                        </div>';
                  ?>
                
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev control" href="#myCarousel5" data-slide="prev" style="width: 40px;">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next control" href="#myCarousel5" data-slide="next" style="width: 40px;">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
          
          
          
          <!--輪播結束-->
        </div>
        <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <img src="../image/movie 分類/201-2012740_outline-hand-drawn-smiley-faces-basic-stock-vector-hand-drawn-happy-face.png" 
              style="width:3%;margin:0px 0px">
              <strong>喜劇電影</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Mo_Photo FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Mo_Name FROM movie WHERE Mo_Tag = 'Comedy'LIMIT 2,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
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
              <img src="../image/movie 分類/istockphoto-1001787010-1024x1024.jpg" style="width:3%;margin:0px 0px">
              <strong>最新上架連續劇</strong>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Series_Photo FROM series LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Series_Name FROM series LIMIT 0,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
              </div>
            </div>
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
              <?php
                  $sql = "SELECT Series_Photo FROM series LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $image = mysqli_fetch_row($result);
                ?>
                <img src="<?php echo $image[0]; ?>" style="width:115%">  </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">
                
                <?php
                  $sql = "SELECT Series_Name FROM series LIMIT 1,1";
                  $result = mysqli_query($conn, $sql) or die('MySQL query error');
                  $row = mysqli_fetch_row($result);
                  echo $row[0];
                ?>
                
                </a></p>
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
              <img src="../image/movie 分類/37341892.jpg" style="width:3%;margin:0px 0px">
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
              <img src="../image/movie 分類/29288140-icon-korea.jpg" style="width:4%;margin:0px 0px">
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
              <img src="../image/movie 分類/u56fd-102310503.jpg" style="width:3%;margin:0px 0px">
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
              <img src="../image/movie 分類/下載.png" style="width:3%;margin:0px 0px">
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
              <img src="../image/movie 分類/1453466098-2228245848.jpg" style="width:2%;margin:0px 0px">
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
              <img src="../image/movie 分類/M07155919_big.jpg" style="width:3%;margin:0px 0px">
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
              <img src="../image/movie 分類/a780ee8197109e901eaee2726088bea6.jpg" style="width:3%;margin:0px 0px">
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