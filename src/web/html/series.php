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
        <title>SPOTFLIX_Series</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
          #colorbutton li{
            list-style-type:none;
            display: inline; 
            padding: 6px;
            border-radius: 7px;  
            border: 0.3px solid rgb(255, 8, 0); 
            background-color: rgba(114, 29, 29, 0.377);
            margin: 2px;
          }
          #colorbutton li a{
            color:blanchedalmond;
          }
          .wrap ul {
            display: inline-block;
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
              <form class="form-inline mt-2 mt-md-0">-->
              <?php
                $newaddress = $_GET["add"];
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

      <div>
          <div class="row">
              <div class="col-md-6 clearfix" >
              <?php
                // $sql = "SELECT Mo_Address FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                // $result = mysqli_query($conn, $sql) or die('MySQL query error');
                // $movie = mysqli_fetch_row($result);
                session_start();
                $newId = $_GET["id"];
                $_SESSION['id'] = $newId;
                $newep = $_GET["ep"];
                $_SESSION['ep'] = $newep;
                $newSql = "SELECT Eprisode_Pic, Series_Name, Series_Grade, Series_Dir, Series_Tag, Series_Year, Series_Season, Eprisode_Ep, Episode_length, Eprisode_Info
                FROM eprisode, series
                WHERE Series_id = '{$_SESSION["id"]}' AND series.Series_id = eprisode.Eprisode_id and Eprisode_Ep = '{$_SESSION["ep"]}'";
                $result = mysqli_query($conn, $newSql) or die('MySQL query error');
                $data = mysqli_fetch_array($result);
              ?>  
                  <div style="padding: 20px;"><iframe width="600" height="400" src="<?php echo $data['Eprisode_Pic']; ?>" 
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>
                  </div>
              </div>  
              <div class="col-md-6 clearfix" >
                <div style="padding: 20px;color: blanchedalmond;">
                  <h2><!--name:-->
                  <?php
                    echo $data['Series_Name'];
                  ?>
                  </h2>
                  <table width="100%" heigh="3" style="line-height:25px;" >
                    <tr >
                      <td colspan="2"><span style="color: #999;">主演 : 
                        </span><small></small>
                      </td>              
                    </tr>
                    <tr>
                      <td>
                        <span style="color: #999;">分級 : 
                        </span><small>
                        <?php
                          echo $data['Series_Grade'];
                        ?>
                        </small>
                      </td>
                      <td>
                        <span style="color: #999;">導演 : 
                        </span><small>
                        <?php
                          echo $data['Series_Dir'];
                        ?>
                        </small>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span style="color: #999;">類別 : 
                        </span><small>
                        <?php
                          echo $data['Series_Tag'];
                        ?>
                        </small>
                      </td>
                      <td>
                        <span style="color: #999;">上映時間 : 
                        </span><small>
                        <?php
                          echo $data['Series_Year'];
                        ?>
                        </small>
                      </td>
                    </tr>
                    <tr>
                        <td>
                          <span style="color: #999;">季數 : 
                          </span><small>
                          <?php
                          echo $data['Series_Season'];
                          ?>
                          </small>
                        </td>
                        <td>
                          <span style="color: #999;">集數 : 
                          </span><small>
                          <?php
                          echo $data['Eprisode_Ep'];
                          ?>
                          </small>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <span style="color: #999;">片長 : 
                          </span><small>
                          <?php
                          echo $data['Episode_length'];
                          ?>
                          </small>
                        </td>
                    </tr>
                    
                  </table> 
                  <br>
                  <div >
                    <h5 style="color: #999;">劇情介紹 :</h5>
                      <p style="padding: 0px 60px 10px 20px;color:blanchedalmond;"><small>
                      <?php
                        echo $data['Eprisode_Info'];
                      ?>
                      </small>
                    </p>
                  </div>   
                  <br>
                   
                  <div >
                    <h6 style="color: blanchedalmond;">
                      <form method="post">
                        <input type="submit" class="button" value="加入至我的片單" name="butt"/>  
                      </form>  
                      <?php
                        if(!isset($_POST['butt'])){
                          
                        }else{
                          $trans = $_GET["id"];
                          $sql = "INSERT INTO favorite(Fa_Mine, Acc_Email)
                          VALUES ('$trans','$newaddress')";
                          $result = mysqli_query($conn, $sql) or die('MySQL query error');
                          if($result){
                            echo "<script>alert('加入成功'); </script>";
                          }
                        }
                        ?>   
                    </h6> 
                  </div> 
                </div>
              </div>                  
          </div>
          <div id="colorbutton">
            <ul style="width: 100%;">
                <li>
                  <?php
                    $ep = "SELECT Eprisode_Ep
                    FROM eprisode, series
                    where Series_id = '$newId' and Eprisode_Ep = 1 and series.Series_id = eprisode.Eprisode_id";
                    $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                    $epri = mysqli_fetch_array($result);
                    $epriso = $epri['Eprisode_Ep'];
                    echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                    echo"第01集";
                    echo"</a>";
                  //下面沒弄好
                  ?>
                </li>
                <li>
                <?php
                    $ep = "SELECT Eprisode_Ep
                    FROM eprisode, series
                    where Series_id = '$newId' and Eprisode_Ep = 2 and series.Series_id = eprisode.Eprisode_id";
                    $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                    $epri = mysqli_fetch_array($result);
                    $epriso = $epri['Eprisode_Ep'];
                    echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                    echo"第02集";
                    echo"</a>";
                  //下面沒弄好
                  ?>
                </li>
                <li>
                  <?php
                    if($newId == 'T000000002'){
                      $ep = "SELECT Eprisode_Ep
                      FROM eprisode, series
                      where Series_id = '$newId' and Eprisode_Ep = 3 and series.Series_id = eprisode.Eprisode_id";
                      $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                      $epri = mysqli_fetch_array($result);
                      $epriso = $epri['Eprisode_Ep'];
                      echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                      echo"第03集";
                      echo"</a>";
                    }else{
                      echo"沒有第03集";
                    }
                    
                  //下面沒弄好
                  ?></li>
                <li>
                <?php
                    if($newId == 'T000000002'){
                      $ep = "SELECT Eprisode_Ep
                      FROM eprisode, series
                      where Series_id = '$newId' and Eprisode_Ep = 4 and series.Series_id = eprisode.Eprisode_id";
                      $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                      $epri = mysqli_fetch_array($result);
                      $epriso = $epri['Eprisode_Ep'];
                      echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                      echo"第04集";
                      echo"</a>";
                    }else{
                      echo"沒有第04集";
                    }
                    
                  //下面沒弄好
                  ?>
                </li>
                <li>
                <?php
                    if($newId == 'T000000002'){
                      $ep = "SELECT Eprisode_Ep
                    FROM eprisode, series
                    where Series_id = '$newId' and Eprisode_Ep = 5 and series.Series_id = eprisode.Eprisode_id";
                    $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                    $epri = mysqli_fetch_array($result);
                    $epriso = $epri['Eprisode_Ep'];
                    echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                    echo"第05集";
                    echo"</a>";
                    }else{
                      echo"沒有第05集";
                    }
                    
                  //下面沒弄好
                  ?>
                </li>
                <li>
                <?php
                    if($newId == 'T000000002'){
                      $ep = "SELECT Eprisode_Ep
                    FROM eprisode, series
                    where Series_id = '$newId' and Eprisode_Ep = 6 and series.Series_id = eprisode.Eprisode_id";
                    $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                    $epri = mysqli_fetch_array($result);
                    $epriso = $epri['Eprisode_Ep'];
                    echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                    echo"第06集";
                    echo"</a>";
                    }else{
                      echo"沒有第06集";
                    }
                  //下面沒弄好
                  ?>
                </li>
                <li>
                <?php
                    if($newId == 'T000000002'){
                      $ep = "SELECT Eprisode_Ep
                    FROM eprisode, series
                    where Series_id = '$newId' and Eprisode_Ep = 7 and series.Series_id = eprisode.Eprisode_id";
                    $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                    $epri = mysqli_fetch_array($result);
                    $epriso = $epri['Eprisode_Ep'];
                    echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                    echo"第07集";
                    echo"</a>";
                    }else{
                      echo"沒有第07集";
                    } 
                  //下面沒弄好
                  ?>
                </li>
                <li>
                <?php
                    if($newId == 'T000000002'){
                      $ep = "SELECT Eprisode_Ep
                    FROM eprisode, series
                    where Series_id = '$newId' and Eprisode_Ep = 8 and series.Series_id = eprisode.Eprisode_id";
                    $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                    $epri = mysqli_fetch_array($result);
                    $epriso = $epri['Eprisode_Ep'];
                    echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                    echo"第08集";
                    echo"</a>";
                    }else{
                      echo"沒有第08集";
                    }
                    
                  //下面沒弄好
                  ?>
                </li>
                <li>
                <?php
                    if($newId == 'T000000002'){
                      $ep = "SELECT Eprisode_Ep
                    FROM eprisode, series
                    where Series_id = '$newId' and Eprisode_Ep = 9 and series.Series_id = eprisode.Eprisode_id";
                    $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                    $epri = mysqli_fetch_array($result);
                    $epriso = $epri['Eprisode_Ep'];
                    echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                    echo"第09集";
                    echo"</a>";
                    }else{
                      echo"沒有第09集";
                    }
                    
                  //下面沒弄好
                  ?>
                </li>
                <li>
                <?php
                    if($newId == 'T000000002'){
                      $ep = "SELECT Eprisode_Ep
                      FROM eprisode, series
                      where Series_id = '$newId' and Eprisode_Ep = 10 and series.Series_id = eprisode.Eprisode_id";
                      $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                      $epri = mysqli_fetch_array($result);
                      $epriso = $epri['Eprisode_Ep'];
                      echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                      echo"第10集";
                      echo"</a>";
                      }else{
                        echo"沒有第10集";
                    }
                    
                  //下面沒弄好
                  ?>
                </li>
                <li>
                <?php
                    if($newId == 'T000000002'){
                      $ep = "SELECT Eprisode_Ep
                    FROM eprisode, series
                    where Series_id = '$newId' and Eprisode_Ep = 11 and series.Series_id = eprisode.Eprisode_id";
                    $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                    $epri = mysqli_fetch_array($result);
                    $epriso = $epri['Eprisode_Ep'];
                    echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                    echo"第11集";
                    echo"</a>";
                    }else{
                      echo"沒有第11集";
                    }
                    
                  //下面沒弄好
                  ?>
                </li>
                <li>
                <?php
                    if($newId == 'T000000002'){
                      $ep = "SELECT Eprisode_Ep
                    FROM eprisode, series
                    where Series_id = '$newId' and Eprisode_Ep = 12 and series.Series_id = eprisode.Eprisode_id";
                    $result = mysqli_query($conn, $ep) or die('MySQL query error'); 
                    $epri = mysqli_fetch_array($result);
                    $epriso = $epri['Eprisode_Ep'];
                    echo "<a href=http://127.0.0.1/php_example/series.php?id=$newId&add=$newaddress&ep=$epriso>";
                    echo"第12集";
                    echo"</a>";
                    }else{
                      echo"沒有第12集";
                    }
                    
                  //下面沒弄好
                  ?>
                </li>
            </ul>
            <br>
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