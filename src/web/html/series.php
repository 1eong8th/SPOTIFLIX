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
                  <a class="nav-link" href="../html/kkbox.html" style="color:gainsboro"><strong>&emsp;音樂</strong> <span class="sr-only">(current)</span></a>
                </li>
                <li >
                   <a class="nav-link" href="http://127.0.0.1/php_example/movie.php" style="color:gainsboro"><strong>&emsp;影片</strong> <span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <form class="form-inline mt-2 mt-md-0">
                <a href="http://127.0.0.1/php_example/personInfo.php" role="button" style="color:gainsboro">
                  <strong>個人資料</strong></a>
              </form>
              &emsp;
              <form class="form-inline mt-2 mt-md-0">
                <a href="" role="button" style="color:gainsboro">
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
                $newSql = "SELECT Eprisode_Pic, Series_Name, Series_Grade, Series_Dir, Series_Tag, Series_Year, Series_Season, Eprisode_Ep, Episode_length, Eprisode_Info
                FROM eprisode, series
                WHERE Series_id = '{$_SESSION["id"]}' AND series.Series_id = eprisode.Eprisode_id";
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
                </div>
              </div>                  
          </div>
          <div id="colorbutton">
            <ul style="width: 100%;">
            <?php
              $temp = "SELECT Eprisode_Ep 
              FROM eprisode 
              where ";
              $result = mysqli_query($conn, $temp) or die('MySQL query error');
              $id = mysqli_fetch_array($result);
              $trans = $id['Mo_id'];
              //下面沒弄好
            ?>

                <li><a href="http://127.0.0.1/php_example/series.php?id=T000000001">第01集</a></li>
                <li><a href="../html/影集分頁.html">第02集</a></li>
                <li><a href="../html/影集分頁.html">第03集</a></li>
                <li><a href="../html/影集分頁.html">第04集</a></li>
                <li><a href="../html/影集分頁.html">第05集</a></li>
                <li><a href="../html/影集分頁.html">第06集</a></li>
                <li><a href="../html/影集分頁.html">第07集</a></li>
                <li><a href="../html/影集分頁.html">第08集</a></li>
                <li><a href="../html/影集分頁.html">第09集</a></li>
                <li><a href="../html/影集分頁.html">第10集</a></li>
                <li><a href="../html/影集分頁.html">第11集</a></li>
                <li><a href="../html/影集分頁.html">第12集</a></li>
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