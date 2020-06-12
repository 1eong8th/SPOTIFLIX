<!DOCTYPE html>
<html>

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
            background-color: #3C599B;
        }

        .section2 {
            background-color: #527415;
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
            background-color: blue;
            color: white;
            padding: 6px;
        }

        .b1 {
            display: none;
            background-color: green;
            width: 38%;
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

        table {
            margin: auto;
            padding: 20px;
            border-collapse: separate;
            border-spacing: 0;
        }

        tr {
            border: 1px solid #E0607E;
        }

        td {
            border: 1px solid #607ee0;
            padding: 10px 30px;
            background-color: #E0607E;
            color: #FFF;
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
<?php
session_start();  // 啟用交談期
// 檢查Session變數是否存在, 表示是否已成功登入
if ( $_SESSION["login_session"] != true ) 
   header("Location: login.php");
echo "歡迎使用者進入網站!<br/>";
?>
    <section class="section1">
 <div class="b2 block" style="background-color: cadetblue;">
    <h1 style="writing-mode: vertical-rl; line-height: 200%;margin-top: 50%;">電影</h1>
        </div><div class="b1 block" style="background-color: brown;">
            <h1>電視</h1>
        </div>
        <div class="main" style="background-color: blueviolet;">
            <h1>電影</h1>
        </div>
        
       

    </section>

    <section class="section2">
        <!--main-->
        <div class="main block" style="background-color: blueviolet;">
            <iframe src="billboard.html" scrolling="auto" width="100%" height="100%" style="border-radius: 2%;"></iframe>
        </div>
        <!--block1-->
        <div class="b1 block" style="background-color: brown;">
            <div class="btn-group btn-group-sm">
                <button type="button" id="myBtn" class="btn btn-primary">Apple</button>
                <button type="button" id="myBtn1" class="btn btn-primary">Samsung</button>
                <button type="button" id="myBtn2" class="btn btn-primary">Sony</button>
              </div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../music/img/background.jpg" alt="Los Angeles" width="1100" height="500">

                    </div>
                    <div class="carousel-item">
                        <table>
                            <tr>
                                <td>1</td>
                                <td>明年今日</td>
                                <td>陳奕迅</td>
                                <td>3:54</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>明年今日</td>
                                <td>陳奕迅</td>
                                <td>3:54</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>明年今日</td>
                                <td>陳奕迅</td>
                                <td>3:54</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>明年今日</td>
                                <td>陳奕迅</td>
                                <td>3:54</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>明年今日</td>
                                <td>陳奕迅</td>
                                <td>3:54</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>明年今日</td>
                                <td>陳奕迅</td>
                                <td>3:54</td>
                            </tr>
                        </table>
                    </div>
                    <div class="carousel-item">
                        <img src="ny.jpg" alt="New York" width="1100" height="500">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
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
        <div class="b2 block" style="background-color: cadetblue;">
            <h1 style="writing-mode: vertical-rl; line-height: 200%;margin-top: 50%;">音樂</h1>
        </div>

    </section>
    <!--http://webber0928.blogspot.com/2015/04/css-make-full-screen-sections-of-css.html-->
</body>

</html>