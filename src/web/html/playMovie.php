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
  session_start();
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

          .container {
            position: relative;
            
          }
          

          /* img {
              opacity: 1;
              display: block;
              width: 100%;
              height: auto;
              transition: .1s ease;
              backface-visibility: hidden;
            } */

          .middle {
              transition: .3s ease;
              opacity: 0;
              position: absolute;
              top: 40%;
              left: 60%;
              transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%)
          }

          .col-md-2:hover img{
            opacity: 0.5;
            width:120%;
            -webkit-filter:blur(1px);
          }
          

          .col-md-2:hover .middle{
            opacity: 1;
          }
          .limit{
            height:150px;
            width:150px;
            
          }
          .limit a{
            overflow: scroll;
            overflow-x: hidden;
            text-overflow: scroll;
            display: -webkit-box;
            -webkit-line-clamp: 7;
            -webkit-box-orient: vertical;
            font-size:12px;
            color:black;
          }
          .limit a:hover{
            text-decoration: none;
          }
          ::-webkit-scrollbar {
            width: 0px;
            background: transparent; /* make scrollbar transparent */
          }
          .control{
            margin-right:0px;
          }
          .control:hover{
              background:black;
              opacity:0.7;
          }
          .carousel-inner{
            padding-right:40px;
          }
          .carousel{
            width:110%; 
            margin-left:-30px;
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
                    echo"<a class=nav-link href=../php_example/kkbox1.php?add=$newaddress style=color:gainsboro>";
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
                    echo"<a class=nav-link href=../php_example/movie.php?add=$newaddress style=color:gainsboro>";
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
                    echo"<a href=../php_example/myList.php?add=$newaddress role=button style=color:gainsboro>";
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
                echo"<a href=../php_example/personInfo.php?add=$newaddress role=button style=color:gainsboro>";
                echo"<strong>";
                echo"個人資料";
                echo"</strong>";
                echo"</a>";
              ?>
                 
              </form>
              &emsp;
              <form class="form-inline mt-2 mt-md-0">
                <a href="../php_example/assert/login.php" role="button" style="color:gainsboro">
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
                
                $newId = $_GET["id"];
                $_SESSION['id'] = $newId;
                $newSql = "SELECT Mo_Address, Mo_Name, Mo_Grade, Mo_Dir, Mo_Tag, Mo_Year, Mo_Info FROM movie WHERE Mo_id = '{$_SESSION["id"]}'";
                $result = mysqli_query($conn, $newSql) or die('MySQL query error');
                $data = mysqli_fetch_array($result);
              ?>
                  <div style="padding: 20px;"><iframe width="100%" height="400" src="<?php echo $data['Mo_Address']; ?>" 
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>
                  </div>
              </div>  
              <div class="col-md-6 clearfix" >
                <div style="padding: 20px;color: blanchedalmond;">
                  <h2>
                  <?php
                    echo $data['Mo_Name'];
                  ?></h2>
                  <table width="100%" heigh="3" style="line-height:25px;" >
                    <tr >
                      <td colspan="2"><span style="color: #999;">主演 : 
                        </span><small>

                        </small>
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
          </div>
          <div class="container" >
          <div class="btitle">
            <h3 style="color:blanchedalmond">
              <strong>你可能會喜歡（<?php echo $data['Mo_Tag']; ?>）</strong>
            </h3>
          </div>

          <div class="row">
          <?php
                  $type = $data['Mo_Tag'];
                  $sql = "SELECT Mo_Photo, Mo_Name, Mo_id,Mo_Info FROM movie WHERE Mo_Tag = '$type'";
                  $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                   // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo '<div class="col-md-2">
                              <a href=playMovie.php?id='.$row["Mo_id"].'&add='.$newaddress.'><img src="'.$row["Mo_Photo"].'" style="width:115%">  </a>
                              <div class="middle">
                                <div style="width:160%;"><h4 style="color:white;"><strong>'.$row["Mo_Name"].'</strong></h4></div>
                                <div class="limit">
                                <a href=playMovie.php?id='.$row["Mo_id"].'&add='.$newaddress.'  style="color:yellow;"><strong>'.$row["Mo_Info"].'</strong></a></div>
                                </div>
                              <div>
                                <p align="center"><a href=playMovie.php?id='.$row["Mo_id"].'&add='.$newaddress.' style="color:blanchedalmond">'.$row["Mo_Name"].'</a></p>
                                </div>
                              </div>';
                      
                    }
                  }
            ?>
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