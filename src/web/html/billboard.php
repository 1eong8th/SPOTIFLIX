<!doctype html>
<html class="" lang="">
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Spotiflix</title>
    <meta name="title" property="title" content="Artist 100 Chart" />
    <meta name="twitter:site" content="@billboard">
    <meta property="og:site_name" content="Billboard" />
    <meta property="og:type" content="article" />
    <link rel="manifest" href="/manifest.json">
    <link rel="canonical" href="/charts/artist-100">
    <link rel="shortcut icon" href="https://www.billboard.com/assets/1591297523/images/favicon.ico?1c43c053504b632de34f"
        type="image/vnd.microsoft.icon" />
    <link rel="apple-touch-icon"
        href="https://www.billboard.com/assets/1591297523/images/BB_favicon144.png?1c43c053504b632de34f">

    <link rel="dns-prefetch" href="https://www.billboard.com">
    <link rel="dns-prefetch" href="https://www.google-analytics.com/">
    <link rel="dns-prefetch" href="https://www.googletagservices.com/">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com/">
    <link rel="dns-prefetch" href="https://www.instagram.com/">
    <link rel="dns-prefetch" href="https://www.zergnet.com/">
    <link rel="dns-prefetch" href="https://players.brightcove.net/">
    <link rel="dns-prefetch" href="https://platform.zig.com/">
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://c.amazon-adsystem.com/">
    <link rel="dns-prefetch" href="https://securepubads.g.doubleclick.net/">
    <link rel="dns-prefetch" href="https://cdn.krxd.net/">
    <link rel="dns-prefetch" href="https://beacon.krxd.net/">
    <link rel="dns-prefetch" href="https://a.quora.com/">
    <link rel="dns-prefetch" href="https://connect.facebook.net/">
    <link rel="dns-prefetch" href="https://s0.2mdn.net/">
    <link rel="dns-prefetch" href="https://c.amazon-adsystem.com">
    <link rel="dns-prefetch" href="https://sejs.moatads.com/">
    <link rel="dns-prefetch" href="https://mb.moatads.com/">
    <link rel="dns-prefetch" href="https://tags.bluekai.com/">
    <link rel="dns-prefetch" href="https://platform.twitter.com/">
    <link rel="dns-prefetch" href="https://analytics.twitter.com/">
    <link rel="dns-prefetch" href="https://lib.pgmcdn.com">



    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript">
        var PGM = window.PGM || {};
        PGM.config = PGM.config || {
            assetHost: "https://www.billboard.com/assets/1591297523",
            contentHost: "https://www.billboard.com",
            sailthruCustomerId: "89582e5ca0930701aaa4fbf88e0ff0d4"
        };
        (function (PGM) {
            var debug_queue = [];
            PGM.debug = function () { debug_queue.push(arguments); };
            PGM.debug.dump = function () { return debug_queue; }
            PGM.debug.initialCategories = {
            };
        })(PGM);

        PGM.events = (function () {
            var events_queue = [];
            return {
                trigger: function () { events_queue.push(arguments); },
                get: function () { return events_queue; }
            };
        })();

        PGM.createScript = (function () {
            var q = [], cs = function createScript() { q.push(arguments) };
            cs.dump = function () { return q; };
            return cs;
        })();

        PGM.createScriptTag = (function () {
            var q = [], cs = function createScriptTag() { q.push(arguments) };
            cs.dump = function () { return q; };
            return cs;
        })();

        PGM.resolveOptAnon = (function () {
            var q = [], roa = function resolveOptAnon() { q.push(arguments) };
            roa.dump = function () { return q; };
            return roa;
        })();

        PGM.tests = [];
        PGM.ads = PGM.ads || {};
        PGM.ads.adUnit = '/';
        PGM.ads.enableDeferredAds = false;
        PGM.ads.slots = PGM.ads.slots || {};

        PGM.gtmTrackerName = "";
        PGM.blockScripts = false;

        PGM.mediaQueries = {
            small: "only screen and (max-width: 767px)",
            medium: "only screen and (min-width: 768px)",
            large: "only screen and (min-width: 1024px)"
        };

        PGM.greCaptchaSiteKey = "6Lfc66MUAAAAAA3lW9bTwbc_vy17EsFlueLHQjze";
    </script>
    <script src="https://lib.pgmcdn.com/advertisement.js"></script>
    <script data-src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type="text/javascript">
        window.top.DarkMatter = window.top.DarkMatter || {};
        window.top.DarkMatter.cmd = window.top.DarkMatter.cmd || [];

        window.CLARITY_GPT_DELAY = 0.01 * 1000;

        clarityPageData = { "site_code": "billboard", "zone": "artist-100", "single_request_mode": true };

        (function () {
            window.CLARITY = window.CLARITY || [];
            var ns = document.createElement('script'), s = document.getElementsByTagName('script')[0];
            ns.async = true; ns.type = 'text/javascript'; ns.src = '//darkmatter.billboard.com/wp-content/uploads/ad-tech/dark-matter-billboard-com.js'; s.parentNode.insertBefore(ns, s);
        })();
    </script>


    <script type='text/javascript'>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];

        var PGM = PGM || {};
        PGM.ads = PGM.ads || {};
        PGM.ads.data = null;
        PGM.ads.slots = PGM.ads.slots || {};
        PGM.brightcove = { "account_id": 1125911414, "default_player": "SJeOLIT3Hf", "amp_player": "Cy13jcWohS", "autoplayers": ["HynaCuMbg", "S1endnWG9x", "HyHqRqMw", "SJeOLIT3Hf"] };

        window.CLARITY = window.CLARITY || [];

        CLARITY.push({
            use: ["ads", "jquery"],
            run: function (Ads, $) {

                if (typeof Krux !== 'undefined') {
                    Ads.addKeyVal("all", "ksg", Krux.segments);
                    Ads.addKeyVal("all", "kuid", Krux.user);
                }

                var $embeddedVideos = $('.embedded-content[data-template="video"]');
                if ($embeddedVideos.length) {
                    // Wish we could do this in the module but it's too late by then
                    // for now all embedded videos are autoplay
                    Ads.addKeyVal("all", "video", "autoplay");
                } else {
                    // Else check if it's one of our autoplay videos
                    $('video').each(function () {
                        var $vid = $(this),
                            player = $vid.data('player'),
                            account = $vid.data('account');

                        if (PGM.brightcove.autoplayers.indexOf(player) >= 0) {
                            // If there are any auto-play vids stop
                            Ads.addKeyVal("all", "video", "autoplay");
                            return false;
                        } else if (account) {
                            Ads.addKeyVal("all", "video", "click-to-play");
                            // if there are click-to-plays there could still be an auto-play somewhere, continue
                        }
                    });
                }
            }
        });
    </script>
    
    <script type='text/javascript'>
        //TODO: Revisit this - is anything involving pgm/ads still needed?
        PGM.ads.adUnit = '';
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1266747-9']);
        _gaq.push(['_setDomainName', 'billboard.com']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

    </script>

    <script type="text/javascript">
        var dataLayer = dataLayer || [];
        dataLayer.push({
            'fireGTM': 'on'
            , 'contentType': 'chart page'
            , 'category': 'chart'

        });
        dataLayer.push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
        PGM.createScript('//www.googletagmanager.com/gtm.js?id=GTM-MD3ZLS');
    </script>


    <script>
        var _comscore = _comscore || [];
        var comscoreVars = {
            c1: "2"
            , c2: "7395269"
            , c3: ""
        };
        _comscore.push(comscoreVars);
    </script>
    <script type="text/javascript" data-src="https://sb.scorecardresearch.com/beacon.js"></script>
    <noscript>
        <img src="http://b.scorecardresearch.com/p?c1=2&c2=7395269&cv=2.0&cj=1" />
    </noscript>

 
    <link rel="stylesheet" type="text/css"
        href="https://www.billboard.com/assets/1591297523/css/charts.css?1c43c053504b632de34f">
        
    <script type='text/javascript'>
        var BB = BB || {};
        BB.config = BB.config || {
            contentHost: "https://www.billboard.com",
            mediaHost: "https://static.billboard.com/files"
        };
    </script>




    <style>
    div {
        color:white;
    }
    #grad1 {
    height: 200px;
    background-color: purple; /* 不支持线性的时候显示 */
    background-image: linear-gradient(to bottom right, #9982ff , #1f00ac);
    }
    
    .container1 {
        position: relative;    
    }

    .container1 img {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .middle {
        transition: .2s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
    }
    .container1:hover  .chart-list-item__image{
         opacity: 0.5;
    }

    .container1:hover .middle {
        opacity: 1;
    }
    .chart-list-item:hover {
        background-color:#f0f0f0ce;
    }
    </style>
</head>

<body class="chart-page chart-page- " data-trackcategory="Charts-Artist100" data-content-type="chart" style="background:url(https://wallpaperplay.com/walls/full/3/0/b/139653.jpg);">
    <!-- <div class="header-wrapper ">
        <header id="site-header" class="site-header " role="banner">
            <div class="site-header__background">
                <div class="site-header__contents">
                    <div class="site-header__bar">
                        <button class="site-header__nav-toggle"><i class="fa fa-bars"></i></button>
                        <div class="site-header__brand">
                            <a class="site-header__brand-link" href="/">
                                <img class="site-header__brand-logo"
                                    src="https://www.billboard.com/assets/1591297523/images/Billboard-white.svg?1c43c053504b632de34f"
                                    alt="Billboard">
                                <span class="site-header__brand-name">Billboard</span>
                            </a>
                        </div>
                        <div class="site-header__useractions" data-piano-enabled="1" data-can-paywall="">
                            <div class="site-header__useractions__desktop">
                                <div class="site-header__useractions__desktop__logged-out bb-user-anon bb-user-hidden">
                                    <span class="site-header__useraction">
                                        <a href="https://www.billboard.com/offer"
                                            class="site-header__useraction--user-subscribe-upgrade bb-user-elevate-link subscribe_header">Subscribe</a>
                                    </span>
                                    <span class="site-header__useraction">
                                        <a href="#"
                                            class="site-header__useraction--user-signin bb-user-loginout-link signin">Sign
                                            in</a>
                                    </span>
                                </div>
                                <div class="site-header__useractions__desktop__logged-in bb-user-free bb-user-hidden">
                                    <span class="site-header__useraction bb-user-free">
                                        <a href="https://www.billboard.com/offer"
                                            class="site-header__useraction--user-subscribe-upgrade bb-user-elevate-link upgrade">Upgrade</a>
                                    </span>
                                </div>
                            </div>
                            <div class="site-header__useractions__icon site-header__useractions__icon--logged-out">
                                <div class="site-header__useractions__dropdown__holder">
                                    <div class="site-header__useractions__dropdown">
                                        <ul
                                            class="site-header__useractions__dropdown__actions site-header__useractions__dropdown__actions--logged-out bb-user-anon bb-user-hidden">
                                            <li><a class="bb-user-elevate-link subscribe_header"
                                                    href="https://www.billboard.com/offer">Subscribe</a></li>
                                            <li><a class="bb-user-loginout-link signin" href="#">Sign in</a></li>
                                        </ul>
                                        <ul
                                            class="site-header__useractions__dropdown__actions site-header__useractions__dropdown__actions--logged-in bb-user-free bb-user-paid bb-user-hidden">
                                            <li><a class="bb-user-profile-link"
                                                    href="https://www.billboard.com/myaccount">My Account</a></li>
                                            <li><a class="bb-user-loginout-link signout" href="#">Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="site-header__search-toggle"><i class="fa fa-search"></i></button>

                    </div>
                    <nav class="site-header__nav">
                        <div class="site-header__nav-inner">
                            
                        </div>
                        <div class="site-header__nav__extra-mobile-menu">
                            <div class="site-header__nav__extra-mobile-menu__search">
                                <form class="js-search-form" method="get" accept-charset="UTF-8">
                                    <input class="js-search-input" placeholder="Search..." maxlength="255">
                                    <button class="js-search-submit"><i
                                            class="fa fa-search hamburger-menu-icon"></i></button>
                                </form>
                            </div>
                            <div class="site-header__nav__extra-mobile-menu__hr"></div>
                            <div class="site-header__nav__extra-mobile-menu__useractions bb-user-anon bb-user-hidden">
                                <div
                                    class="site-header__nav__extra-mobile-menu__useraction site-header__nav__extra-mobile-menu__useraction--gray bb-user-elevate-link-holder">
                                    <a class="bb-user-elevate-link" href="https://www.billboard.com/offer">Subscribe</a>
                                </div>
                                <div
                                    class="site-header__nav__extra-mobile-menu__useraction site-header__nav__extra-mobile-menu__useraction--user-signin">
                                    <a class="bb-user-loginout-link" href="#">Sign in</a>
                                </div>
                            </div>
                            <div
                                class="site-header__nav__extra-mobile-menu__useractions bb-user-free bb-user-paid bb-user-hidden">
                                <div
                                    class="site-header__nav__extra-mobile-menu__useraction site-header__nav__extra-mobile-menu__useraction--gray">
                                    <a class="bb-user-profile-link" href="https://www.billboard.com/myaccount">View
                                        Profile</a>
                                </div>
                                <div
                                    class="site-header__nav__extra-mobile-menu__useraction site-header__nav__extra-mobile-menu__useraction--user-subscribe-upgrade bb-user-elevate-link-holder bb-user-free bb-user-hidden">
                                    <a class="bb-user-elevate-link" href="https://www.billboard.com/offer">Upgrade</a>
                                </div>
                            </div>
                            <div class="site-header__nav__extra-mobile-menu__hr"></div>
                            <div class="site-header__nav__extra-mobile-menu__social">
                                <h2>Follow Billboard</h2>
                                <ul>
                                    <li class="site-header__nav__extra-mobile-menu__social__icon"><a
                                            href="https://www.facebook.com/Billboard/"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="site-header__nav__extra-mobile-menu__social__icon"><a
                                            href="https://www.twitter.com/billboard/"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="site-header__nav__extra-mobile-menu__social__icon"><a
                                            href="https://www.instagram.com/billboard/"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="site-header__nav__extra-mobile-menu__social__icon"><a
                                            href="https://www.youtube.com/channel/UCsVcseUYbYjldc-XgcsiEbg"><i
                                                class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="site-header__nav__extra-mobile-menu__hr"></div>
                            <div class="site-header__nav__extra-mobile-menu__about">
                                <h2>About Billboard</h2>
                                <ul>
                                    <li><a class="copyright__link" href="/terms-of-use">Terms of Use</a></li>
                                    <li><a class="copyright__link" href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a class="copyright__link" href="/about-our-ads">About Our Ads</a></li>
                                    <li><a class="copyright__link copyright__link--contrast"
                                            href="https://www.billboard.com/advertising">Advertising</a></li>
                                </ul>
                                <p>
                                    © 2019 Billboard. All Rights Reserved.<br />
                                    Billboard is a subsidiary of Valence Media, LLC.
                                </p>
                            </div>
                        </div>
                    </nav>
                    <form class="site-header__search-form site-header__search-form--main js-search-form" method="get"
                        accept-charset="UTF-8" action="/search/">
                        <input class="site-header__search-input js-search-input" placeholder="Search..." name="keys"
                            maxlength="255">
                        <button id="site-header__search-submit" class="site-header__search-submit js-search-submit"><i
                                class="fa fa-times"></i></button>
                    </form>
                </div>
            </div>
        </header> -->
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
              <form class="form-inline mt-2 mt-md-0">
              <?php
                // $newaddress = $_GET["add"];
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
    </div>
    <div class="site-header__placeholder"></div>
    <div class="chart-piano-overlay__attachment-point"></div>
    <main id="main" class="page-content">
    <audio controls id="mymp3" hidden="true">
        
    </audio>
        <div class="container chart-container container--xxlight-grey container--no-side-padding" style="background:#000000b6;">
            <div class="chart-details ">
                <div class="chart-list-expand-all">
                    <label><input type="checkbox" />
                        <div></div>
                    </label>
                    <h2>EXPAND ALL</h2>
                </div>
                <div class="chart-list chart-details__left-rail" data-video-playlist="[]">
                    <img class="chart-video__thumbnail-overlay-play-btn-img"
                        src="https://www.billboard.com/assets/1591297523/images/charts/thumb-play-btn.svg?1c43c053504b632de34f"
                        alt="Play" />

                        <?php
                            $sql = "SELECT Son_Name, sin_Name, Son_Pic, Son_Address FROM songs,singer  WHERE sing_id = sin_id LIMIT 0,20" ;
                            $result = $conn->query($sql);
                            $i = 1;
                            $up = "https://www.billboard.com/assets/1591297523/images/charts/arrow-up-mobile.svg?1c43c053504b632de34f 30w, https://www.billboard.com/assets/1591297523/images/charts/arrow-up.svg?1c43c053504b632de34f 38w";
                            
                            $down = "https://www.billboard.com/assets/1591297523/images/charts/arrow-down-mobile.svg?1c43c053504b632de34f 30w, https://www.billboard.com/assets/1591297523/images/charts/arrow-down.svg?1c43c053504b632de34f 38w";
                            $keep;
                            $reentry = "https://www.billboard.com/assets/1591297523/images/charts/arrow-reentry-mobile.svg?1c43c053504b632de34f 30w, https://www.billboard.com/assets/1591297523/images/charts/arrow-reentry.svg?1c43c053504b632de34f 38w";
                            $new = "https://www.billboard.com/assets/1591297523/images/charts/arrow-new-mobile.svg?1c43c053504b632de34f 30w, https://www.billboard.com/assets/1591297523/images/charts/arrow-new.svg?1c43c053504b632de34f 38w";
                            $out;
                            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                $last[20] = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
                                while($row = $result->fetch_assoc()) {
                                    
                                    $temp = rand(1,19);
                                    if($temp>$i){
                                        $out = $up;
                                    }
                                    else if($temp<$i){
                                        $out = $down;
                                    }
                                    else if($temp==$i){
                                        $out = $reentry;
                                    }
                                    $num = rand(5,20);
                                    $weeks = rand(1,60);
                                    echo '<div  data-rank="1" data-artist="" data-title="Gunna"
                                    data-has-content="true" style="background:#00000085; color:white;border:black; .chart-list-item:hover:background:white;"class="chart-list-item  w3-animate-right">
                                    <div class="chart-list-item__first-row chart-list-item__cursor-pointer">
                                        <div class="chart-list-item__position ">
                                            <div class="chart-list-item__rank ">
                                                '.$i.'
                                            </div>
                                            <div class="chart-list-item__award">
                                                <i class="fa fa-dot-circle-o"></i>
                                            </div>
                                        </div>
                                        <div class="chart-list-item__image-wrapper" >
                                            
                                            <div class="container1">
                                            <a onclick="changeSongMethod('.$i++.')" class="pic">
                                            <img src="'.$row["Son_Pic"].'" s
                                                data-srcset="https://charts-static.billboard.com/img/2018/06/gunna-16m-53x53.jpg?1 53w, https://charts-static.billboard.com/img/2018/06/gunna-16m-106x106.jpg?1 106w, https://charts-static.billboard.com/img/2018/06/gunna-16m-87x87.jpg?1 87w, https://charts-static.billboard.com/img/2018/06/gunna-16m-174x174.jpg?1 174w"
                                                sizes="(max-width: 767px) 72px, (min-width: 768px) 86px"
                                                class="chart-list-item__image" alt="Gunna Billboard Artist 100">
                                                <div class="middle">
                                                <div class="text">Play</div>
                                                </div></a>
                                            </div>
                                            <div class="chart-list-item__trend-icon">
                                                <img src=""
                                                    srcset="'.$out.'"
                                                    sizes="(min-width: 768px) 38px, 30px">
                                            </div>
                                        </div>
                                        <div class="chart-list-item__text-wrapper">
                                            <div class="chart-list-item__text ">
                                                <div class="chart-list-item__title">
                                                    <span class="chart-list-item__title-text">
                                                        <a href="/music/gunna" style="color:white;">' .$row["Son_Name"].'</a>
                                                        </span>
                                                    </div>
                                                    <div class="chart-list-item__artist">
                                                    </div>
                                                    <div class="chart-list-item__ministats ">
                                                        <div class="chart-list-item__ministats-cell">
                                                            '.$temp.'&nbsp;
                                                            <span class="chart-list-item__ministats-cell-heading">Last</span>
                                                        </div>
                                                        <div class="chart-list-item__ministats-cell">
                                                        '.$num.'&nbsp;
                                                            <span class="chart-list-item__ministats-cell-heading">Peak</span>
                                                        </div>
                                                        <div class="chart-list-item__ministats-cell">
                                                        '.$weeks.'&nbsp;
                                                            <span class="chart-list-item__ministats-cell-heading">Weeks</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chart-list-item__chevron-wrapper">
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                        <div class="chart-list-item__extra-info">
                                            <div class="chart-list-item__extra-info-shadow"></div>
                                            <div class="chart-list-item__stats">
                                                <div class="chart-list-item__stats-cell  chart-list-item__stats-cell--first-cell">
                                                    <div class="chart-list-item__stats-icon fa fa-arrow-up fa-rotate-45"></div>
                                                    <div class="chart-list-item__last-week">'.$temp.'</div>
                                                    LAST WEEK
                                                </div>
                                                <div class="chart-list-item__stats-cell ">
                                                    <div class="chart-list-item__stats-icon fa fa-arrow-up fa-rotate-45"></div>
                                                    <div class="chart-list-item__last-week">'.rand(1,40).'</div>
                                                    TWO WEEKS AGO
                                                </div>
                                                <div class="chart-list-item__stats-cell ">
                                                    <div class="chart-list-item__stats-icon fa fa-line-chart"></div>
                                                    <div class="chart-list-item__weeks-at-one">'.$num.'</div>
                                                    PEAK POSITION
                                                </div>
                                                <div class="chart-list-item__stats-cell   chart-list-item__stats-cell--no-border-right">
                                                    <div class="chart-list-item__stats-icon fa fa-clock-o"></div>
                                                    <div class="chart-list-item__weeks-on-chart">'.$weeks.'</div>
                                                    WEEKS ON CHART
                                                </div>
                                                <hr class="chart-list-item__stats-divider chart-list-item__stats-divider--bottom">
                                            </div>
                                            <div class="chart-list-item__awards">
                                                <div class="chart-list-item__award-icon chart-list-item__award-icon--last"><i
                                                        class="fa fa-dot-circle-o"></i> Gains in performance</div>
                                            </div>
                                            <hr class="chart-list-item__stats-divider chart-list-item__stats-divider--bottom">
                                            <div class="chart-list-item__people_data">
                                                <div class="chart-list-item__people_data-cell">
                                                    <span class="chart-list-item__people_data-cell-heading">Imprint/Promotion
                                                        Label:</span>
                                                    <br>
                                                    Young Stoner Life/300 | AG
                                                </div>
                                            </div>
                                        </div>
                                    </div>'; 

                                    $last[$temp]=0;
                                }
                                
                            }

                        ?>
                    <script>
                                    //song play control setting
                                    var play = 0;
                                    var song = -1;
                                    var songslist = [<?php
                                                        $sql = "SELECT Son_Address FROM songs LIMIT 0,19";
                                                        $result = $conn -> query($sql);

                                                        if ($result -> num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = $result -> fetch_assoc()) {
                                                                echo '"'.$row["Son_Address"].'",';
                                                            }
                                                        }
                                                    ?> ""];

                                    function changeSongMethod(nowsong) {
                                        var ebtplay = document.querySelector(".btplay");
                                        var emymp3 = document.querySelector("#mymp3");
                                        emymp3.src = songslist[nowsong - 1];
                                        

                                        if (play && nowsong == song) {
                                            emymp3.pause();
                                            play = 0;
                                        } else {
                                            emymp3.play();
                                            play = 1;
                                        }
                                        song = nowsong;
                                        return;
                                    }
                        </script>


                    
                    
                    
                        
                </div>
            </div>
        </div>
        <div class="chart-list__expanded-header">
            <div class="chart-list__expanded-header-text">
                ARTIST 100
            </div>
            <div class="chart-list__expanded-header-close">
                <span class="fa fa-close"></span>
            </div>
        </div>
        <div id="dateSearchModal" class="date-search-modal" data-visible="false">
            <div class="date-search-modal__inner">
                <div class="date-search-modal__top-row">
                    <div class="date-search-modal__title">
                        <span class="fa fa-calendar"></span>
                        <br />
                        Chart Archive Search
                        <div class="date-search-modal__title-subtext">
                            SELECT A DATE
                        </div>
                    </div>
                    <div class="date-search-modal__close-icon date-search-modal-toggle"><span
                            class="fa fa-close"></span></div>
                </div>
                <div class="date-search-modal__main-content">
                    <div class="date-search-modal__instructions">
                        Try a birthday or anniversary
                    </div>
                    <div class="date-search-modal__date-selector-row"><span
                            class="dropdown dropdown__date-selector date-search-modal__month-select"
                            data-date-type="month"><button><span class="date-search-modal__selected-option">
                                    Jun
                                </span><span
                                    class="fa fa-caret-down dropdown__date-selector-caret"></span></button><label><input
                                    type="checkbox" />
                                <ul class="dropdown__date-select-options">
                                    <li class="date-search-modal__select-option" data-date-val="01">Jan</li>
                                    <li class="date-search-modal__select-option" data-date-val="02">Feb</li>
                                    <li class="date-search-modal__select-option" data-date-val="03">Mar</li>
                                    <li class="date-search-modal__select-option" data-date-val="04">Apr</li>
                                    <li class="date-search-modal__select-option" data-date-val="05">May</li>
                                    <li class="date-search-modal__select-option" data-date-val="06">Jun</li>
                                    <li class="date-search-modal__select-option" data-date-val="07">Jul</li>
                                    <li class="date-search-modal__select-option" data-date-val="08">Aug</li>
                                    <li class="date-search-modal__select-option" data-date-val="09">Sep</li>
                                    <li class="date-search-modal__select-option" data-date-val="10">Oct</li>
                                    <li class="date-search-modal__select-option" data-date-val="11">Nov</li>
                                    <li class="date-search-modal__select-option" data-date-val="12">Dec</li>
                                </ul>
                            </label></span>
                        &nbsp;
                        <span class="dropdown dropdown__date-selector date-search-modal__day-select"
                            data-date-type="day"><button><span class="date-search-modal__selected-option">
                                    06
                                </span><span
                                    class="fa fa-caret-down dropdown__date-selector-caret"></span></button><label><input
                                    type="checkbox" />
                                <ul class="dropdown__date-select-options">
                                    <li class="date-search-modal__select-option" data-date-val="1">1</li>
                                    <li class="date-search-modal__select-option" data-date-val="2">2</li>
                                    <li class="date-search-modal__select-option" data-date-val="3">3</li>
                                    <li class="date-search-modal__select-option" data-date-val="4">4</li>
                                    <li class="date-search-modal__select-option" data-date-val="5">5</li>
                                    <li class="date-search-modal__select-option" data-date-val="6">6</li>
                                    <li class="date-search-modal__select-option" data-date-val="7">7</li>
                                    <li class="date-search-modal__select-option" data-date-val="8">8</li>
                                    <li class="date-search-modal__select-option" data-date-val="9">9</li>
                                    <li class="date-search-modal__select-option" data-date-val="10">10</li>
                                    <li class="date-search-modal__select-option" data-date-val="11">11</li>
                                    <li class="date-search-modal__select-option" data-date-val="12">12</li>
                                    <li class="date-search-modal__select-option" data-date-val="13">13</li>
                                    <li class="date-search-modal__select-option" data-date-val="14">14</li>
                                    <li class="date-search-modal__select-option" data-date-val="15">15</li>
                                    <li class="date-search-modal__select-option" data-date-val="16">16</li>
                                    <li class="date-search-modal__select-option" data-date-val="17">17</li>
                                    <li class="date-search-modal__select-option" data-date-val="18">18</li>
                                    <li class="date-search-modal__select-option" data-date-val="19">19</li>
                                    <li class="date-search-modal__select-option" data-date-val="20">20</li>
                                    <li class="date-search-modal__select-option" data-date-val="21">21</li>
                                    <li class="date-search-modal__select-option" data-date-val="22">22</li>
                                    <li class="date-search-modal__select-option" data-date-val="23">23</li>
                                    <li class="date-search-modal__select-option" data-date-val="24">24</li>
                                    <li class="date-search-modal__select-option" data-date-val="25">25</li>
                                    <li class="date-search-modal__select-option" data-date-val="26">26</li>
                                    <li class="date-search-modal__select-option" data-date-val="27">27</li>
                                    <li class="date-search-modal__select-option" data-date-val="28">28</li>
                                    <li class="date-search-modal__select-option" data-date-val="29">29</li>
                                    <li class="date-search-modal__select-option" data-date-val="30">30</li>
                                    <li class="date-search-modal__select-option" data-date-val="31">31</li>
                                </ul>
                            </label></span>
                        ,&nbsp;
                        <span class="dropdown dropdown__date-selector date-search-modal__year-select"
                            data-date-type="year"><button><span class="date-search-modal__selected-option">
                                    2020
                                </span><span
                                    class="fa fa-caret-down dropdown__date-selector-caret"></span></button><label><input
                                    type="checkbox" />
                                <ul class="dropdown__date-select-options">
                                    <li class="date-search-modal__select-option" data-date-val="2020">2020</li>
                                    <li class="date-search-modal__select-option" data-date-val="2019">2019</li>
                                    <li class="date-search-modal__select-option" data-date-val="2018">2018</li>
                                    <li class="date-search-modal__select-option" data-date-val="2017">2017</li>
                                    <li class="date-search-modal__select-option" data-date-val="2016">2016</li>
                                    <li class="date-search-modal__select-option" data-date-val="2015">2015</li>
                                    <li class="date-search-modal__select-option" data-date-val="2014">2014</li>
                                    <li class="date-search-modal__select-option" data-date-val="2013">2013</li>
                                    <li class="date-search-modal__select-option" data-date-val="2012">2012</li>
                                    <li class="date-search-modal__select-option" data-date-val="2011">2011</li>
                                    <li class="date-search-modal__select-option" data-date-val="2010">2010</li>
                                    <li class="date-search-modal__select-option" data-date-val="2009">2009</li>
                                    <li class="date-search-modal__select-option" data-date-val="2008">2008</li>
                                    <li class="date-search-modal__select-option" data-date-val="2007">2007</li>
                                    <li class="date-search-modal__select-option" data-date-val="2006">2006</li>
                                    <li class="date-search-modal__select-option" data-date-val="2005">2005</li>
                                    <li class="date-search-modal__select-option" data-date-val="2004">2004</li>
                                    <li class="date-search-modal__select-option" data-date-val="2003">2003</li>
                                    <li class="date-search-modal__select-option" data-date-val="2002">2002</li>
                                    <li class="date-search-modal__select-option" data-date-val="2001">2001</li>
                                    <li class="date-search-modal__select-option" data-date-val="2000">2000</li>
                                    <li class="date-search-modal__select-option" data-date-val="1999">1999</li>
                                    <li class="date-search-modal__select-option" data-date-val="1998">1998</li>
                                    <li class="date-search-modal__select-option" data-date-val="1997">1997</li>
                                    <li class="date-search-modal__select-option" data-date-val="1996">1996</li>
                                    <li class="date-search-modal__select-option" data-date-val="1995">1995</li>
                                    <li class="date-search-modal__select-option" data-date-val="1994">1994</li>
                                    <li class="date-search-modal__select-option" data-date-val="1993">1993</li>
                                    <li class="date-search-modal__select-option" data-date-val="1992">1992</li>
                                    <li class="date-search-modal__select-option" data-date-val="1991">1991</li>
                                    <li class="date-search-modal__select-option" data-date-val="1990">1990</li>
                                    <li class="date-search-modal__select-option" data-date-val="1989">1989</li>
                                    <li class="date-search-modal__select-option" data-date-val="1988">1988</li>
                                    <li class="date-search-modal__select-option" data-date-val="1987">1987</li>
                                    <li class="date-search-modal__select-option" data-date-val="1986">1986</li>
                                    <li class="date-search-modal__select-option" data-date-val="1985">1985</li>
                                    <li class="date-search-modal__select-option" data-date-val="1984">1984</li>
                                    <li class="date-search-modal__select-option" data-date-val="1983">1983</li>
                                    <li class="date-search-modal__select-option" data-date-val="1982">1982</li>
                                    <li class="date-search-modal__select-option" data-date-val="1981">1981</li>
                                    <li class="date-search-modal__select-option" data-date-val="1980">1980</li>
                                    <li class="date-search-modal__select-option" data-date-val="1979">1979</li>
                                    <li class="date-search-modal__select-option" data-date-val="1978">1978</li>
                                    <li class="date-search-modal__select-option" data-date-val="1977">1977</li>
                                    <li class="date-search-modal__select-option" data-date-val="1976">1976</li>
                                    <li class="date-search-modal__select-option" data-date-val="1975">1975</li>
                                    <li class="date-search-modal__select-option" data-date-val="1974">1974</li>
                                    <li class="date-search-modal__select-option" data-date-val="1973">1973</li>
                                    <li class="date-search-modal__select-option" data-date-val="1972">1972</li>
                                    <li class="date-search-modal__select-option" data-date-val="1971">1971</li>
                                    <li class="date-search-modal__select-option" data-date-val="1970">1970</li>
                                    <li class="date-search-modal__select-option" data-date-val="1969">1969</li>
                                    <li class="date-search-modal__select-option" data-date-val="1968">1968</li>
                                    <li class="date-search-modal__select-option" data-date-val="1967">1967</li>
                                    <li class="date-search-modal__select-option" data-date-val="1966">1966</li>
                                    <li class="date-search-modal__select-option" data-date-val="1965">1965</li>
                                    <li class="date-search-modal__select-option" data-date-val="1964">1964</li>
                                    <li class="date-search-modal__select-option" data-date-val="1963">1963</li>
                                    <li class="date-search-modal__select-option" data-date-val="1962">1962</li>
                                    <li class="date-search-modal__select-option" data-date-val="1961">1961</li>
                                    <li class="date-search-modal__select-option" data-date-val="1960">1960</li>
                                    <li class="date-search-modal__select-option" data-date-val="1959">1959</li>
                                    <li class="date-search-modal__select-option" data-date-val="1958">1958</li>
                                    <li class="date-search-modal__select-option" data-date-val="1957">1957</li>
                                    <li class="date-search-modal__select-option" data-date-val="1956">1956</li>
                                    <li class="date-search-modal__select-option" data-date-val="1955">1955</li>
                                    <li class="date-search-modal__select-option" data-date-val="1954">1954</li>
                                    <li class="date-search-modal__select-option" data-date-val="1953">1953</li>
                                    <li class="date-search-modal__select-option" data-date-val="1952">1952</li>
                                    <li class="date-search-modal__select-option" data-date-val="1951">1951</li>
                                    <li class="date-search-modal__select-option" data-date-val="1950">1950</li>
                                    <li class="date-search-modal__select-option" data-date-val="1949">1949</li>
                                    <li class="date-search-modal__select-option" data-date-val="1948">1948</li>
                                    <li class="date-search-modal__select-option" data-date-val="1947">1947</li>
                                    <li class="date-search-modal__select-option" data-date-val="1946">1946</li>
                                    <li class="date-search-modal__select-option" data-date-val="1945">1945</li>
                                    <li class="date-search-modal__select-option" data-date-val="1944">1944</li>
                                    <li class="date-search-modal__select-option" data-date-val="1943">1943</li>
                                    <li class="date-search-modal__select-option" data-date-val="1942">1942</li>
                                    <li class="date-search-modal__select-option" data-date-val="1941">1941</li>
                                    <li class="date-search-modal__select-option" data-date-val="1940">1940</li>
                                    <li class="date-search-modal__select-option" data-date-val="1939">1939</li>
                                    <li class="date-search-modal__select-option" data-date-val="1938">1938</li>
                                    <li class="date-search-modal__select-option" data-date-val="1937">1937</li>
                                    <li class="date-search-modal__select-option" data-date-val="1936">1936</li>
                                    <li class="date-search-modal__select-option" data-date-val="1935">1935</li>
                                    <li class="date-search-modal__select-option" data-date-val="1934">1934</li>
                                    <li class="date-search-modal__select-option" data-date-val="1933">1933</li>
                                    <li class="date-search-modal__select-option" data-date-val="1932">1932</li>
                                    <li class="date-search-modal__select-option" data-date-val="1931">1931</li>
                                    <li class="date-search-modal__select-option" data-date-val="1930">1930</li>
                                    <li class="date-search-modal__select-option" data-date-val="1929">1929</li>
                                    <li class="date-search-modal__select-option" data-date-val="1928">1928</li>
                                    <li class="date-search-modal__select-option" data-date-val="1927">1927</li>
                                    <li class="date-search-modal__select-option" data-date-val="1926">1926</li>
                                    <li class="date-search-modal__select-option" data-date-val="1925">1925</li>
                                    <li class="date-search-modal__select-option" data-date-val="1924">1924</li>
                                    <li class="date-search-modal__select-option" data-date-val="1923">1923</li>
                                    <li class="date-search-modal__select-option" data-date-val="1922">1922</li>
                                    <li class="date-search-modal__select-option" data-date-val="1921">1921</li>
                                    <li class="date-search-modal__select-option" data-date-val="1920">1920</li>
                                    <li class="date-search-modal__select-option" data-date-val="1919">1919</li>
                                    <li class="date-search-modal__select-option" data-date-val="1918">1918</li>
                                    <li class="date-search-modal__select-option" data-date-val="1917">1917</li>
                                    <li class="date-search-modal__select-option" data-date-val="1916">1916</li>
                                    <li class="date-search-modal__select-option" data-date-val="1915">1915</li>
                                    <li class="date-search-modal__select-option" data-date-val="1914">1914</li>
                                    <li class="date-search-modal__select-option" data-date-val="1913">1913</li>
                                    <li class="date-search-modal__select-option" data-date-val="1912">1912</li>
                                    <li class="date-search-modal__select-option" data-date-val="1911">1911</li>
                                    <li class="date-search-modal__select-option" data-date-val="1910">1910</li>
                                    <li class="date-search-modal__select-option" data-date-val="1909">1909</li>
                                    <li class="date-search-modal__select-option" data-date-val="1908">1908</li>
                                    <li class="date-search-modal__select-option" data-date-val="1907">1907</li>
                                    <li class="date-search-modal__select-option" data-date-val="1906">1906</li>
                                    <li class="date-search-modal__select-option" data-date-val="1905">1905</li>
                                    <li class="date-search-modal__select-option" data-date-val="1904">1904</li>
                                    <li class="date-search-modal__select-option" data-date-val="1903">1903</li>
                                    <li class="date-search-modal__select-option" data-date-val="1902">1902</li>
                                    <li class="date-search-modal__select-option" data-date-val="1901">1901</li>
                                    <li class="date-search-modal__select-option" data-date-val="1900">1900</li>
                                </ul>
                            </label></span></div>
                    <p class="date-search-modal__error-message">Please try a different date</p><button
                        id="dateSearchSubmit" class="date-search-modal__submit-btn" data-day="6" data-month="6"
                        data-year="2020" data-chart-slug="ATS">
                        View Chart
                    </button><img class="date-search-modal__loading-icon"
                        src="https://www.billboard.com/assets/1591297523/images/charts/bb-loading.svg?1c43c053504b632de34f"
                        alt="Loading...">
                </div>
                <div class="date-search-modal__close-row">
                    <button class="date-search-modal__close-btn date-search-modal-toggle">Cancel</button>
                </div>
            </div>
        </div>
    </main>
    
    <div class="biz-modal">
        <div class="biz-modal__content">
            <button class="biz-modal__close" id="biz-modal-close"></button>
            <div class="biz-modal__header-image">
                <div class="biz-modal__header-text">THE BILLBOARD BIZ
                    <br />SUBSCRIBER EXPERIENCE</div>
            </div>
            <div class="biz-modal__info-wrap">
                <div class="biz-modal__info-text">
                    <p>The Biz premium subscriber content has moved to Billboard.com/business.</p><br />
                    <p>To simplify subscriber access, we have temporarily disabled the password requirement.</p>
                </div>
                <button class="biz-modal__button" id="biz-modal-continue">CONTINUE TO BILLBOARD BIZ CONTENT</button>
                <div class="biz-modal__check-container">
                    <label class="biz-modal__check">
                        <input type="checkbox" id="biz-modal-no-show" class="biz-modal__no-show">
                        <span class="biz-modal__no-text">Don't show again</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.CLARITY = window.CLARITY || [];
    </script>
    <div class="ad_clarity" data-out-of-page="true" style="display: none;"></div>
    <script>
        var darkMatterCMD = function () {
            this.darkMatterCall(function () {

                var keywords = [];

                if (typeof (global_keywords) !== "undefined") {
                    keywords = global_keywords;
                }

                var pageMeta = {
                    pageKeywordData: keywords,
                    iuData: {
                        iu: '6419/billboard/',
                        site_code: 'billboard',
                        zone: 'artist-100'
                    }
                },
                    region = this.getUtilities().getSetCookie('PGMCC') || '';

                keywords.push({
                    keywords: "",
                    keyvalues: "env=prod",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "ptype=charts",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "url=8c250be4",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "keywords=charts,artist-100",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "tags_global=charts,artist-100",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "domain=www.billboard.com",
                    paths: "",
                    positions: "all"
                });

                keywords.push({
                    keywords: "",
                    keyvalues: "region=" + region,
                    paths: "",
                    positions: "all"
                });

                this.setMetaDataFromPage(pageMeta);
            })
        };

        window.top.DarkMatter.cmd.push([darkMatterCMD]);

        CLARITY.push({
            use: ['ads', 'cookies', 'header'],
            run: function (Ads, cookies, header) {
                // @TODO can remove try/catch after this release; wrapping it for now in site/Clarity deploys are out of
                // sync.
                try {
                    // Since we have the ad unit available, let Clarity know about it so we don't have to keep passing that
                    // in.
                    header.setAdUnit('6419/billboard/');
                } catch (err) {
                }
                Ads.site_code = "billboard";
                Ads.zone = "artist-100";
                var keywords = [];
                var region = cookies.get('PGMCC') ? cookies.get('PGMCC') : '';
                // Keyword injection
                if (typeof (global_keywords) !== "undefined") {
                    keywords = global_keywords;
                }
                keywords.push({
                    keywords: "",
                    keyvalues: "env=prod",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "ptype=charts",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "url=8c250be4",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "keywords=charts,artist-100",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "tags_global=charts,artist-100",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "domain=www.billboard.com",
                    paths: "",
                    positions: "all"
                });
                keywords.push({
                    keywords: "",
                    keyvalues: "region=" + region,
                    paths: "",
                    positions: "all"
                })
                Ads.keywords = keywords;
            }
        });


    </script>
    <script
        src="https://www.billboard.com/assets/1591297523/js/vendors_/article_/cha_198f16b7.bundle.js?d4bdc0dbe2e24da470a5?1c43c053504b632de34f"></script>
    <script
        src="https://www.billboard.com/assets/1591297523/js/default_/article_/cha_07515f66.bundle.js?d4bdc0dbe2e24da470a5?1c43c053504b632de34f"></script>
    <script
        src="https://www.billboard.com/assets/1591297523/js//charts.bundle.js?d4bdc0dbe2e24da470a5?1c43c053504b632de34f"></script>
    <script type="text/javascript"
        src="https://www.billboard.com/assets/1591297523/js/vendor.js?1c43c053504b632de34f"></script>
    <script type="text/javascript"
        src="https://www.billboard.com/assets/1591297523/js/bb.js?1c43c053504b632de34f"></script>

    <script type='text/javascript'>
        var _sf_async_config = {};
        /** CONFIGURATION START **/
        _sf_async_config.uid = 3388;
        _sf_async_config.domain = 'billboard.com';
        _sf_async_config.useCanonical = true;
        /** CONFIGURATION END **/
        PGM.createScript('//static.chartbeat.com/js/chartbeat.js');
    </script>



    <script class="kxct" data-id="JsVUOKRj" data-timing="async" data-version="1.9" type="text/javascript">
        window.Krux || ((Krux = function () { Krux.q.push(arguments) }).q = []);
        (function () {
            PGM.createScript((location.protocol === 'https:' ? 'https:' : 'http:') + '//cdn.krxd.net/controltag/JsVUOKRj.js');
        }());
    </script>

    <script class="kxint" type="text/javascript">
        window.Krux || ((Krux = function () { Krux.q.push(arguments); }).q = []);
        (function () {
            function retrieve(n) {
                var k = 'kx' + '' + n, ls = (function () {
                    try {
                        return window.localStorage;
                    } catch (e) {
                        return null;
                    }
                })();
                if (ls) {
                    return ls[k] || '';
                } else if (navigator.cookieEnabled) {
                    var m = document.cookie.match(k + '=([^;]*)');
                    return (m && unescape(m[1])) || '';
                } else {
                    return '';
                }
            }
            Krux.user = retrieve('user');
            var segs = retrieve('segs');
            Krux.segments = segs ? segs.split(',') : [];
        })();
    </script>

    <script data-src="//platform.instagram.com/en_US/embeds.js"></script>
    <script data-src="//platform.twitter.com/widgets.js"></script>
    <div id="fb-root"></div>
    <script type="text/javascript">
        PGM.createScriptTag("//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=303838389949803");
    </script>
    <script>
        window.geofeed = function (options) {
            // string two digit continent code EU, NA, OC, AS, SA, AF
            var continent = options.continent.toString();
            // string two digit ISO country code
            var country = options.country.toString();
            // string two digit state code
            var state = options.state.toString();

            if (state == 'CA') {
                document.getElementById("ot-sdk-btn").style.visibility = "visible";
            } else {
                document.getElementById("ot-sdk-btn").style.visibility = "hidden";
            }
            // similar logic can be included for country level and state level users.
        }
    </script>
    <script type="text/javascript">
        PGM.createScriptTag("//geolocation.onetrust.com/cookieconsentpub/v1/geo/location/geofeed", { charset: "UTF-8", id: "geofeedid" });
    </script>
    <script>
        window.aax = window.aax || {};
        const aax = window.aax;
        aax.initTime = new Date().getTime();
        aax.pubId = "AAXBKED5L";
        aax.ver = "1.2";
        aax.hst = window.location.hostname;
        const externalAAXScript = "//c.aaxads.com/aax.js?pub=" + aax.pubId + "&hst=" + aax.hst + "&ver=" + aax.ver;

        PGM.createScriptTag(externalAAXScript);
    </script>
    <script type="text/javascript">
        PGM.createScript('https://ak.sail-horizon.com/spm/spm.v1.min.js', function () {
            Sailthru.init({ "customerId": "89582e5ca0930701aaa4fbf88e0ff0d4" });
        });
    </script>

    <script type="text/javascript">
        const arrayStringInUrl = (stringsArray) => {
            return stringsArray.some(function (string) { return window.location.href.indexOf(string) >= 0 })
        }
        window.pianoDebugOutput = (message) => {
            const environments = ['local.', 'dev.', 'staging.', 'int.'];
            if (arrayStringInUrl(['/articles/', '/close-calls/']) && arrayStringInUrl(environments)) {
                console.log(`%c${message}`, "background: #800080; color: #fff; padding: 3px");
            }
        }
        window.PGM.createScript("//api.tinypass.com/xbuilder/experience/load?aid=Ow9jtiXxtz", function () {
            tp = window.tp || [];
            var previousPage = 'https://www.billboard.com/';
            var url = document.referrer;
            if (url !== '' && (url.indexOf(location.protocol + '//' + location.host) === 0)) {
                previousPage = url;
            }
            // enable GA events
            tp.push(["init", function () {
                tp.push(["setDebug",]);
                // ... integration code here
                tp.enableGACrossDomainLinking();
            }]);
            // Debug if article has Pay Wall
            tp.push(["addHandler", "experienceExecute", function (event) {

                let pageExperiences = event.result.experiences;
                // Output experiences
                let pageExperiencesOutput = '';
                pageExperiences.map((experience, index) => {
                    pageExperiencesOutput = pageExperiencesOutput + `\n${index + 1}. ${experience.title}`;
                });
                if (typeof window.pianoDebugOutput === "function") {
                    window.pianoDebugOutput(`Piano Page Experiences: ${pageExperiencesOutput}`);
                }
                let title = 'Infinite Scroll Article Overlay';
                let hasValue = function (obj, key, value) {
                    return obj.hasOwnProperty(key) && obj[key] === value;
                }
                const PianoResponseMessage = 'Piano Composer Response Infinite scroll Layout -';
                let jsConsoleMessage = '';
                if (pageExperiences.some(function (pageExperiences) {
                    return hasValue(pageExperiences, "title", title);
                })) {
                    jsConsoleMessage = PianoResponseMessage + ' Pay walled';
                } else {
                    jsConsoleMessage = PianoResponseMessage + ' No Pay wall';
                }
                // Output paywall result
                if (typeof window.pianoDebugOutput === "function") {
                    window.pianoDebugOutput(jsConsoleMessage);
                }
            }]);
            tp.push(["setCustomVariable", "parentUrl", window.location.href]);
            tp.push(["setCustomVariable", "previousPage", previousPage]);
            //Set closecall status variable
            if (arrayStringInUrl(['/close-calls/'])) {
                let closeCallTimeStamp = 0;
                let eventStartPassed = false;
                let closeCallState = 'pre-event';
                if (!isNaN()) {
                    let current_timestamp = + new Date();
                    eventStartPassed = closeCallTimeStamp < current_timestamp;
                    closeCallState = `${eventStartPassed ? 'post' : 'pre'}-event`;
                }
                tp.push(["setCustomVariable", "closeCallTimestamp", closeCallTimeStamp]);
                tp.push(["setCustomVariable", "closeCallState", closeCallState]);
                window.pianoDebugOutput("Close Call " + (eventStartPassed ? "Paywalled - Post Event" : " No Paywall - Pre Event") + "\nClose Call State  | Close Call timestamp " + closeCallTimeStamp + " | " + new Date(closeCallTimeStamp).toLocaleDateString(navigator.language, { hour: '2-digit', minute: '2-digit' }));
            };
            tp.push(['setUsePianoIdUserProvider', true]);
            tp.push(["setContentSection", "chart_landing"]);
            //abandon cart cookie logic start
            //_abandon_user = {anon, free}
            //_abandon_item = {termId}
            tp.push(["addHandler", "startCheckout", function (event) {
                if (event.userToken === '') {
                    document.cookie = "_abandon_user=anon";
                } else {
                    document.cookie = "_abandon_user=free";
                }
                document.cookie = "_abandon_item=" + event.termId;
            }]);
            tp.push(["addHandler", "loginSuccess", function (event) {
                if (event.source === 'OFFER') {
                    document.cookie = "_abandon_user=free";
                }
            }]);
            tp.push(["addHandler", "checkoutComplete", function (event) {
                document.cookie = "_abandon_user=;expires=Thu, 01 Jan 1970 00:00:01 GMT;";
                document.cookie = "_abandon_item=;expires=Thu, 01 Jan 1970 00:00:01 GMT;";
            }]);
            // content tracking data
            if (typeof window.tp !== 'undefined') {
                tp.push(["setContentCreated", ""]);
                tp.push(["setContentAuthor", [
                ]]);

                if (typeof window.pianoDebugOutput === "function") {
                    window.pianoDebugOutput("Article:\nArtist 100\nPiano Tags Sent:\nWeekly");
                }
                tp.push(["setTags", ["Weekly"]]);
            }
        });
    </script>

    <script type="text/javascript">
        PGM.createScript('https://ak.sail-horizon.com/spm/spm.v1.min.js', function () {
            Sailthru.init({ "customerId": "89582e5ca0930701aaa4fbf88e0ff0d4" });
        });
    </script>
</body>

</html>