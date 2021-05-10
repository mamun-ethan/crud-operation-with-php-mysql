<?php

$db_name = "my_db";
 $sname = "localhost";
 $uname  = "root";
 $upassword = "";

  $conn = new mysqli($sname,$uname,$upassword,$db_name);

  if (!$conn) {
    echo "Connection failed!";
  }














?>
