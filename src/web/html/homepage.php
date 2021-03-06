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
    <title>SPOTIFLIX</title>
    <meta charset="utf-8" />
    <style>
        section {
            display: block;
            height: 50vh;
            color: #FFFFFF;
        }

        .section1 {
            background-color: black;
        }

        .section2 {
            background-color: black;
        }

        section h1 {
            color: #FFF;
            font-size: 6em;
            font-family: Georgia, serif;
            width: 100%;
            line-height: 50vh;
            text-align: center;
            margin: 0;
        }

        h1 {
            display: block;
            font-size: 2em;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .block {
            position: absolute;
            border: 1px solid gray;
            height: 50vh;
            color: yellow;
            padding: 6px;
            text-align: center;
        }

        .main {
            position: absolute;
            left: 0px;
            right: 0px;
            background-color:black;
            color: white;
            padding: 6px;
        }

        .b1 {
            display: none;
            background-color: green;
            width: 44%;
        }

        .b2 {
            display: none;
            background-color: brown;
            width: 200px;
        }
        .section2 .b1{
            right: 200px;
        }
        .section2 .b2{
            right: 0px;
        }
        .section1 .b1{
            left: 200px;
        }
        .section1 .b2{
            left: 0px;
        }
        @media only screen and (min-width:700px) {
            .b2 {
                display: block;
            }

            .section2 .main {
                right: 200px;
            }
            .section1 .main {
                left: 200px;
            }
        }

        @media only screen and (min-width:1200px) {
            .b1 {
                display: block;
            }

            .section2 .main {
                right: 45%;
            }
            .section1 .main {
                left: 45%;
            }
        }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        /* Make the image fully responsive */

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .mc table {
            margin: auto;
            padding: 20px;
            border-collapse: separate;
            border-spacing: 0;
        }

        .mc tr {
            border: 1px solid #E0607E;
        }

        .mc td {
            border: 1px solid #607ee0;
            padding: 10px 30px;
            background-color: #E0607E;
            color: #FFF;
        } 

        .mv table {
            margin: auto;
            padding: 25px;
            border-collapse: separate;
            border-spacing: 0;
        }

        .mv tr {
            border: 2px solid #E0607E;
        }

        .mv td {
            border: 1px solid #ad3752;
            padding: 11px 24px;
            background-color:#46a13e;
            color: #FFF;
        }

        .rounded-circle {
            border-radius: 50%!important;
        }

        .text {
            background: rgb(0,0,0) transparent;
            width: 550px;
            height: 200px;
            margin: 0 right;
            float: left;
            padding-left: 5px;
            padding-top: 20px;
            color: whitesmoke;
            font-family: Microsoft JhengHei;
        }
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .sin_intro {
            float: right;
            width: 50%;
            height: 50%;
            padding-top: 60px;
            line-height: 20pt;
        }

        .pic1{   
        background-image: url(https://i.kfs.io/artist/global/6912429,0v1/fit/300x300.jpg);
        background-repeat :no-repeat;
        background-size:cover;
        padding:20px 20px 0 30px;
        border:10px;
        width:200px;
        height:170px;
        margin-left: 40px;
        }
        .pic2{
        background-image: url(https://assets.juksy.com/files/articles/82734/800x_100_w-5ba06a3a63a92.jpg);
        background-repeat :no-repeat;
        background-size:cover;
        padding:20px 20px 0 30px;
        border:10px;
        width:200px;
        height:170px;
        margin-left: 40px;
        }
        .pic3{
        background-image: url(https://assets.juksy.com/files/articles/84723/800x_100_w-5bebf594b55a6.jpg);
        background-repeat :no-repeat;
        background-size:cover;
        padding:20px 20px 0 30px;
        border:10px;
        width:200px;
        height:170px;
        margin-left: 40px;
        }
        /*第一欄第一列：左上*/
        tr:first-child td:first-child {
            border-top-left-radius: 10px;
        }

        /*第一欄最後列：左下*/
        tr:last-child td:first-child {
            border-bottom-left-radius: 10px;
        }

        /*最後欄第一列：右上*/
        tr:first-child td:last-child {
            border-top-right-radius: 10px;
        }

        /*最後欄第一列：右下*/
        tr:last-child td:last-child {
            border-bottom-right-radius: 10px;
        }
    </style>
</head>

<body style="padding: 0!important; margin: 0!important;">

    <section class="section1">
 
    
 <div class="b2 block" style="background-color: black;">
    <?php
        $newaddress = $_GET["add"];
        echo"<a class=nav-link href=../php_example/movie.php?add=$newaddress  role=button style=color:gainsboro>";
        echo"<h2 style=writing-mode: vertical-rl; line-height: 200%;margin-top: 50%;>";
        echo"電影</h2>"
    ?>
    
        </div>
        <div  class="b1 block"  style="background-color: black;">
            <iframe width="655" height="360" src="https://www.youtube.com/embed/AhMhjkYMU5k" frameborder="0" allow="accelerometer;
             autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>
        <div class="mv" style="background-color:black;" align="right">
            <h4 style="padding-right: 280px; color: rgb(242, 243, 234);padding-top: 5px;"><strong>發燒電影</strong></h4>
            <!--<img src="https://movies.yahoo.com.tw/i/o/production/movies/February2020/PSJKutAvmA3ceZGYVCvK-1488x2125.jpg" 
             width="210" height="320" >    M000000021
            <img src="https://pic.pimg.tw/littledidi/1584399021-150718298_wn.jpg" 
             width="210" height="320" >   M000000022
            <img src="https://movies.yahoo.com.tw/i/o/production/movies/November2019/sgsRlKmWKoVdPqSYcWnK-514x700.jpg" 
             width="210" height="320" style="padding-right: 10px ;">  M000000023-->
                                           

             <!--<img src="https://movies.yahoo.com.tw/i/o/production/movies/December2019/gBq5zrVrB9XU2biGF2Fl-840x1200.jpg" 
             width="210" height="320" >    M000000024
             <img src="https://im.marieclaire.com.tw/s805c452h100b0/assets/mc/201912/5DEE03D4EBDBA1575879636.jpeg" 
             width="210" height="320" >    M000000025
             <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/0123-1573559483.jpg?0%2C0=&crop=0.500xw%3A1.00xh&resize=640%3A%2A" 
             width="210" height="320" >    M000000026-->


             <img src="https://movies.yahoo.com.tw/i/o/production/movies/February2020/2oQG8URZbVXQQoHaIAmm-992x1418.JPG" 
             width="210" height="320" >    <!--M000000028-->
             <img src="https://www.mrbuzz.com/wp-content/uploads/2019/03/us-film.jpg" 
             width="210" height="320" >    <!--M000000029-->
            <img src="https://movies.yahoo.com.tw/i/o/production/movies/July2019/iJf2rx1TV6hYFdPiWmwL-800x1143.jpg" 
             width="210" height="320" style="padding-right: 10px ;" >       <!--M000000030-->
        </div>
        
       

    </section>

    <section class="section2">
        <!--main-->
        <div class="main block" style="background-color: black;">
            <iframe src="billboard.php?add=<?php echo $newaddress;?>" scrolling="auto" width="100%" height="100%" style="border-radius: 2%;"></iframe>
        </div>
        <!--block1-->
        <div class="b1 block" style="background-color: black;">
            <!--<div class="btn-group btn-group-sm">
                <button type="button" id="myBtn" class="btn btn-primary">Apple</button>
                <button type="button" id="myBtn1" class="btn btn-primary">Samsung</button>
                <button type="button" id="myBtn2" class="btn btn-primary">Sony</button>
              </div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">-->

                <!-- Indicators -->
                <!--<ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul>-->

                <!-- The slideshow -->
                <div >
                   <!-- <div class="carousel-item active">
                        <img src="../music/img/background.jpg" alt="Los Angeles" width="100" height="100">

                    </div>-->
                    <h4 style=" color: rgb(242, 243, 234);padding-bottom: 5px;"><strong>當紅歌手</strong></h4>
                    <div class="row">

                            <div class="pic1 rounded-circle col-md-3" >
                            <br><br><br><br><br><br><br>
                                <h4>瀧川ありさ</h4> 
                                <p>出道年分:2015</p>
                                <p>國籍:日本</p>
                            </div>
                            <div class="pic2 rounded-circle col-md-3"><br><br><br><br><br><br><br>
                                <h5>鄧紫棋</h5> 
                                <p>出道年分:2008</p>
                                <p>國籍:香港</p>
                            </div>
                            <div class="pic3 rounded-circle col-md-3"><br><br><br><br><br><br><br>
                                <h5>ØZI</h5> 
                                <p>出道年分:2018</p>
                                <p>國籍:美國/台灣</p>
                            </div>
                    </div>
                    <!--<div class="carousel-item">
                        <img src="ny.jpg" alt="New York" width="1100" height="500">
                    </div>-->
                </div>

                <!-- Left and right controls -->
                <!--<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>-->
            </div>
        </div>
        <script>
            $('.carousel').carousel({
                interval: 4000
            })
            $(document).ready(function () {
                // Activate the Carousel, but pause it from the start
                $("#myCarousel").carousel("pause");

                $("#myBtn").click(function () {
                    $("#myCarousel").carousel(0);
                });
                // Go to the second item
                $("#myBtn1").click(function () {
                    $("#myCarousel").carousel(1);
                });

                // Go to the third item
                $("#myBtn2").click(function () {
                    $("#myCarousel").carousel(2);
                });
            });
        </script>

        <!--block2-->
        <div class="b2 block" style="background-color:black;">
        <?php
        $newaddress = $_GET["add"];
        echo"<a class=nav-link href=../php_example/kkbox1.php?add=$newaddress  role=button style=color:gainsboro>";
        echo"<h2 style=writing-mode: vertical-rl; line-height: 500%;>";
        echo"音樂</h2>";
        ?>
            
        </div>

    </section>
    <!--http://webber0928.blogspot.com/2015/04/css-make-full-screen-sections-of-css.html-->
</body>

</html>