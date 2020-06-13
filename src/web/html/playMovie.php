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
                $newSql = "SELECT Mo_Address, Mo_Name, Mo_Grade, Mo_Dir, Mo_Tag, Mo_Year, Mo_Info FROM movie WHERE Mo_id = '{$_SESSION["id"]}'";
                $result = mysqli_query($conn, $newSql) or die('MySQL query error');
                $data = mysqli_fetch_array($result);
              ?>
                  <div style="padding: 20px;"><iframe width="550" height="400" src="<?php echo $data['Mo_Address']; ?>" 
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>
                  </div>
              </div>  
              <div class="col-md-6 clearfix" >
                <div style="padding: 20px;color: blanchedalmond;">
                  <h2>
                  <?php
                    // $sql = "SELECT Mo_Name FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                    // $result = mysqli_query($conn, $sql) or die('MySQL query error');
                    // $movie = mysqli_fetch_row($result);
                    echo $data['Mo_Name'];
                  ?></h2>
                  <table width="100%" heigh="3" style="line-height:25px;" >
                  <!-- <?php
                      // $sql = "SELECT Mo_Grade FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                      // $result = mysqli_query($conn, $sql) or die('MySQL query error');
                      // $grade = mysqli_fetch_row($result);

                      // $sql = "SELECT Mo_Dir FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                      // $result = mysqli_query($conn, $sql) or die('MySQL query error');
                      // $dir = mysqli_fetch_row($result);

                      // $sql = "SELECT Mo_Tag FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                      // $result = mysqli_query($conn, $sql) or die('MySQL query error');
                      // $tag = mysqli_fetch_row($result);

                      // $sql = "SELECT Mo_Year FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                      // $result = mysqli_query($conn, $sql) or die('MySQL query error');
                      // $time = mysqli_fetch_row($result);

                      // $sql = "SELECT Mo_Info FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                      // $result = mysqli_query($conn, $sql) or die('MySQL query error');
                      // $info = mysqli_fetch_row($result);
                  ?> -->
                    <tr >
                      <td colspan="2"><span style="color: #999;">主演 : 
                        </span><small></small>
                      </td>              
                    </tr>
                    <tr>
                      <td>
                        <span style="color: #999;">分級 : 
                        </span><small><?php echo $data['Mo_Grade']; ?></small>
                      </td>
                      <td>
                        <span style="color: #999;">導演 : 
                        </span><small><?php echo $data['Mo_Dir']; ?></small>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span style="color: #999;">類別 : 
                        </span><small><?php echo $data['Mo_Tag']; ?></small>
                      </td>
                      <td>
                        <span style="color: #999;">上映時間 : 
                        </span><small><?php echo $data['Mo_Year']; ?></small>
                      </td>
                    </tr>
                    
                  </table> 
                  <div >
                    <h5 style="color: #999;">劇情介紹 :</h5> 
                      <p style="padding: 0px 60px 10px 20px;color:blanchedalmond;"><small><?php echo $data['Mo_Info']; session_write_close();?></small>
                    </p>
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