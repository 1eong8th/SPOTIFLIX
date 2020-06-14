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
        <title>SPOTFLIX_片單</title>
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
          <div class="container">
            <h1 style="color: aliceblue; padding: 10px;">
                我的片單
            </h1>
          
            <div class="row">
              <div class=col-md-2>
            <?php
                $sql = "SELECT Mo_Photo FROM movie, favorite WHERE Mo_id = Fa_Mine";
                $result = mysqli_query($conn, $sql) or die('MySQL query error');
                $image = mysqli_fetch_row($result);
                $temp = "SELECT Mo_id FROM movie, favorite WHERE Mo_id = Fa_Mine";
                $result = mysqli_query($conn, $temp) or die('MySQL query error');
                $id = mysqli_fetch_array($result);
                $trans = $id['Mo_id'];
                // $sqls = "SELECT COUNT (Mo_id)
                // FROM movie, favorite
                // WHERE Mo_id = Fa_Mine";
                // $result = mysqli_query($conn, $sqls) or die('MySQL query error');
                // $num = mysqli_fetch_array($result);
                // $count = $num['COUNT (Mo_id)'];
                // // $newaddress = $_GET["add"];
                // for($a=0;,$a<$count;,$a){
                  echo "<a href=http://127.0.0.1/php_example/playMovie.php?id=$trans&add=$newaddress>";
                  echo "<img src=$image[0] style=width:115%>";
                  "</a>";
                // }
            ?>
                <div>
                <?php 
                $sql = "SELECT Mo_Name FROM movie, favorite WHERE Mo_id = Fa_Mine";
                $result = mysqli_query($conn, $sql) or die('MySQL query error');
                $row = mysqli_fetch_row($result);
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