<!DOCTYPE html>
<html>
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

            <!--一個物件-->
            <div class="col-md-2">
              <a href="https://gimy.co/video/50242.html">
                <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:105%">
                
                <!--(圖片:叉) 退出片單-->
                <span style="position: absolute; bottom: 13%; right: 4%;"><img src="../image/新增 退出片單/780.jpg"  width="27"></span>
              </a>
              <div>
                <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
              </div>
            </div>
            <!--一個物件-->
            <div class="col-md-2">
                <a href="https://gimy.co/video/50242.html">
                  <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:105%">
                  
                  <!--(圖片:叉) 退出片單-->
                  <span style="position: absolute; bottom: 13%; right: 4%;"><img src="../image/新增 退出片單/780.jpg"  width="27"></span>
                </a>
                <div>
                  <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
                </div>
              </div>
            <!--一個物件-->
            <div class="col-md-2">
                <a href="https://gimy.co/video/50242.html">
                  <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:105%">
                  
                  <!--(圖片:叉) 退出片單-->
                  <span style="position: absolute; bottom: 13%; right: 4%;"><img src="../image/新增 退出片單/780.jpg"  width="27"></span>
                </a>
                <div>
                  <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
                </div>
              </div>
           <!--一個物件-->
           <div class="col-md-2">
            <a href="https://gimy.co/video/50242.html">
              <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:105%">
              
              <!--(圖片:叉) 退出片單-->
              <span style="position: absolute; bottom: 13%; right: 4%;"><img src="../image/新增 退出片單/780.jpg"  width="27"></span>
            </a>
            <div>
              <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
            </div>
          </div>
            <!--一個物件-->
            <div class="col-md-2">
                <a href="https://gimy.co/video/50242.html">
                  <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:105%">
                  
                  <!--(圖片:叉) 退出片單-->
                  <span style="position: absolute; bottom: 13%; right: 4%;"><img src="../image/新增 退出片單/780.jpg"  width="27"></span>
                </a>
                <div>
                  <p align="center"><a href="https://gimy.co/video/50242.html"style="color:blanchedalmond">紙鈔屋第一季</a></p>
                </div>
              </div>
            <!--一個物件-->
            <div class="col-md-2">
                <a href="https://gimy.co/video/50242.html">
                  <img src="https://cdn.hk01.com/di/media/images/3948627/org/6cc1bf014f03eeddaebd96c883fd39e6.jpg/H_s4zsiLsagEXqJk_I9-olN05Hxi4-BuUUTzs1FE87M?v=w1920"  style="width:105%">
                  
                  <!--(圖片:叉) 退出片單-->
                  <span style="position: absolute; bottom: 13%; right: 4%;"><img src="../image/新增 退出片單/780.jpg"  width="27"></span>
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