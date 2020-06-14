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
<title>歌手介紹</title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    body {
        background-repeat: no-repeat;
        background-size: cover;
        
        
        background-image: url(https://ak.picdn.net/shutterstock/videos/1034981867/thumb/1.jpg);
    }

    .intro{
        
        position:absolute;
        background-color: rgb(255,255,255,0.3);
        
        top: 40%;
        left: 40%;
        margin: -350px 0 0 -340px;
        width:1000px;
        height:650px;
        border-width:3px;border-style:solid;border-color:transparent ;padding:5px;
        border-radius: 10px;
        -webkit-backdrop-filter: blur(15px);	
        backdrop-filter: blur(15px);	
    }
    

    .pic{
        background-image: url(https://i.kfs.io/artist/global/6912429,0v1/fit/300x300.jpg);
        background-repeat :no-repeat;
        background-size:cover;
        padding:10px;
        border:10px;
        width:200px;
        height:200px;
        margin: 10px;
        
    
    }

    
    .text{
        background: rgb(0,0,0) transparent;
        width:550px;
        height:200px;
        margin:0 right;
        float:left;
        padding-left: 5px; 
        padding-top: 20px; 
        /*display: flex;                      對齊
        justify-content: left;
        align-items:flex-start;                 */
        color:whitesmoke;
        font-family: Microsoft JhengHei;
    }
    .sin_intro{
        float:right;
        width: 50%;
        height: 50%;
        padding-top: 60px;
        line-height: 20pt;
        
    }
    .list{
        margin:70px;
        width:700px;
        height: 300px;
        background-color: rgb(0,0,0) transparent;
        float:right;
        overflow-y:auto; /*滾輪*/
        overflow-x:hidden;
    }

    .table{
        height: 100%;
        /*overflow-y: auto;*/
        margin:5px;
        text-align: center;
        font-family: Microsoft JhengHei;
    }
   


    ::-webkit-scrollbar {            /*滑輪*/
        width: 5px;
    }
    ::-webkit-scrollbar-track {
        -webkit-border-radius: 10px;
        border-radius: 10px;
        margin:80px 0 5px 0;
    }
    ::-webkit-scrollbar-thumb {
        -webkit-border-radius: 4px;
        border-radius: 4px;
        background: rgb(219,219,219); 
    }


    .song-table tr .index-container {   /*table*/
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
}
a {
    color: tan;
    text-decoration: none;
    background-color: transparent;
}


.em {
    color: #aaa;
    font-weight: 500;
}
.cover {
    display: block;
    width: 40px;
    height: 40px;
}

.custom-content {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.song-name {
    
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-bottom: 2px solid transparent;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid transparent;
}

.duration-container {
    text-align: right;
    padding-right: 15px;
}
.duration {
    padding-right: 10px;
}
   
</style>

</head>

<body>
    <div class="intro">
        <div class="pic  float-left rounded-circle" >
        </div>
        <div class="text row">
            
            <div class="name col-md-6">
                <br>
            <h1>瀧川ありさ</h1> 
            
            <p>出道年分:2015</p>
            <p>國籍:日本</p>
            </div>
            <div class="sin_intro col-md-6">
                瀧川亞里沙，日本女性創作歌手，出生於東京都。2015年出道，現為日本索尼音樂娛樂旗下藝人。
            </div>
        </div>
        <div class="list">
            <div class="table">
                <table >
                <thead>
                    <tr>
                    <th class="th-index" style="width: 10%;">
                    </th>
                    <th class="th-songName" style="width: 23%;">
                    </th>
                    <th class="th-artist" style="width: 23%;">
                    </th>
                    <th class="th-duration" style="width: 23%;">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bar">
                    
                </tr>
                
            <?php
                                        $sql = "SELECT Son_Name, sin_Name, Son_Pic, Son_Address,Son_Long FROM songs,singer  WHERE sing_id = sin_id " ;
                                        $result = $conn->query($sql);
                                        $i = 2;
                                        
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            
                                            echo '<tr class="bar">
                                                    <td>            <!--icon-->
                                                    <div class="index-container">
                                                        <span class="em index">
                                                            <img class="cover" src="'.$row["Son_Pic"].'" loading="lazy">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>            <!--song name-->
                                                    <div class="songName-container">
                                                        <div class="with-mv-icon">
                                                            <div class="custom-content">
                                                                <div class="song-name em">
                                                                    <a href="#" data-spm-anchor-id="a2oj1.12028104.songs.2">'.$row["Son_Name"].'</a> <!--連歌-->
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                               <td>    <!--artist name-->
                                                    <div class="artist-container">
                                                        <div class="singers COMPACT">
                                                            <a href="#" data-spm-anchor-id="a2oj1.12028104.songs.4">'.$row["sin_Name"].'</a>      <!--連歌手-->
                                                        </div>
                                                   </div>
                                                </td>
                                                <td>       <!--song duration-->
                                                    <div class="duration-container ops-container">
                                                        <span class="duration" style="color:lightgray">'.$row["Son_Long"].'</span>
                                                    </div>
                                                </td>
                                                <td>       <!--song duration-->
                                                    <div class="duration-container ops-container">
                                                        <span class="duration" style="color:lightgray">add</span>
                                                        </div>
                                                    </td>
                                                </tr>';
                            
                                         }
                                    }
                                    ?>
            </tbody>
        </table>
            </div>
        </div>

        
    </div>
    





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>