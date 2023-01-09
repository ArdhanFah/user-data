<?php 
  date_default_timezone_set("Asia/Jakarta");
  $host = "mydb.cluster-cfa24763haxo.us-east-2.rds.amazonaws.com";
  $user = "admin";
  $pass = "admin123";
  $db   = "mydb";    
  $conn = mysqli_connect($host,$user,$pass,$db);
  if($conn->connect_errno)
  {
    echo "Koneksi database error". $conn->connect_error;
  }           
?>
