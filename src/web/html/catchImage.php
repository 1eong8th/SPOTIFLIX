<?php

  require_once("data.php");

 mysql_select_db($database,$GD);


 $result=mysql_query("SELECT * FROM pic WHERE id=".$_GET["id"],$GD) or die("Can't perform Query");

 $row=mysql_fetch_object($result);

 Header( "Content-type: image/png");

 echo $row->pictext;

 ?>