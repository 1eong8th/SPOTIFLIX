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
        <title>SPOTFLIX_個人資料</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <style>
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
                   <!-- <a class="nav-link" href="http://127.0.0.1/php_example/movie.php" style="color:gainsboro"><strong>&emsp;影片</strong> <span class="sr-only">(current)</span></a> -->
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

     
        <div class="container">
          <div class="row">
            <div class="col-md-3 clearfix" style="color: black;">0</div>
            <div class="col-md-9 clearfix" >
              <h1 style="color: aliceblue;padding-left: 0px;padding-top: 20px;padding-bottom: 10px;">個人資料</h1>  
              <?php
                // $sql = "SELECT Mo_Address FROM movie ORDER BY movie.Mo_Year DESC LIMIT 0,1";
                // $result = mysqli_query($conn, $sql) or die('MySQL query error');
                // $movie = mysqli_fetch_row($result);
                session_start();
                $newadd = $_GET["add"];
                $_SESSION['add'] = $newadd;
                $newSql = "SELECT Acc_Email, Acc_PhoneNumber, Cre_LastName, Cre_FirstName, account.Cre_Num, Cre_DeadLine 
                FROM account, credit 
                WHERE account.Cre_Num = credit.Cre_Num and account.Acc_Email = '$newadd'";
                $result = mysqli_query($conn, $newSql) or die('MySQL query error');
                $data = mysqli_fetch_array($result);
              ?>
              <!--以下是表格-->
              <table width="100%"  style="line-height:50px;color: aliceblue;" ><font size="5">
                <tr >
                  <td colspan="2"><font size="5"><span style="color: #999;">姓氏 : 
                    </span><small>
                      <?php
                        echo $data['Cre_LastName'];
                      ?>
                  </small></font>
                  </td>              
                </tr>
                <tr>
                  <td><font size="5">
                    <span style="color: #999;">名字 : 
                    </span><small>
                      <?php
                        echo $data['Cre_FirstName'];
                      ?>
                    </small></font>
                  </td>
                </tr>
                <tr>
                  <td><font size="5">
                    <span style="color: #999;">電話號碼 : 
                    </span><small>
                      <?php
                        echo $data['Acc_PhoneNumber'];
                      ?>
                    </small></font>
                  </td>
                </tr>
                <tr>
                    <td><font size="5">
                      <span style="color: #999;">電子郵件 : 
                      </span><small>
                      <?php
                        echo $data['Acc_Email'];
                      ?>
                      </small></font>
                    </td>
                </tr>
                <tr>
                    <td><font size="5">
                      <span style="color: #999;">用戶到期日 :
                      </span><small>
                      <?php
                        echo $data['Cre_DeadLine'];
                      ?>
                      </small></font>
                    </td>
                </tr>
                <tr>
                  <td><font size="5">
                    <span style="color: #999;">信用卡號 : 
                    </span><small>
                      <?php
                        echo $data['Cre_Num'];
                      ?>
                    </small></font>
                  </td>
              </tr>
              </table> 
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